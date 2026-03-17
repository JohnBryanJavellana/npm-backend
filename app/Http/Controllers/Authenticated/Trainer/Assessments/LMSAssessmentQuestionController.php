<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\Assessment\createAssQuestionRequest;
use App\Http\Requests\Trainer\LMS\Assessment\updateAssQuestionRequest;
use App\Services\Trainer\LMS\Assessments\LMSAssQuestionService;
use Illuminate\Http\Request;

class LMSAssessmentQuestionController extends Controller
{
    public function __construct(
        protected LMSAssQuestionService $lMSAssQuestionService
    ){}

    public function view(Request $request, $section)
    {
        return $this->lMSAssQuestionService->getQuestionsBySections($section);
    }

    public function create(createAssQuestionRequest $request)
    {
        // return "wow";
        return $this->lMSAssQuestionService->storeAssessmentQuestions($request->validated());
    }

    public function update(updateAssQuestionRequest $request)
    {
        return $this->lMSAssQuestionService->updateAssessmentQuestions($request->validated());
    }

    public function deleteNow(Request $request)
    {
        \Log::info("deletye");
        // return response()->json(["huwaws"], 200);
        $this->lMSAssQuestionService->deleteAssessmentQuestions($request->question);
        return response()->json(["message" => "Successfully Deleted"], 204);
    }
}
