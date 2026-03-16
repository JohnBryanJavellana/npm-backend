<?php

namespace App\Services\Trainer\LMS\Assessments;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Models\{
    Assessments
};
use Illuminate\Support\Facades\DB;
use DomainException;


class LMSAssessmentService {
    public function __construct(
        protected Assessments $assessmentsModel
    ){}

    public function getAssessments($validated)
    {
        $courseId = $validated["course_module_id"] ?? null;
        $trainingId = $validated["training_id"] ?? null;
        
        return $this->assessmentsModel->query()
        ->where("training_id", $trainingId)
        ->orWhere("course_module_id", $courseId)
        ->get();
    }

    public function domainRuleValidation($validated) {
        if (isset($validated['course_module_id']) && isset($validated['training_id'])) {
            throw new DomainException('Assessment cannot belong to both module and training.');
        }
    }

    public function storeAssessment($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId){
            $this->domainRuleValidation($validated);        

            return $this->assessmentsModel->create([
                ...$validated,
                "created_by" => $userId
            ]);
        });
    }

public function updateAssessment($validated, $user_id)
{
    return DB::transaction(function () use ($validated, $user_id) {
        $this->domainRuleValidation($validated);        

        $data = collect($validated)->only([
            'training_id',
            'course_module_id',
            'title',
            'description',
            'instructions',
            'passed_type',
            'passing_score',
            'start_date',
            'start_time',
            'time_limit'
        ])->toArray();

        // enforce rule: only one display scope
        if (!empty($data['training_id'])) {
            $data['course_module_id'] = null;
        }

        if (!empty($data['course_module_id'])) {
            $data['training_id'] = null;
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