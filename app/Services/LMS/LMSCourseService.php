<?php

namespace App\Services\LMS;

use App\Models\CourseContent;
use App\Models\CourseContentUpload;
use App\Models\CourseModuleSection;
use Illuminate\Support\Facades\DB;

class LMSCourseService {
    public function __construct(
        protected CourseModuleSection $courseModuleSectionModel,
        protected CourseContent $courseContentModel,
        protected CourseContentUpload $courseContentUploadModel,
    ){}

    public function storeCourseSections($validated)
    {
        \Log::info("transaction", [$validated]);

        return DB::transaction(function() use($validated){
            $mainRecord = $this->courseModuleSectionM   odel->create(
                ...collect($validated)->only(["day_number","label","course_module_id"])->toArray()
            );

            return $mainRecord;
        });
    }
}