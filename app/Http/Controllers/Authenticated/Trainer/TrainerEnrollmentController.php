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

    public function viewTrainingSchedules(Request $request)
    {
        try
        {
            return response()->json(["data" => $this->trainerEnrollmentService->getTrainingSchedules()], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}
