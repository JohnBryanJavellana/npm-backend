<?php

namespace App\Services\Trainer\LMS\TrainerHandout;

use App\Models\CourseModuleHandouts;
use App\Models\HandoutUpload;
use App\Utils\SaveFile;
use Illuminate\Support\Facades\DB;

class LMSHandoutService {

    public function __construct(
        protected CourseModuleHandouts $courseModuleHandoutModel,
        protected HandoutUpload $handoutUploadModel
    ){}

    public function getHandoutsByCourseModule()
    {
        return;
    }

    public function storeHandouts($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            \Log::info("storeHandouts11111111", [$validated]);
            
            $handout = $this->courseModuleHandoutModel->create([
                "course_content_id" => $validated["course_content_id"],
                "title" => $validated["title"],
                "uploaded_by" => $userId,
                "updated_by" => $userId
            ]);


            if (!empty($validated["files"])) {

                $uploads = [];
            
                foreach ($validated["files"] as $file) {

                    $path = SaveFile::save($file, "course-module-handouts");
                    \Log::info("storeHandouts", [$path]);
                    $uploads[] = [
                        "course_module_handouts_id" => $handout->id,
                        "file_path" => $path,
                        "original_file_name" => pathinfo(
                            $file->getClientOriginalName(),
                            PATHINFO_FILENAME
                        ),
                        "created_at" => now(),
                        "updated_at" => now(),
                    ];
                }

                $this->handoutUploadModel->insert($uploads);
            }
        });
    }
}