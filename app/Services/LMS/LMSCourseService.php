<?php

namespace App\Services\LMS;

use App\Enums\RequestStatus;
use App\Models\CourseContent;
use App\Models\CourseContentUpload;
use App\Models\CourseModuleSection;
use App\Utils\AuditHelper;
use App\Utils\SaveFile;
use DomainException;
use Illuminate\Support\Facades\DB;

class LMSCourseService {
    public function __construct(
        protected CourseModuleSection $courseModuleSectionModel,
        protected CourseContent $courseContentModel,
        protected CourseContentUpload $courseContentUploadModel,
    ){}

    public function getCourseModules($courseModuleId, $section_id = null)
    {
        $builder = $this->courseModuleSectionModel->query();
        return $builder->when($section_id, function ($query) use ($section_id){
            return $query->whereKey($section_id)->with([
                    "contents",
                    "contents.uploads",
                    "updated_by:id,fname,mname,lname"
                ])->first();
            }, function ($query) use ($courseModuleId){
                return $query->forCourseModule($courseModuleId)->get();
            }
        );
    }

    public function storeCourseSections($validated, $userId)
    {
        return DB::transaction(function() use($validated, $userId){
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

        if(\array_key_exists("files", $data)) {
            $uploadFiles = [];
            foreach($data["files"] as $file) {
                $filename = SaveFile::save($file,"course-modules-uploads");

                $uploadFiles[] = [
                    "course_content_id" => $record->id,
                    "original_filename" => $file->getClientOriginalName(),
                    "filepath" => $filename,
                ];
            }
            $this->courseContentUploadModel->insert($uploadFiles);
        }
    }

    public function updateCourseContent($validated)
    {
        return;
    }

    public function updateCourseContentParent($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId){
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
        $model = match($validated["type"]) {
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

        $filepath = "course-modules-uploads" + $record->filepath;   
        $path = public_path($filepath);

        if (file_exists($path)) {
        \Log::info("deteleContentUpload", [$path]);
            // unlink($path);
        }

        // return $record->delete();
    }
}