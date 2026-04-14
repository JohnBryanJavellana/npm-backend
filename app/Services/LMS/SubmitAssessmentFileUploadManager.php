<?php

namespace App\Services\LMS;

use App\Models\Assessments;
use App\Models\AssessmentSubmission;

class SubmitAssessmentFileUploadManager
{

    public function submitFileUpload(object $payload, string $assessmentControlNumber) {
        $thisAssessment = Assessments::where('control_number', $assessmentControlNumber)->firstOrFail();

        // AssessmentSubmission::

        return ['message' => 'Success!', 'status' => 200];
    }
}
