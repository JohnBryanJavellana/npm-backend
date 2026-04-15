<?php

namespace App\Services\LMS;

use App\Models\AssessmentAttempt;

class GradeFileAssessmentManager
{
    /**
     * Summary of gradeFileAssessment
     * @param object $payload
     * @param int $attemptId
     * @return array{message: string, status: int}
     */
    public function gradeFileAssessment(object $payload, int $attemptId, string $attemptStatus) {
        AssessmentAttempt::whereKey($attemptId)
            ->lockForUpdate()
            ->update([
                'score' => $payload->grade,
                'status' => $attemptStatus,
                'graded_by' => $payload->user()->id,
                'graded_at' => now()
            ]);

        return ['message' => "Success!", 'status' => 200];
    }
}
