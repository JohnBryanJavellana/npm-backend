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
use App\Models\AssessmentAttemptAction;
use App\Models\Assessments;
use App\Models\CourseContent;
use App\Models\CourseModuleSection;
use App\Models\EnrolledCourse;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use DomainException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;
use function Laravel\Prompts\select;

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
                ->first(); ///! <<-- Error ini pakiayos 

            //         if (!$record) {
            //     return response()->json([
            //         "message" => "Assessment not found"
            //     ], 404);
            // }
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

    // public function pagpasaHinDetalye(Request $request)
    // {
    //     try {
    //         $Detalye = Assessments::whereKey($request->assessment_id)
    //             ->with([
    //                 'sections.questions.options'
    //             ])
    //             ->first();

    //         return new AssessmentResource($Detalye);
    //     } catch (\Exception $e) {
    //         return response()->json(["message" => $e->getMessage()], 500);
    //         return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
    //     }
    // }

    public function saveAnswersAssessment_attempts(Request $request)
    {
        try {
            if (!$request->user()) {
                return response()->json(["message" => "Unauthorized"], 401);
            }

            $validated = $request->validate([
                "assessment_attempt_id" => "required|integer|exists:assessment_attempts,id",
                "answers" => "required|array",
                "answers.*.question_id" => "required|integer|exists:assessment_questions,id",
                "answers.*.option_id" => "required|integer|exists:assessment_options,id"
            ]);

            DB::beginTransaction();

            try {
                $attempt = AssessmentAttemptAction::create([
                    "assessment_attempt_id" => $validated["assessment_attempt_id"],
                    "user_id" => $request->user()->id,
                    "action" => "SUBMITTED"
                ]);


                foreach ($validated["answers"] as $answer) {
                    AssessmentAnswer::create([
                        "assessment_attempt_id" => $attempt->id,
                        "assessment_question_id" => $answer["question_id"],
                        "assessment_option_id" => $answer["option_id"]
                    ]);
                }

                DB::commit();

                return response()->json([
                    "message" => "Answers submitted successfully",
                    "attempt_id" => $attempt->id,
                    "count" => count($validated["answers"])
                ], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } catch (\Exception $e) {
            \Log::error('Assessment Submission Error: ' . $e->getMessage(), [
                'assessment_id' => $request->assessment_id ?? null,
                'user_id' => $request->user()?->id ?? null,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                "message" => "An unexpected server error occurred",
                "error" => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }
}
