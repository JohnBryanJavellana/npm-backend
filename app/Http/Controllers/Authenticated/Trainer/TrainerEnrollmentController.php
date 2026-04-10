<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Models\{AssessmentAttempt, EnrolledCourse, Training, AttendanceRecord};
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
                                        "time_in" => $request->start_time,
                                        "time_out" => $request->end_time
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




    // ! ayaw pag labot, Izack ini nag ayad, para lista hand mga attemptss
    public function TraineeAssessmentDetails(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            try {
                $data = EnrolledCourse::where('training_id', $request->trainingId)
                    ->with([
                        'trainee:id,fname,lname,mname,suffix,email',
                        'assessmentAttempts' => function ($query) use ($request) {
                            $query->where('assessments_id', $request->assessmentId);
                        }
                    ])
                    ->get()
                    ->map(function ($enrolled) {
                        $traineeData = $enrolled->trainee ? $enrolled->trainee->toArray() : [];
                        $attempts = $enrolled->assessmentAttempts->map(function ($attempt) {
                            return [
                                'id' => $attempt->id,
                                'score' => $attempt->score,
                                'status' => $attempt->status,
                                'graded_at' => $attempt->graded_at,
                                'enrolled_course_id' => $attempt->enrolled_course_id
                            ];
                        });
                        return [
                            'trainee' => array_merge($traineeData, [
                                'attempts' => $attempts
                            ])
                        ];
                    });

                return response()->json(["data" => $data], 200);
            } catch (\Exception $e) {
                return response()->json(["message" => "Server Error", "error" => $e->getMessage()], 500);
            }
        });
    }

    public function getFacilitatorDetails(Request $request)
    {
        return AttendanceRecord::whereKey($request->attendance_id)->get();
    }
}
