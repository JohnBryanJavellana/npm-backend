<?php

namespace App\Services\LMS;

use App\Models\AssessmentAnswer;
use App\Models\AssessmentAttempt;

class GradeEssayManager
{
    /**
     * Summary of gradeEssay
     * @param object $payload
     * @param int $attemptId
     * @return array{message: string, status: int}
     */
    public function gradeEssay(object $payload, int $attemptId) {
        foreach($payload->data as $value) {
            AssessmentAnswer::where([
                'assessment_attempt_id' => $attemptId,
                'assessment_question_id' => $value['answerId']
            ])
            ->lockForUpdate()
            ->update(['score' => $value['grade']]);
        }

        AssessmentAttempt::whereKey($attemptId)
            ->lockForUpdate()
            ->update([
                'graded_by' => $payload->user()->id,
                'graded_at' => now()
            ]);

        return ['message' => "Success!", 'status' => 200];
    }
}
