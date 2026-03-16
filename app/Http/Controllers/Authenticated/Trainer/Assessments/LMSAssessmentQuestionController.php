<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\Assessment\createAssQuestionRequest;
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

    public function update(Request $request)
    {
        return;
    }

    public function delete(Request $request, $question)
    {
        return $this->lMSAssQuestionService->deleteAssessmentQuestions($question);
    }
}
