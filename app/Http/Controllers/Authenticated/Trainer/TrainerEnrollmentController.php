<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Models\CourseModule;
use App\Models\EnrolledCourse;
use App\Models\Training;
use App\Models\TrainingSchedule;
use App\Models\User;
use App\Services\Trainer\Enrollment\TrainerEnrollmentService;
use Illuminate\Http\Request;

class TrainerEnrollmentController extends Controller
{
    public function __construct(
        protected TrainerEnrollmentService $trainerEnrollmentService,
    ) {}

    public function view(Request $request)
    {
        try {
            return CourseModuleResource::collection($this->trainerEnrollmentService->getDataFacilitator());
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function viewTrainingSchedules(Request $request, $course)
    {
        try {
            return response()->json(["data" => $this->trainerEnrollmentService->getTrainingSchedules($course)], 200);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function getCourseDetails(Request $request)
    {
        \Log::info("message", [$request->all()]);
        $record = Training::with([
            "module:id,module_type_id,name,",
            "module.moduleType",
        ])
            ->where('id', 20260001)
            ->first();
        return response()->json(["courseDetails" => $record], 200);

        // ->where('id', 20260001)
        // ->get();


        // $course_details = CourseModule::with('course_module_id')
        //     ->where('specific_requirements')
        //     ->get();

        // $courseSchedules = Training::all();

        // return response()->json(["courseDetails" => $course_details], 200);
    }


    public function getTraineeDetails(Request $request)
    {


        // $list = EnrolledCourse::where('training_id', 'user_id')
        //     ->with(['trainee'])
        //     ->get();


        // return response()->json(["data" => $list], 200);


        try {
            $list = EnrolledCourse::where('training_id', $request->trainingId)
                ->with(['trainee'])
                ->get();

            return response()->json(["data" => $list], 200);
        } catch (\Exception $e) {
            return response()->json(["message" => "Server Error", "error" => $e->getMessage()], 500);
        }
    }
}
