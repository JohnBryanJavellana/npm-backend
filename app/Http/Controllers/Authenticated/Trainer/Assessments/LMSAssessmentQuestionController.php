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
        try
        {
        $this->lMSAssQuestionService->storeAssessmentQuestions($request->validated());
            
        return response()->json(["Assessment question created successfully."], 200);    
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => 'Something went wrong. Please try again later.'], 500);
        }
    }

    public function update(updateAssQuestionRequest $request)
    {
        try
        {
        $this->lMSAssQuestionService->updateAssessmentQuestions($request->validated());
            
        return response()->json(["message" => "Assessment question updated successfully."], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
            return response()->json(["message" => 'Something went wrong. Please try again later.'], 500);
        }
    }

    public function delete(Request $request)
    {
        try
        {            
            $this->lMSAssQuestionService->deleteAssessmentQuestions($request->id);
            return response()->json(["message" => "Successfully Deleted"], 204);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }
}
