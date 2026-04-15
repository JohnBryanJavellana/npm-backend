<?php

namespace App\Services\LMS;

use App\Models\AssessmentAttempt;
use App\Models\Assessments;
use App\Models\AssessmentSubmission;
use App\Utils\SaveFile;

class SubmitAssessmentFileUploadManager
{
    /**
     * Summary of submitFileUpload
     * @param object $payload
     * @param string $assessmentControlNumber
     * @return array{message: string, status: int}
     */
    public function submitFileUpload(object $payload, string $assessmentControlNumber, int $enrolledCourseId) {
        $thisAssessment = Assessments::where('control_number', $assessmentControlNumber)->firstOrFail();

        $checkIfExists = AssessmentAttempt::where([
            'assessment_id' => $thisAssessment->id,
            'enrolled_course_id' => $enrolledCourseId
        ])->exists();

        if($checkIfExists) {
            return ['message' => 'Attempt on this assessment has already been submitted.', 'status' => 409];
        }

        $newAttempt = AssessmentAttempt::create([
            'assessment_id' => $thisAssessment->id,
            'enrolled_course_id' => $enrolledCourseId,
            'created_by' => $payload->user()->id,
            'submitted_at' => now(),
            'status' => "SUBMITTED"
        ]);

        $dataToInsert = [];
        foreach ($payload->fileUpload as $fileUpload) {
            $dataToInsert[] = [
                'assessment_attempt_id' => $newAttempt->id,
                'file_path' => SaveFile::save($fileUpload, "upload-reference"),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        AssessmentSubmission::insert($dataToInsert);

        return ['message' => 'Success!', 'status' => 200];
    }
}
