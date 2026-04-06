<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Models\{EnrolledCourse, Training, AttendanceRecord};
use App\Services\Trainer\Enrollment\TrainerEnrollmentService;
use App\Utils\TransactionUtil;
use Illuminate\Http\Request;

class TrainerEnrollmentController extends Controller
{
    public function __construct(
        protected TrainerEnrollmentService $trainerEnrollmentService,
    ) {}

    public function viewAllTrainingsAndFacilitators(Request $request)
    {
        return $this->trainerEnrollmentService->getAllTrainingsAndFacilitators();
    }

    public function viewAllTrainee(Request $request, $training)
    {
        try {
            return $this->trainerEnrollmentService->getTrainees($training);
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }

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
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {

                $record = Training::with([
                    "module",
                    "module.moduleType",
                    "module.trainingFees:id,course_module_id,charge_category_id,name,amount",
                    "module.trainingFees.category:id,name",
                    "module.specific_requirements",
                    "module.facilitator",
                    "module.facilitator.facilitator:id,fname,mname,lname"
                ])
                ->whereKey($request->trainingId)
                ->first();

                return response()->json([
                    "training" => $record,
                ], 200);
            }
        );
    }

    public function getTraineeDetails(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {

                try {
                    $list = EnrolledCourse::where('training_id', $request->trainingId)
                        ->with([
                            'trainee',
                            'traineeAttendanceRecord' => function ($query) use ($request) {
                                $query->whereHas("attendance", function ($q) use ($request) {
                                    $q->where([
                                        "training_date" => $request->training_date,
                                        "start_time" => $request->start_time,
                                        "end_time" => $request->end_time
                                    ]);
                                });
                            }
                        ])
                        ->where('enrolled_course_status', 'ENROLLED')
                        ->get();

                    return response()->json(["data" => $list], 200);
                } catch (\Exception $e) {
                    return response()->json(["message" => "Server Error", "error" => $e->getMessage()], 500);
                }
            }
        );
    }

    public function getFacilitatorDetails(Request $request)
    {
        return AttendanceRecord::whereKey($request->attendance_id)->get();
    }
}
