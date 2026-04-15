<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\GradeEssay;
use App\Http\Requests\LMS\GradeFileAssesment;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Models\{AssessmentAnswer, AssessmentAttempt, EnrolledCourse, Training, AttendanceRecord};
use App\Services\LMS\GradeEssayManager;
use App\Services\LMS\GradeFileAssessmentManager;
use App\Services\Trainer\Enrollment\TrainerEnrollmentService;
use App\Utils\TransactionUtil;
use Illuminate\Http\Request;

class TrainerEnrollmentController extends Controller
{
    public function __construct(
        protected TrainerEnrollmentService $trainerEnrollmentService,
        public GradeEssayManager $gradeEssayManager,
        public GradeFileAssessmentManager $gradeFileAssessmentManager
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
                        'trainee.assessmentAttempts' => fn($query) => $query->withSum('answers', 'score'),
                        'trainee.assessmentAttempts.assessment:id,type,passed_type'
                    ])
                    ->get()
                    ->map(function($enrolledCourse) {
                        $courseData = $enrolledCourse->toArray();

                        if (isset($courseData['trainee']['assessment_attempts'])) {
                            $courseData['trainee']['assessment_attempts'] = collect($courseData['trainee']['assessment_attempts'])
                                ->map(function($attempt) {
                                    if ($attempt['assessment']['passed_type'] === 'questionnaire') {
                                        $attempt['score'] = $attempt['answers_sum_score'] ?? 0;
                                    }

                                    unset($attempt['answers_sum_score']);
                                    return $attempt;
                                })->toArray();
                        }

                        return $courseData;
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

    /**
     * Summary of grade_essay
     * @param GradeEssay $request
     */
    public function grade_essay(GradeEssay $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $attemptId = $request->attempt_id;
            $attemptStatus = $request->attemptStatus;

            $result = $this->gradeEssayManager->gradeEssay($request, $attemptId, $attemptStatus);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of grade_file_assessment
     * @param GradeFileAssesment $request
     */
    public function grade_file_assessment(GradeFileAssesment $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $attemptId = $request->attempt_id;
            $attemptStatus = $request->attemptStatus;

            $result = $this->gradeFileAssessmentManager->gradeFileAssessment($request, $attemptId, $attemptStatus);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }
}
