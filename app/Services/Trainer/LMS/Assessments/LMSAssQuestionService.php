<?php

namespace App\Services\Trainer\LMS\Assessments;

use App\Models\AssessmentAnswer;
use App\Models\AssessmentOption;
use App\Models\AssessmentQuestion;
use Illuminate\Support\Facades\DB;

class LMSAssQuestionService {
    public function __construct(
       protected AssessmentQuestion $assessmentQuestionModel,
       protected AssessmentAnswer $assessmentAnswerModel,
       protected AssessmentOption $assessmentOptionModel
    ){}

    public function getQuestionsBySections($sectionId)
    {
        return $this->assessmentQuestionModel->query()
        ->section($sectionId)
        ->with([
            "options"
        ])
        ->get();
    }

    private function storeQuestionChoices($question, $choices)
    {
        DB::transaction(function() use($choices, $question){
            $data = [];
            foreach($choices as $choice) {
                $data[] = [ 
                    "assessment_question_id" => $question->id,
                    "option_text" => $choice["option_text"],
                    "is_correct" => match ($choice["is_correct"]) {
                        "false" => false,
                        "true" => true
                    },
                    "created_at" => now(),
                    "updated_at" => now(),
                ];
            }
            $this->assessmentOptionModel->insert($data);
        });
   }

    public function storeAssessmentQuestions($validated)
    {
        DB::transaction(function() use ($validated)
        {
            $data = [
                ...collect($validated)->only([
                    "assessment_section_id",
                    "question",
                    "type",
                    "score",
                ])
            ];
        
            $question = $this->assessmentQuestionModel->create($data);

            if (array_key_exists('choices', $validated)) {
                $this->storeQuestionChoices($question, $validated["choices"]);
            }
        });
    }

    public function updateAssessmentQuestions($validated)
    {
        DB::transaction(function() use($validated){
            $record = $this->assessmentQuestionModel->query()
            ->lockForUpdate()
            ->section($validated["assessment_section_id"])
            ->whereKey($validated["question_id"])
            ->first();

            abort_if($record === null, 404, "No Record found.");

            $data = collect($validated)->only([
                "question",
                "type",
                "score",
            ])->toArray();

            $record->update($data);
            if(\array_key_exists("choices",$validated)) {
                $this->upsertAssessmentQuestions($validated);
            }

            if(array_key_exists("deleted_choice_ids", $validated)) {
                $this->deleteQuestions($validated["deleted_choice_ids"]);
            }
        });
    }

    private function upsertAssessmentQuestions($validated)
    {
        $now = now();
        foreach ($validated["choices"] as $choice) {
            $isCorrect = filter_var($choice['is_correct'], FILTER_VALIDATE_BOOLEAN);

            $row = [
                'assessment_question_id' => $validated["question_id"],
                'option_text'            => $choice['option_text'],
                'is_correct'             => $isCorrect,
                'updated_at'             => $now,
            ];

            if (!empty($choice['id'])) {
                $row['id']         = $choice['id'];
                $row['created_at'] = null; 
            } else {
                $row['created_at'] = $now;
            }

            $upsertData[] = $row;
        }
        $this->assessmentOptionModel->upsert(
            $upsertData,
            ['id'],                                        
            ['option_text', 'is_correct', 'updated_at']
        );
    }

    private function deleteQuestions($deleteIds)
    {
        return $this->assessmentOptionModel->whereIn("id", $deleteIds)->delete();
    }

    public function deleteAssessmentQuestions($questionId)
    {
        $record = $this->assessmentQuestionModel->query()
        ->find($questionId);

        abort_if(!$record, 404, "No Record Found.");

        $record->delete();
    }
}