<?php

namespace App\Services\Trainee\LMS;

use App\Models\Assessments;

class LMSTraineeAssessmentService {
    public function __construct(
        protected Assessments $assessmentsModel
    ){}

    public function getAssessments()
    {
        return;
    }
}