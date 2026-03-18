<?php

namespace App\Services\Trainer\LMS\TrainerHandout;

use App\Models\CourseModuleHandouts;
use App\Utils\SaveFile;
use Illuminate\Support\Facades\DB;

class LMSHandoutService {

    public function __construct(
        protected CourseModuleHandouts $courseModuleHandoutModel
    ){}

    public function getHandoutsByCourseModule()
    {
        return;
    }

    public function storeHandouts($validated)
    {
        DB::transaction(function() use ($validated) {
            $file = SaveFile::save($validated["file"],"course-module-handouts");

            return $this->courseModuleHandoutModel->create([
                "title" => $validated["title"],
                "file_path" => $file
            ]);
        });
    }
}