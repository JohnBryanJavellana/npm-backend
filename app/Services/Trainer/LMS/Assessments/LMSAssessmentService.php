<?php

namespace App\Services\Trainer\LMS\Assessments;

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
        if (isset($validated['moduleId']) && isset($validated['id'])) {
            throw new DomainException('Assessment cannot belong to both module and training.');
        }
    }

    public function storeAssessment($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId){

        $this->domainRuleValidation($validated);

        $data = [
            "course_module_id" => $validated["moduleId"] ?? null,
            "training_id" => $validated["id"] ?? null,            
            "title" => $validated["title"],
            "description" => $validated["description"],
            "passing_score" => $validated["passingScore"],
            "start_date" => $validated["startDate"],
            "end_date" => $validated["dueDate"],
            "start_time" => $validated["startTime"],
            "end_time" => $validated["dueTime"],
            "time_limit" => $validated["timeLimit"],
            "created_by" => $userId
            ];
            
        return $this->assessmentsModel->create($data);
        });
    }

    public function updateAssessment($validated)
    {
        return;
    }
}