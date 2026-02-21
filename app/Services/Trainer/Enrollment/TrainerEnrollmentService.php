<?php

namespace App\Services\Trainer\Enrollment;

use App\Models\{CourseModule,Training,TrainingFacilitator};
use Illuminate\Support\Facades\Auth;

class TrainerEnrollmentService {
    public function __construct(
        protected TrainingFacilitator $trainingFacilitatorModel,
        protected CourseModule $courseModuleModel,
        protected Training $trainingModel
    ) {}


    public function getDataFacilitator()
    {
        $userId = Auth::id();
        return $this->courseModuleModel->query()
        ->whereRelation("facilitator", "user_id", $userId)
        ->get();
    }

    public function getTrainingSchedules()
    {
        $userId = Auth::id();
        return $this->trainingModel->query()
        ->with([
            "module.facilitator"
        ])
        ->whereHas("module", function($query) use ($userId) {
            $query->whereRelation("facilitator", "user_id", $userId);
        })
        ->get();
    }

    public function functionName()
    {
        return;
    }
}