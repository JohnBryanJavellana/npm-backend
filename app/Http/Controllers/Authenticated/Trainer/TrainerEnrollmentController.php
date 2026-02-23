<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Services\Trainer\Enrollment\TrainerEnrollmentService;
use Illuminate\Http\Request;

class TrainerEnrollmentController extends Controller
{
    public function __construct(
        protected TrainerEnrollmentService $trainerEnrollmentService,
    )
    {}

    public function viewAllTrainingsAndFacilitators(Request $request)
    {
        return $this->trainerEnrollmentService->getAllTrainingsAndFacilitators();
    }

    public function viewAllTrainee(Request $request, $training)
    {
        try
        {            
            return $this->trainerEnrollmentService->getTrainees($training);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function view(Request $request)
    {
        try
        {
            return CourseModuleResource::collection($this->trainerEnrollmentService->getDataFacilitator());
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function viewTrainingSchedules(Request $request, $course)
    {
        try
        {
            return response()->json(["data" => $this->trainerEnrollmentService->getTrainingSchedules($course)], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function viewTrainingScheduleDetails(Request $request)
    {
        try
        {
            return $this->trainerEnrollmentService->getTrainingDetails();
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }
    
    public function viewTrainees(Request $request, $trainingId)
    {
        try
        {
            return $this->trainerEnrollmentService->getTrainees($trainingId);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }
}
