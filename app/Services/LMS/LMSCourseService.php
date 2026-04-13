<?php

namespace App\Services\LMS;

use App\Enums\RequestStatus;
use App\Models\AssessmentAttempt;
use App\Models\Assessments;
use App\Models\CourseContent;
use App\Models\CourseContentUpload;
use App\Models\CourseModule;
use App\Models\CourseModuleSection;
use App\Models\EnrolledCourse;
use App\Models\Training;
use App\Utils\AuditHelper;
use App\Utils\SaveFile;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LMSCourseService
{
    public function __construct(
        protected CourseModuleSection $courseModuleSectionModel,
        protected CourseContent $courseContentModel,
        protected CourseContentUpload $courseContentUploadModel,
        protected AssessmentAttempt $assessmentAttemptModel,
    ) {}

    public function getCourseModules($courseModuleId, $section_id = null)
    {
        $builder = $this->courseModuleSectionModel->query();
        return $builder->when(
            $section_id,
            function ($query) use ($section_id) {
                return $query->whereKey($section_id)->with([
                    "contents",
                    "contents.uploads",
                    "contents.assessment:id,control_number,course_content_id,title,type,status",
                    "updated_by:id,fname,mname,lname"
                ])->first();
            },
            function ($query) use ($courseModuleId) {
                return $query->forCourseModule($courseModuleId)->get();
            }
        );
    }

    public function getCourseById($moduleId)
    {
        return $this->courseModuleSectionModel->query()
            ->forCourseModule($moduleId)
            ->with([
                "contents:id,course_module_section_id,title,status",
                "contents.assessment:id,control_number,course_content_id,title,status",
                "updated_by:id,fname,mname,lname",
            ])
            ->get();
    }

    public function getContentById($contentId)
    {

        return tap($this->courseContentModel->query()
            ->whereKey($contentId)
            ->with([
                "uploads",
                "assessment_attempts",
                "assessment",
            ])
            ->first(), function ($content) {
                $content->assessment->transform(function ($item) use($content) {
                    $this_assessment = Assessments::where('control_number', $item->control_number)->first();
                    $courseModule = CourseModule::whereKey($this_assessment->courseContent->courseModuleSection->courseModule->id)->get();

                    $training = null;
                    foreach ($courseModule as $cm) {
                        $training = Training::where('course_module_id', $cm->id)->first();
                        $isCurrentEnrolled = EnrolledCourse::where([
                            'user_id' => auth()->id(),
                            'training_id' => $training->id,
                            'enrolled_course_status' => 'ENROLLED'
                        ])->first();

                        if($isCurrentEnrolled) {
                            $training = $isCurrentEnrolled;
                            break;
                        }
                    }

                    $accessible = false;
                    if ($training) {
                        $start = Carbon::parse($training->schedule_from)->startOfDay();
                        $end = Carbon::parse($training->schedule_to)->startOfDay();
                        $today = now()->startOfDay();

                        if ($today->lt($start) || $today->gt($end)) {
                            $accessible = false;
                        } else {
                            $dayCount = $today->diffInDays($start) + 1;
                            $accessible = $this_assessment->courseContent->courseModuleSection->day_number === $dayCount;
                        }
                    }

                    $isAccessible = $content->assessment_attempts->whereNotIn('status', ['SUBMITTED', 'FAILED'. 'PASSED'])->isNotEmpty() || $accessible;

                    $item->isAccessible = $isAccessible;
                    return $item;
                });
            });
    }

    public function storeCourseSections($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId) {
            $data = collect($validated);
            $mainRecord = $this->courseModuleSectionModel->create(
                $data->only([
                    "day_number",
                    "label",
                    "course_module_id"
                ])->toArray()
            );

            $this->storeCourseContent([
                "course_module_section_id" => $mainRecord->id,
                "title" => $data->get("title"),
                "description" => $data->get("description"),
                "files" => $data->get("files")
            ]);

            AuditHelper::log($userId, "has created a course content.");
            return $mainRecord;
        });
    }

    public function storeCourseContent($data)
    {
        \Log::info("datadata", $data);
        $record = $this->courseContentModel->create(
            collect($data)->only(
                "course_module_section_id",
                "title",
                "description"
            )->toArray()
        );

        if (\array_key_exists("files", $data)) {
            $uploadFiles = [];
            foreach ($data["files"] as $file) {
                $filename = SaveFile::save($file, "course-modules-uploads");

                $uploadFiles[] = [
                    "course_content_id" => $record->id,
                    "original_filename" => $file->getClientOriginalName(),
                    "filepath" => $filename,
                ];
            }
            $this->courseContentUploadModel->insert($uploadFiles);
        }
    }

    public function updateCourseContent($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            $data = collect($validated);
            $this->courseContentModel->whereKey($validated["course_content_id"])->update([
                ...$data->only(
                    "title",
                    "description",
                    "status",
                )->toArray()
            ]);
            \Log::info("updateLmsCourseContentRequest", [$validated]);

            if (\array_key_exists("files", $validated)) {

                $uploadFiles = [];
                foreach ($validated["files"] as $file) {
                    $filename = SaveFile::save($file, "course-modules-uploads");

                    $uploadFiles[] = [
                        "course_content_id" => $validated["course_content_id"],
                        "original_filename" => $file->getClientOriginalName(),
                        "filepath" => $filename,
                    ];
                }
                $this->courseContentUploadModel->insert($uploadFiles);
            }
            AuditHelper::log($userId, "has updated a course content.");
        });
    }

    public function updateCourseSection($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            $data = collect($validated);
            $this->courseModuleSectionModel->whereKey($validated["id"])->update([
                ...$data->only([
                    "day_number",
                    "label",
                    "status",
                ])->toArray(),
                "updated_by" => $userId
            ]);

            AuditHelper::log($userId, "has updated a course content.");
        });
    }

    public function deleteCourseSections($validated)
    {
        $model = match ($validated["type"]) {
            "COURSE_SECTION" => $this->courseModuleSectionModel,
            "COURSE_CONTENT" => $this->courseContentModel,
            "COURSE_CONTENT_UPLOAD" => $this->courseContentUploadModel,
        };

        $record = $model->whereKey($validated["id"])->first();

        abort_if(!$record, 404, "No record found.");

        $record->delete();
    }

    public function deteleContentUpload($validated)
    {
        $record = $this->courseContentUploadModel->find($validated);

        abort_if(!$record, 404, "File not found.");

        $filepath = "course-modules-uploads" . $record->filepath;
        $path = public_path($filepath);

        if (file_exists($path)) {
            unlink($path);
        }

        return $record->delete();
    }
}
