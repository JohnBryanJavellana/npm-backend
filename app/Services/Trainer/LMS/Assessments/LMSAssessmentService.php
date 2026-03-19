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
        $courseId = $validated["course_module_id"] ?? null;
        $trainingId = $validated["training_id"] ?? null;
        $type = $validated["type"] ?? null;
    
        $assessments =  $this->assessmentsModel->query()
        ->with([
            "created_by:id,fname,mname,lname",
            "updated_by:id,fname,mname,lname"
        ])
        ->when($type, function($query) use ($type) { 
            $query->type($type);
        })
        ->where("training_id", $trainingId)
        ->orWhere("course_module_id", $courseId)
        ->when($userRole === UserRoleEnum::TRAINEE->value, fn($query) => $query->viewAsTrainee())
        ->when($userRole === UserRoleEnum::TRAINER->value, fn($query) => $query->viewAsTrainer())
        ->get();

        $handouts = $this->courseModuleHandouts->query()
        ->with([
            "uploaded_by:id,fname,mname,lname",
            "updated_by:id,fname,mname,lname",
            "upload"
        ])
        ->courseModule($courseId)
        ->get();

        return [
            "assessments" => $assessments->toArray(), 
            "materials" => $handouts->toArray()
        ];
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

        if (!empty($data['training_id'])) {
            $data['course_module_id'] = null;
        }

        if (!empty($data['course_module_id'])) {
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