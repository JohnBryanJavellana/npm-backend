<?php

namespace App\Services\LMS;

use App\Models\AssessmentAnswer;

class GradeEssayManager
{
    /**
     * Summary of gradeEssay
     * @param object $payload
     * @param int $attemptId
     * @return array{message: string, status: int}
     */
    public function gradeEssay($payload, int $attemptId) {
        foreach($payload->data as $item) {
            AssessmentAnswer::lockForUpdate()
                ->whereKey($item->answerId)
                ->where([
                    'assessement_attempt_id' => $attemptId,
                    'assessment_question_id' => $item->answerId
                ])
                ->update([
                    'score' => $item->grade
                ]);
        }

        return ['message' => "Success!", 'status' => 200];
    }
}
