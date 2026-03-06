<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Enums\RequestStatus;
use App\Http\Controllers\Controller;
use App\Models\TrainingFacilitator;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(
        protected User $userModel,
        protected TrainingFacilitator $trainingFacilitatorModel,
    ) {}

    public function getEventAndSchedule()
    {
        return $this->trainingFacilitatorModel->query()
        ->select("id", "user_id", "course_module_id", "role")
        ->with([
            "module:id,name,acronym",
            "module.schedules:id,course_module_id,schedule_from,schedule_to,venue,room,batch_number"
        ])
        ->whereHas("module.schedules", function($query) {
            $query->where("status", RequestStatus::ACTIVE->value);
        })
        ->get();
    }
}
