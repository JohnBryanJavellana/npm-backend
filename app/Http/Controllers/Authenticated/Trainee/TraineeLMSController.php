<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use Illuminate\Http\Request;

class TraineeLMSController extends Controller
{
    public function __construct(
        protected LMSAssessmentService $lmsAssessmentService
    ){}

    public function view(viewAssessmentRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $userRole = $request->user()->role;
            return $this->lmsAssessmentService->getAssessments($validated, $userRole);
        }
        catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }
}
