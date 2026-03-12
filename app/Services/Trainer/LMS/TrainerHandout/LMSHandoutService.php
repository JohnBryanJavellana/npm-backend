<?php

namespace App\Services\Trainer\LMS\TrainerHandout;

use App\Models\CourseModuleHandouts;

class LMSHandoutService {

    public function __construct(
        protected CourseModuleHandouts $courseModuleHandoutModel
    ){}

    public function getHandoutsByCourseModule()
    {
        return;
    }

    public function storeHandouts()
    {
        return;
    }

    

}