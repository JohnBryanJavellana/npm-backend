<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\AttemptResult;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Models\AssessmentAttempt;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use App\Utils\TransactionUtil;

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
            return response()->json(["message" => AssessmentMessageResponse::SERVER_ERROR->value], 500);
        }
    }

    /**
     * Summary of view_attempt_result
     * @param AttemptResult $request
     */
    public function view_attempt_result(AttemptResult $request) {
        return TransactionUtil::transact($request, [], function() use($request) {
            $attemptId = $request->attemptId;

            $result = AssessmentAttempt::with([
                'assessment:title,id,control_number,description,type,passing_score,time_limit',
                'gradedBy:id,fname,mname,lname,suffix,email'
            ])->whereKey($attemptId)->firstOrFail();

            $result->score = $result->answers()->sum('score');
            return response()->json(['result' => $result], 201);
        });
    }
}
