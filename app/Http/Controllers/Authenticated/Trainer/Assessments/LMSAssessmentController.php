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
                "answers.*.assessment_option_id" => "required|integer|exists:assessment_options,id",
                "answers.*.assessment_answer_text" => "nullable|string"
            ]);

            DB::beginTransaction();

            try {

                $enrolledCourse = DB::table('enrolled_courses')
                    ->where('user_id', auth()->id())
                    ->where('enrolled_course_status', 'ENROLLED')
                    ->first();

                if (!$enrolledCourse) {
                    return response()->json([
                        "message" => "No enrolled course found."
                    ], 404);
                }


                $existingAttempt = AssessmentAttempt::where([
                    "assessments_id" => $validated["assessment_id"],
                    "enrolled_course_id" => $enrolledCourse->id,
                    "status" => "SUBMITTED"
                ])->first();

                if ($existingAttempt) {
                    return response()->json([
                        "message" => "Assessment already submitted. No further submissions allowed.",
                        "assessment_attempt_id" => $existingAttempt->id
                    ], 403);
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
                $status = 'IN_PROGRESS';


                if (!empty($validated["answers"]) && is_array($validated["answers"])) {

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

                    $frontendStatus = $request->input('status');
                    $status = $this->detectAssessmentStatus($score, $attempt, $frontendStatus);
                } else {

                    $score = 0;
                    $total = 0;
                    $correctCount = 0;
                }


                $attempt->update([
                    'score' => $score,
                    'status' => $status,
                    'graded_at' => now()
                ]);

                // $this->logUserAction(new Request([
                //     'action' => 'assessment_submitted_successfully',
                //     'assessment_attempt_id' => $attempt->id
                // ]));

                DB::commit();

                return response()->json([
                    "message" => $status === 'SUBMITTED' ? "Assessment submitted successfully." : "Assessment attempt created. Waiting for answers...",
                    "assessment_attempt_id" => $attempt->id,
                    "score" => round($score ?? 0, 2),
                    "correct_answers" => $correctCount,
                    "total_answers" => $total ?? 0,
                    "status" => $status,
                    "data" => $answers
                ], 201);
            } catch (\Exception $e) {
                DB::rollBack();

                // $this->logUserAction(new Request([
                //     'action' => 'assessment_failed: ' . $e->getMessage(),
                //     'assessment_attempt_id' => $attempt->id ?? null
                // ]));

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
