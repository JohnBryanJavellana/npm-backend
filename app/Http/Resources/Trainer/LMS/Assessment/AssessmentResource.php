<?php

namespace App\Http\Resources\Trainer\LMS\Assessment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssessmentResource extends JsonResource
{
    public function toArray($request)
    {
        // return parent::toArray($request);

        $isTrainee = $request->user()->role === 'TRAINEE';

        $attempt = $this->attempts->first();
        $userAnswers = $attempt ? $attempt->answers->keyBy('assessment_question_id') : collect();

        return [
            'id' => $this?->id,
            'control_number' => $this->control_number,
            'course_content_id' => $this->course_content_id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'type' => $this->type,
            'instructions' => $this->instructions,
            'passed_type' => $this->passed_type,
            'time_limit' => $this->time_limit,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'passing_score' => $this->passing_score,
            'sections' => $this->sections->map(function ($section) use ($isTrainee, $userAnswers) {
                return [
                    'id' => $section->id,
                    'title' => $section->title,
                    'instruction' => $section->instruction,
                    'status' => $section->status,
                    'questions' => $section->questions->map(function ($question) use ($isTrainee, $userAnswers) {
                        $userAnswer = $userAnswers->get($question->id);

                        $preparedData = [
                            'id' => $question->id,
                            'question' => $question->question,
                            'type' => $question->type,
                            'score' => $question->score
                        ];

                        if($isTrainee) {
                            if($question->type === "ESSAY" && !\is_null($userAnswer?->answer_text)) {
                                $preparedData['answer'] = $userAnswer?->answer_text;
                            }

                            if(\count($question->options) > 0) {
                                $preparedData['options'] = $question->options->map(function ($option) use ($isTrainee, $userAnswer) {
                                    return [
                                        'id' => $option->id,
                                        'option_text' => $option->option_text,
                                        'is_user_selected' => $userAnswer && $userAnswer->assessment_option_id == $option->id
                                    ];
                                });
                            }
                        } else {
                            $preparedData['options'] = $question->options->map(function ($option) use ($isTrainee, $userAnswer) {
                                return [
                                    'id' => $option->id,
                                    'option_text' => $option->option_text,
                                    'is_correct' => $option->is_correct
                                ];
                            });
                        }

                        return $preparedData;
                    }),
                ];
            }),
            'withSubmittedAttempt' => $isTrainee ? $this->submittedAttempts->isNotEmpty() : null
        ];
    }
}
