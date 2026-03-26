<?php

namespace App\Services\Trainer\LMS\Assessments;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Enums\UserRoleEnum;
use App\Models\{
    Assessments,
    CourseModuleHandouts
};
use Illuminate\Support\Facades\DB;
use DomainException;


class LMSAssessmentService {
    public function __construct(
        protected Assessments $assessmentsModel,
        protected CourseModuleHandouts $courseModuleHandouts
    ){}

    public function getAssessments($validated, $userRole)
    {
        return;
    }

    public function getAssessmentContentById($validated)
    {
        return $this->assessmentsModel->query()
        ->whereKey($validated["assessment_id"])
        ->with([
            "sections:id,assessments_id,title,instruction",
            "sections.questions:id,assessment_section_id,question,type,score",
            "sections.questions.options:id,assessment_question_id,option_text"
        ])
        ->first();
    }

    // public function domainRuleValidation($validated) {
    //     if (isset($validated['course_content_id']) && isset($validated['training_id'])) {
    //         throw new DomainException('Assessment cannot belong to both module and training.');
    //     }
    // }

    public function storeAssessment($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId){
            // $this->domainRuleValidation($validated);        

            return $this->assessmentsModel->create([
                ...$validated,
                "created_by" => $userId 
            ]);
        });
    }

    public function updateAssessment($validated, $user_id)
    {
        return DB::transaction(function () use ($validated, $user_id) {
            // $this->domainRuleValidation($validated);      

            $data = collect($validated)->only([
                'course_content_id',
                'title',
                'description',
                'instructions',
                'passed_type',
                'passing_score',
                'is_hidden',
                'time_limit'
            ])->toArray();

            if (!empty($data['training_id'])) {
                $data['course_content_id'] = null;
            }

            if (!empty($data['course_content_id'])) {
                $data['training_id'] = null;
            }

            if(\array_key_exists("is_hidden", $validated)) {
                $isHidden = filter_var($validated['is_hidden'], FILTER_VALIDATE_BOOLEAN);
                $data["is_hidden"] = $isHidden;    
            }

            $data['updated_by'] = $user_id;

            return $this->assessmentsModel
                ->whereKey($validated["examId"])
                ->update($data);
        });
    }

    public function deleteAssessmentById($validated)
    {
        $record = $this->assessmentsModel->find($validated["assessment_id"]);

        if($record->created_by !== $validated["user_id"]) {
            throw new DomainException(AssessmentMessageResponse::UNAUTHORIZED->value);
        }

        return $record->delete();
    }
}