<?php

namespace App\Services\Trainer\LMS\Assessments;

use App\Models\{
    Assessments
};
use Illuminate\Support\Facades\DB;

class LMSAssessmentService {
    public function __construct(
        protected Assessments $assessmentsModel
    ){}

    public function getAssessments($validated)
    {
        return $this->assessmentsModel->query()
        ->when($validated["moduleId"], function($query) use ($validated) {
            $query->forModule($validated["moduleId"]);
        })
        ->forTraining($validated["trainingId"])
        ->get();
    }

    public function storeAssessment($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId){
        $data = [
            "course_module_id" => $validated["moduleId"],
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
        // return DB::transaction(function() use ($validated){
        //     $record = 
        // });
    }
}