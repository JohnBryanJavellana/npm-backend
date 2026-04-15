<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\AttemptResult;
use App\Http\Requests\LMS\SubmitAssessmentFileUpload;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Models\AssessmentAttempt;
use App\Services\LMS\SubmitAssessmentFileUploadManager;
use App\Services\Trainer\LMS\Assessments\LMSAssessmentService;
use App\Utils\TransactionUtil;

class TraineeLMSController extends Controller
{
    public function __construct(
        protected LMSAssessmentService $lmsAssessmentService,
        public SubmitAssessmentFileUploadManager $submitAssessmentFileUploadManager
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

            $result->assessment->totalAssessmentScore = $result->assessment->sections->sum(fn($section) => $section->questions->sum('score'));
            $result->score = $result->answers()->sum('score');
            $result->assessment->makeHidden('sections');

            return response()->json(['result' => $result], 201);
        });
    }

    /**
     * Summary of submit_assesment_file_upload
     * @param SubmitAssessmentFileUpload $request
     */
    public function submit_assesment_file_upload(SubmitAssessmentFileUpload $request) {
        return TransactionUtil::transact($request, [], function() use($request) {
            $assessmentControlNumber = $request->assessmentControlNumber;
            $enrolledCourseId = $request->enrolledCourseId;

            $result = $this->submitAssessmentFileUploadManager->submitFileUpload($request, $assessmentControlNumber, $enrolledCourseId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }
}
