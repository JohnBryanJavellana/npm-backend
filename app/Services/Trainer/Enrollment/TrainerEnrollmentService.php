<?php

namespace App\Services\Trainer\Enrollment;

use App\Enums\RequestStatus;
use App\Models\{CourseModule, EnrolledCourse, Training, TrainingFacilitator};
use Illuminate\Support\Facades\Auth;

class TrainerEnrollmentService
{
    public function __construct(
        protected TrainingFacilitator $trainingFacilitatorModel,
        protected EnrolledCourse $enrolledCourseModel,
        protected CourseModule $courseModuleModel,
        protected Training $trainingModel
    ) {}

    public function getAllTrainingsAndFacilitators()
    {
        return $this->trainingModel->query()
            ->with([
                "module",
                "module.facilitator.facilitator"
            ])
            ->get();
    }

    public function getTrainees($trainingId)
    {
        return $this->enrolledCourseModel->query()
            ->whereIn("enrolled_course_status", RequestStatus::ActiveEnrollmentStatus())
            ->forTraining($trainingId)
            ->first();
    }

    public function getDataFacilitator()
    {
        $userId = Auth::id();
        return $this->courseModuleModel->query()
            ->whereRelation("facilitator", "user_id", $userId)
            ->get();
    }


    public function getTrainingSchedules($course_module_id)
    {
        $userId = Auth::id();
        return $this->trainingModel->query()
            ->where("course_module_id", $course_module_id)
            ->whereHas("module", function ($query) use ($userId) {
                $query->whereRelation("facilitator", "user_id", $userId);
            })
            ->get();
    }
}
