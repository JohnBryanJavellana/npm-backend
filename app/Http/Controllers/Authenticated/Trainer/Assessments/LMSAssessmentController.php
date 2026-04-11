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
use App\Utils\AuditHelper;
use App\Utils\TransactionUtil;
use Carbon\Carbon;

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

    //! this is fix code // Create attempt and answers //score is fix to boolean
    public function assessment_answers(Request $request)
    {
        try {
            $validated = $request->validate([
                "assessment_id" => "required|integer|exists:assessments,id",
                "answers" => "nullable|array",
                "answers.*.assessment_question_id" => "required|integer|exists:assessment_questions,id",
                //! nullable kay it essay waray option id 
                "answers.*.assessment_option_id" => "nullable|integer|exists:assessment_options,id",
                "answers.*.assessment_answer_text" => "nullable|string",

                "proctoring_events" => "nullable|array",
                // "type" => "nullable|array",
            ]);

            DB::beginTransaction();

            try {
                $enrolledCourse = DB::table('enrolled_courses')
                    ->where('user_id', auth()->id())
                    ->where('enrolled_course_status', 'ENROLLED')
                    ->first();

                if (!$enrolledCourse) {
                    return response()->json(["message" => "No enrolled course found."], 404);
                }

                $attempt = AssessmentAttempt::firstOrCreate(
                    [
                        "assessments_id" => $validated["assessment_id"],
                        "enrolled_course_id" => $enrolledCourse->id,
                        "status" => "IN_PROGRESS"
                    ],
                    ["score" => 0, "graded_by" => 1, "submitted_at" => now(), "graded_at" => now()]
                );

                $correctCount = 0;
                $answers = [];
                $autoGradableCount = 0; //!count con ano la it pwede ma grade (partial)

                if (!empty($validated["answers"])) {
                    foreach ($validated["answers"] as $answer) {
                        $isFinalCorrect = 0;
                        $scoreValue = 0;
                        $optionId = $answer["assessment_option_id"] ?? null;

                        //! mag auto score pag mayda optionId
                        if ($optionId) {
                            $option = DB::table('assessment_options')
                                ->where('id', $optionId)
                                ->where('assessment_question_id', $answer["assessment_question_id"])
                                ->first();

                            if ($option) {
                                $isFinalCorrect = (bool)$option->is_correct ? 1 : 0;
                                $scoreValue = $isFinalCorrect;
                                $correctCount += $isFinalCorrect;
                                $autoGradableCount++;
                            }
                        }

                        $answers[] = AssessmentAnswer::updateOrCreate(
                            [
                                "assessment_attempt_id" => $attempt->id,
                                "assessment_question_id" => $answer["assessment_question_id"]
                            ],
                            [
                                "assessment_option_id" => $optionId,
                                "answer_text" => $answer["assessment_answer_text"] ?? null,
                                "is_correct" => $isFinalCorrect,
                                "score" => $scoreValue
                            ]
                        );
                    }

                    $score = $autoGradableCount > 0 ? ($correctCount / $autoGradableCount) * 100 : 0;

                    $frontendStatus = $request->input('status');
                    $status = ($frontendStatus === 'SUBMITTED') ? 'SUBMITTED' : 'IN_PROGRESS';
                } else {
                    $score = 0;
                    $status = 'IN_PROGRESS';
                }

                $attempt->update([
                    'score' => $score,
                    'status' => $status,
                    'graded_at' => now()
                ]);
                if ($request->proctoring_events) {
                    $eventCounts = collect($validated['proctoring_events'])
                        ->groupBy('type')
                        ->map(fn($group) => $group->count());

                    foreach ($eventCounts as $type => $count) {
                        $actionRecord = AssessmentAttemptAction::where([
                            'user_id' => auth()->id(),
                            'assessment_attempt_id' => $attempt->id,
                            'actions' => $type,
                        ])->first();

                        if ($actionRecord) {
                            $actionRecord->increment('action_count', $count);
                        } else {
                            AssessmentAttemptAction::create([
                                'user_id' => auth()->id(),
                                'assessment_attempt_id' => $attempt->id,
                                'actions' => $type,
                                'action_count' => $count,
                            ]);
                        }
                    }
                }
                DB::commit();

                return response()->json([
                    "message" => $status === 'SUBMITTED' ? "Submitted successfully." : "Progress saved.",
                    // !ayaw ig display it score
                    // "score" => round($score, 2),
                    "status" => $status,
                    // ! pati it answer
                    // "data" => $answers
                ], 201);
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } catch (\Exception $e) {
            return response()->json([
                "message" => "An error occurred.",
                "error" => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    private function detectAssessmentStatus($score, $status = null)
    {
        if ($status == 'SUBMITTED') {
            return 'SUBMITTED';
        }
        if ($score === 100) {
            return 'SUBMITTED';
        }

        return 'IN_PROGRESS';
    }

    //! Trainee details assessments /assessment_option and assessment_question details for trainer to view during assessment attempt monitoring

    public function TraineeAssessmentDetailsForTrainer(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            try {
                // Just fetch data - no submission logic
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

    //! Reusable function for logging user actions during assessment attempts
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
            Log::error('Failed to log action: ' . $e->getMessage());
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
