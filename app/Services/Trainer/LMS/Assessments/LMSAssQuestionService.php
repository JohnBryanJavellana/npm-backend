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
        ->with([
            "options"
        ])
        ->section($sectionId)
        ->get();
    }


    private function storeQuestionChoices($question, $choices)
    {
        DB::transaction(function() use($choices, $question){
            $data = [];
            foreach($choices as $choice) {
                $data[] = [ 
                    "assessment_question_id" => $question->id ?? 1,
                    "option_text" => $choice["option_text"],
                    "is_correct" => match ($choice["answer"]) {
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

            $this->storeQuestionChoices($question, $validated["choices"]);
        });
    }

    public function updateAssessmentQuestions()
    {
        return;
    }

    public function deleteAssessmentQuestions($questionId)
    {
        $record = $this->assessmentQuestionModel->find($questionId);

        $record->delete();
    }
}