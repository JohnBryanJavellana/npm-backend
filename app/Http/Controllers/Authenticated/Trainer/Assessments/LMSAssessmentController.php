<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
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
use App\Models\CourseModule;
use App\Models\CourseModuleSection;
use App\Models\EnrolledCourse;
use App\Models\Training;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use DomainException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        } catch (Exception $e) {
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
        } catch (Exception $e) {
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function viewTopic(Request $request)
    {
        try {
            $record = Assessments::where('control_number', $request->control_number)
                ->with([
                    'sections.questions.options',
                    'submittedAttempts' => function($query) use ($request) {
                        $query->when($request->user_id, function($q) use ($request) {
                            $q->where('created_by', $request->user_id);
                        });
                    },
                    'attempts' => function($query) use ($request) {
                        $query->when($request->user_id, function($q) use ($request) {
                            $q->where('created_by', $request->user_id);
                        });

                        $query->when($request->assessment_attempt_id, function($q) use ($request) {
                            $q->whereKey($request->assessment_attempt_id);
                        });
                    },
                    'attempts.answers'
                ])
                ->firstOrFail();

            return new AssessmentResource($record);
        } catch (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function viewAssessmentContent(viewSpecificAssessmentRequest $request)
    {
        try {
            return new ViewAssessmentContentResource($this->lmsAssessmentService->getAssessmentContentById($request->validated()));
        } catch (Exception $e) {
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
        } catch (Exception $e) {
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    public function update(updateAssessmentRequest $request)
    {
        try {
            $this->lmsAssessmentService->updateAssessment($request->validated(), $request->user()->id);
            return response()->json(["message" => AssessmentMessageResponse::UPDATED->value], 200);
        } catch (Exception $e) {
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
        } catch (Exception $e) {
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    //! this is fix code
    // Create attempt and answers
    // score is fix to boolean
    public function assessment_answers(Request $request)
    {
        try {
            $validated = $request->validate([
                "control_number" => "required|string|exists:assessments,control_number",
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
                $this_assessment = Assessments::where('control_number', $validated["control_number"])->firstOrFail();
                $courseModule = CourseModule::whereKey($this_assessment->courseContent->courseModuleSection->courseModule->id)->get();

                // check if trainee is enrolled to this specific module
                // if yes, find training. otherwise show error response
                $training = null;
                foreach ($courseModule as $cm) {
                    $training = Training::where('course_module_id', $cm->id)->first();
                    $isCurrentEnrolled = EnrolledCourse::where([
                        'user_id' => auth()->id(),
                        'training_id' => $training->id,
                        'enrolled_course_status' => 'ENROLLED'
                    ])->first();

                    if($isCurrentEnrolled) {
                        $training = $isCurrentEnrolled;
                        return;
                    }
                }

                $enrolledCourse = EnrolledCourse::where([
                    'user_id' => auth()->id(),
                    'training_id' => $training?->id,
                    'enrolled_course_status' => 'ENROLLED'
                ])->first();

                if (!$enrolledCourse) {
                    return response()->json(["message" => "No enrolled course found."], 404);
                }

                $courseModuleTotalDayCount = $enrolledCourse->training->module->number_of_days;

                AssessmentAttempt::where([
                    "assessments_id" => $this_assessment->id,
                    "enrolled_course_id" => $enrolledCourse->id,
                    'status' => 'FOR_REMOVAL'
                ])->update([
                    'status' => 'FAILED'
                ]);

                $attempt = AssessmentAttempt::firstOrCreate([
                    "assessments_id"     => $this_assessment->id,
                    "enrolled_course_id" => $enrolledCourse->id,
                    "status"             => "IN_PROGRESS",
                    "created_by"         => $request->user()->id,
                ]);

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
                }

                $frontendStatus = $request->input('status');
                $status = ($frontendStatus === 'SUBMITTED') ? 'SUBMITTED' : 'IN_PROGRESS';

                $attempt->update([
                    'score' => $attempt->answers->sum('score'),
                    'status' => $status,
                    'submitted_at' => $status === "SUBMITTED" ? now() : null
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
                    "status" => $status,
                    'assessment_attempt_id' => $attempt->id
                ], 201);
            } catch (Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } catch (Exception $e) {
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
                $assessment = Assessments::whereKey($request->assessment_id)
                    ->with([
                        'sections.questions.options',
                        'attempts' => function($query) use ($request) {
                            $query->when($request->attempt_id, fn($q) => $q->whereKey($request->attempt_id));
                        },
                        'attempts.answers'
                    ])
                    ->firstOrFail();

                $attempt = $assessment->attempts->first();

                if ($attempt) {
                    $attempt->makeHidden('answers');
                    $userAnswers = $attempt->answers->keyBy('assessment_question_id');
                    $attempt->sections = $assessment->sections->map(function($section) use ($userAnswers) {
                        $sectionData = clone $section;

                        $sectionData->questions->each(function($question) use ($userAnswers) {
                            $userAnswer = $userAnswers->get($question->id);
                            $question->user_answer_text = $userAnswer?->answer_text;

                            $question->options->each(function($option) use ($userAnswer) {
                                $option->is_user_selected = $userAnswer && ($userAnswer->assessment_option_id == $option->id);
                            });
                        });

                        return $sectionData;
                    });
                }

                $result = $assessment->toArray();
                $result['attempt'] = $attempt;
                unset($result['sections']);
                unset($result['attempts']);

                return response()->json(["data" => $result], 200);
            } catch (Exception $e) {
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
        } catch (Exception $e) {
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
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error fetching actions',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
