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

        return [
            'id' => $this?->id,
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
            'sections' => $this->sections->map(function ($section) use ($isTrainee) {
                return [
                    'id' => $section->id,
                    'title' => $section->title,
                    'instruction' => $section->instruction,
                    'status' => $section->status,
                    'questions' => $section->questions->map(function ($question) use ($isTrainee) {
                        return [
                            'id' => $question->id,
                            'question' => $question->question,
                            'type' => $question->type,
                            'score' => $question->score,
                            'status' => $question->status,
                            'options' => $question->options->map(function ($option) use ($isTrainee) {
                                return [
                                    'id' => $option->id,
                                    'option_text' => $option->option_text,
                                    'is_correct' => $isTrainee ? null : $option->is_correct,
                                ];
                            }),
                        ];
                    }),
                ];
            }),
        ];
    }
}
