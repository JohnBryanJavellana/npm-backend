<?php

namespace App\Http\Controllers\Authenticated\Trainer\Assessments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\createAssessmentRequest;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use Illuminate\Http\Request;

class LMSAssessmentController extends Controller
{
    public function __construct(
        protected LMSAssessmentService $lmsAsssessmentService
    ){}

    public function view(viewAssessmentRequest $request)
    {
        try
        {
            $validated = $request->validated();            
            return $this->lmsAsssessmentService->getAssessments($validated);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function create(createAssessmentRequest $request)
    {
        try
        {
            $validated = $request->validated();
            return $this->lmsAsssessmentService->storeAssessment($validated, $request->user()->id);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        try
        {
            
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e], 500);
        }
    }
}
