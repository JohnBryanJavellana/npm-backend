<?php

namespace App\Services\LMS;

use App\Enums\RequestStatus;
use App\Models\CourseContent;
use App\Models\CourseContentUpload;
use App\Models\CourseModuleSection;
use App\Utils\GenerateUniqueFilename;
use App\Utils\SaveFile;
use Illuminate\Support\Facades\DB;

class LMSCourseService
{
    public function __construct(
        protected CourseModuleSection $courseModuleSectionModel,
        protected CourseContent $courseContentModel,
        protected CourseContentUpload $courseContentUploadModel,
    ) {}

    public function getCourseModules($courseModuleId, $section_id = null)
    {
        $builder = $this->courseModuleSectionModel->query()
            ->active()
            ->forCourseModule($courseModuleId)
            ->with([
                "contents",
                "contents.uploads"
            ]);

        return $builder->when($section_id, function ($query) {
            return $query->first();
        }, function ($query) {
            return $query->get();
        });
    }

    public function storeCourseSections($validated)
    {
        return DB::transaction(function () use ($validated) {
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

            return $mainRecord;
        });
    }


    public function storeCourseContent($data)
    {
        $record = $this->courseContentModel->create($data);

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
    //! an update adi ni sir allen nga pinahimo 
    public function updateCourseSections($data)
    {
        return DB::transaction(function () use ($data) {
            $record = $this->courseModuleSectionModel->findOrFail($data["id"]);

            $record->update([
                "day_number" => $data["day_number"],
                "label" => $data["label"],
            ]);

            $contentRecord = $this->courseContentModel->where("course_module_section_id", $record->id)->first();

            if ($contentRecord) {
                $contentRecord->update([
                    "title" => $data["title"],
                    "description" => $data["description"]
                ]);

                if (array_key_exists("files", $data)) {
                    $uploadFiles = [];
                    foreach ($data["files"] as $file) {
                        $filename = SaveFile::save($file, "course-modules-uploads");

                        $uploadFiles[] = [
                            "course_content_id" => $contentRecord->id,
                            "original_filename" => $file->getClientOriginalName(),
                            "filepath" => $filename,
                        ];
                    }
                    $this->courseContentUploadModel->insert($uploadFiles);
                }
            }
        });
    }
}
