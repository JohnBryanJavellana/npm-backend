<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\ViewSpecifiedAssessment;
use App\Http\Requests\Trainer\LMS\Assessment\viewSpecificAssessmentRequest;
use App\Http\Requests\Trainer\LMS\createAssessmentRequest;
use App\Http\Requests\Trainer\LMS\deleteAssessmentRequest;
use App\Http\Requests\Trainer\LMS\updateAssessmentRequest;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Http\Resources\Trainer\LMS\Assessment\AssessmentResource;
use App\Http\Resources\Trainer\LMS\ViewAssessmentContentResource;
use App\Models\AssessmentAnswer;
use App\Models\AssessmentAttempt;
use App\Models\AssessmentAttemptAction;
use App\Models\Assessments;
use App\Models\CourseContent;
use App\Models\CourseModuleSection;
use App\Models\AssessmentAttempts;
use App\Models\EnrolledCourse;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use DomainException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;
use function Laravel\Prompts\select;
use Illuminate\Validation\ValidationException;
use App\Utils\TransactionUtil;

class LMSAssessmentController extends Controller
{
    public function __construct(
        protected LMSAssessmentService $lmsAssessmentService
    ) {}

    public function view(viewAssessmentRequest $request)
    {
        try {
            return CourseContent::with(['assessment'])
                ->get();
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }


    public function viewAssessment(Request $request)
    {
        try {
            return CourseModuleSection::where("course_module_id", $request->course_module_id)
                ->select("id", "course_module_id", "label", "status", "day_number")
                ->with([
                    'contents' => function ($query) use ($request) {
                        $query->select("id", "course_module_section_id", "title", "status")
                            ->whereKey($request->content_id);
                    },
                    'contents.assessment:id,training_id,course_content_id,title,type,passed_type'
                ])
                ->get();
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function viewTopic(Request $request)
    {
        try {
            $record = Assessments::whereKey($request->assessment_id)
                ->with([
                    'sections.questions.options'
                ])
                ->first();
            return new AssessmentResource($record);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function viewAssessmentContent(viewSpecificAssessmentRequest $request)
    {
        try {
            return new ViewAssessmentContentResource($this->lmsAssessmentService->getAssessmentContentById($request->validated()));
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function create(createAssessmentRequest $request)
    {
        try {
            $validated = $request->validated();
            $this->lmsAssessmentService->storeAssessment($validated, $request->user()->id);
            return response()->json(["message" => AssessmentMessageResponse::CREATED->value], 200);
        } catch (DomainException $e) {
            throw $e;
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function update(updateAssessmentRequest $request)
    {
        try {
            $this->lmsAssessmentService->updateAssessment($request->validated(), $request->user()->id);
            return response()->json(["message" => AssessmentMessageResponse::UPDATED->value], 200);
        } catch (\Exception $e) {
            // \Log::error("updateError", [$e->getMessage()]);
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function delete(deleteAssessmentRequest $request)
    {
        try {
            $this->lmsAssessmentService->deleteAssessmentById($request->validated());
            return response()->json(["message" => "Assessment has been deleted successfully."], 200);
        } catch (DomainException $e) {
            throw $e;
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }




    public function TraineeAssessmentDetailsForTrainer(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            try {
                $list = EnrolledCourse::where('training_id', $request->training_id)
                    ->with([
                        'trainee:id,id,fname,lname,mname,suffix,email',
                        'assessmentAttempts' => function ($query) use ($request) {
                            $query->where('assessments_id', $request->assessment_id)
                                ->with([
                                    'answers.assessment_option',
                                    'answers.assessment_question'
                                ]);
                        }
                    ])
                    ->get()
                    ->map(function ($enrolled) {
                        return [
                            'enrolled_course_id' => $enrolled->id,
                            'trainee' => $enrolled->trainee ? [
                                'id' => $enrolled->trainee->id,
                                'fname' => $enrolled->trainee->fname,
                                'lname' => $enrolled->trainee->lname,
                                'mname' => $enrolled->trainee->mname,
                                'suffix' => $enrolled->trainee->suffix,
                                'email' => $enrolled->trainee->email
                            ] : null,
                            'questions' => $enrolled->assessmentAttempts->flatMap(function ($attempt) {
                                return $attempt->answers->map(function ($answer) {
                                    return [
                                        'question' => $answer->assessment_question ? [
                                            'id' => $answer->assessment_question->id,
                                            'question' => $answer->assessment_question->question,
                                            'question_text' => $answer->assessment_question->question,
                                            'type' => $answer->assessment_question->type ?? null,
                                            'score' => $answer->assessment_question->score ?? null,
                                            'status' => $answer->assessment_question->status ?? null,
                                            'assessment_section_id' => $answer->assessment_question->assessment_section_id ?? null,
                                            'updated_by' => $answer->assessment_question->updated_by ?? null,
                                            'created_at' => $answer->assessment_question->created_at ?? null,
                                            'updated_at' => $answer->assessment_question->updated_at ?? null
                                        ] : null,
                                        'answer' => [
                                            'id' => $answer->id,
                                            'answer_text' => $answer->answer_text,
                                            'is_correct' => $answer->is_correct,
                                            'score' => $answer->score,
                                            'assessment_question_id' => $answer->assessment_question_id,
                                            'assessment_option_id' => $answer->assessment_option_id
                                        ],
                                        'option' => $answer->assessment_option ? [
                                            'id' => $answer->assessment_option->id,
                                            'option_text' => $answer->assessment_option->option_text,
                                            'is_correct' => $answer->assessment_option->is_correct,
                                            'order' => $answer->assessment_option->order ?? null
                                        ] : null
                                    ];
                                });
                            })->toArray()
                        ];
                    })->toArray();

                return response()->json(["data" => $list], 200);
            } catch (\Exception $e) {
                return response()->json(["message" => "Error", "error" => $e->getMessage()], 500);
            }
        });
    }

    public function assessment_answers(Request $request)
    {
        try {
            \Log::info("Received assessment attempt request", $request->all());
            $validated = $request->validate([
                "assessment_id" => "required|integer|   exists:assessments,id",
                "answers" => "nullable|array",
                "answers.*.assessment_question_id" => "required|integer|exists:assessment_questions,id",
                "answers.*.assessment_option_id" => "required|integer|exists:assessment_options,id",
                "answers.*.assessment_answer_text" => "nullable|string",
            ]);

            if (!isset($validated['assessment_id']) || $validated['assessment_id'] === 'undefined' || $validated['assessment_id'] <= 0) {
                return response()->json([
                    "message" => "Invalid assessment_id",
                    "error" => "assessment_id is required and must be a valid positive integer"
                ], 422);
            }

            DB::beginTransaction();

            try {
                $userId = auth()->id();
                $assessmentId = $validated["assessment_id"];

                \Log::info("Starting assessment attempt for user: $userId, assessment: $assessmentId");
                $enrolledCourse = DB::table('enrolled_courses')
                    ->where('user_id', $userId)
                    ->where('enrolled_course_status', 'ENROLLED')
                    ->orderByDesc('id')
                    ->first();

                if (!$enrolledCourse) {
                    $defaultTrainingId = env('DEFAULT_TRAINING_ID', 1);

                    $enrolledCourseId = DB::table('enrolled_courses')->insertGetId([
                        'user_id' => $userId,
                        'training_id' => $defaultTrainingId,
                        'enrolled_course_status' => 'ENROLLED',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);

                    $enrolledCourse = DB::table('enrolled_courses')
                        ->where('id', $enrolledCourseId)
                        ->first();
                }

                $existingAttempt = AssessmentAttempt::where([
                    "assessments_id" => $assessmentId,
                    "enrolled_course_id" => $enrolledCourse->id,
                    "status" => "SUBMITTED"
                ])->first();

                if ($existingAttempt) {
                    DB::rollBack();
                    return response()->json([
                        "message" => "Assessment already submitted. No further submissions allowed.",
                        "assessment_attempt_id" => $existingAttempt->id
                    ], 403);
                }

                $attempt = AssessmentAttempt::firstOrCreate(
                    [
                        "assessments_id" => $assessmentId,
                        "enrolled_course_id" => $enrolledCourse->id,
                        "status" => "IN_PROGRESS"
                    ],
                    ["score" => 0, "graded_by" => 1, "submitted_at" => now(), "graded_at" => now()]
                );

                \Log::info("Assessment attempt ID: " . $attempt->id);

                $correctCount = 0;
                $answers = [];
                $status = 'IN_PROGRESS';
                $passingScore = 60;

                if (!empty($validated["answers"]) && is_array($validated["answers"])) {
                    \Log::info("Processing " . count($validated["answers"]) . " answers");

                    foreach ($validated["answers"] as $answer) {
                        $option = DB::table('assessment_options')
                            ->where('id', $answer["assessment_option_id"])
                            ->where('assessment_question_id', $answer["assessment_question_id"])
                            ->first();

                        if (!$option) {
                            throw new Exception("Assessment option not found");
                        }

                        $answerMatches = strtolower($answer["assessment_answer_text"] ?? '') === strtolower($option->option_text);
                        $isCorrect = (bool) $option->is_correct;
                        $isFinalCorrect = $answerMatches && $isCorrect;

                        if ($isFinalCorrect) $correctCount++;

                        $answers[] = AssessmentAnswer::updateOrCreate(
                            [
                                "assessment_attempt_id" => $attempt->id,
                                "assessment_question_id" => $answer["assessment_question_id"]
                            ],
                            [
                                "assessment_option_id" => $option->id,
                                "answer_text" => $answer["assessment_answer_text"] ?? null,
                                "is_correct" => $isFinalCorrect ? 1 : 0,
                                "score" => $isFinalCorrect ? 1 : 0
                            ]
                        );
                    }

                    $total = count($validated["answers"]);
                    $score = $total > 0 ? ($correctCount / $total) * 100 : 0;

                    \Log::info("Score calculation - Correct: $correctCount, Total: $total, Score: $score%");

                    $assessment = DB::table('assessments')
                        ->where('id', $assessmentId)
                        ->first();

                    $passingScore = $assessment->passing_score ?? 60;


                    if ($score >= $passingScore) {
                        $status = 'PASSED';
                    } else {
                        $status = 'FAILED';
                    }

                    \Log::info("Result - Status: $status, Score: $score%, Passing: $passingScore%");


                    if (now()->diffInMinutes($attempt->created_at) >= 60) {
                        if ($status !== 'PASSED' && $status !== 'FAILED') {
                            $status = 'SUBMITTED';
                        }
                        \Log::info("Time limit check - Final status: $status");
                    }
                }

                $attempt->update([
                    'score' => $score ?? 0,
                    'status' => $status,
                    'graded_at' => now()
                ]);

                DB::commit();

                \Log::info("Assessment attempt completed successfully - Status: $status");

                return response()->json([
                    "message" => $status === 'PASSED' ? "Assessment passed!" : ($status === 'FAILED' ? "Assessment failed. Please try again." : "Assessment submitted."),
                    "assessment_attempt_id" => $attempt->id,
                    "score" => round($score ?? 0, 2),
                    "correct_answers" => $correctCount ?? 0,
                    "total_answers" => $total ?? 0,
                    "status" => $status,
                    "passing_score" => $passingScore,
                    "data" => $answers
                ], 201);
            } catch (\Exception $e) {
                DB::rollBack();
                \Log::error("Error in tryAnswers: " . $e->getMessage());
                throw $e;
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error("Validation failed: " . json_encode($e->errors()));
            return response()->json([
                "message" => "Validation failed",
                "errors" => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error("Exception: " . $e->getMessage());
            return response()->json([
                "message" => "An error occurred.",
                "error" => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }


    //! reusesable function for logging user actions during assessment attempts
    public function logUserAction(Request $request)
    {
        try {
            $validated = $request->validate([
                'action' => 'required|string|max:255',
                'assessment_attempt_id' => 'nullable|integer'
            ]);

            DB::table('assessment_attempt_actions')->insert([
                'user_id' => auth()->id(),
                'assessment_attempt_id' => $validated['assessment_attempt_id'] ?? null,
                'actions' => $validated['action'],
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return response()->json([
                'message' => 'Action logged successfully',
                'action' => $validated['action']
            ], 201);
        } catch (\Exception $e) {
            \Log::error('Failed to log action: ' . $e->getMessage());
            return response()->json([
                'message' => 'Error logging action',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function detectAttemptActions(Request $request)
    {
        try {
            $actions = DB::table('assessment_attempt_actions')
                ->where('user_id', auth()->id())
                ->orderBy('created_at', 'desc')
                ->paginate(20);

            return response()->json([
                'message' => 'User assessment actions',
                'total_actions' => $actions->total(),
                'data' => $actions
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error fetching actions',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
