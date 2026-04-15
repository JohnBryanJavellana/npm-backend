<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\LMS\AssessmentMessageResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LMS\AttemptResult;
use App\Http\Requests\LMS\DeleteAssessmentFileUpload;
use App\Http\Requests\LMS\SubmitAssessmentFileUpload;
use App\Http\Requests\LMS\ViewAssessmentFileUpload;
use App\Http\Requests\LMS\ViewSpecificGradeDetails;
use App\Http\Requests\Trainer\LMS\viewAssessmentRequest;
use App\Models\AssessmentAttempt;
use App\Models\Assessments;
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
            return response()->json([
                'message' => $result['message'],
                'asessmentAttemptId' => $result['asessmentAttemptId']
            ], $result['status']);
        });
    }

    /**
     * Summary of delete_submission_file_upload
     * @param DeleteAssessmentFileUpload $request
     */
    public function delete_submission_file_upload(DeleteAssessmentFileUpload $request) {
        return TransactionUtil::transact($request, [], function() use($request) {
            $assessmentSubmmissionId = $request->assessmentSubmmissionId;

            $result = $this->submitAssessmentFileUploadManager->deleteFileUpload($assessmentSubmmissionId);
            return response()->json(['message' => $result['message'],], $result['status']);
        });
    }

    /**
     * Summary of view_submitted_file_upload
     * @param ViewAssessmentFileUpload $request
     */
    public function view_submitted_file_upload(ViewAssessmentFileUpload $request) {
        return TransactionUtil::transact($request, [], function() use($request) {
            $asessmentAttemptId = $request->asessmentAttemptId;

            $result = AssessmentAttempt::with([
                'assessment',
                'uploadedFile' => function($query) {
                    $query->select('id', 'assessment_attempt_id', 'original_filename', 'file_path');
                }
            ])->whereKey($asessmentAttemptId)->firstOrFail();

            return response()->json(['result' => $result], 201);
        });
    }

    /**
     * Summary of view_specific_grade_details
     * @param ViewSpecificGradeDetails $request
     */
    public function view_specific_grade_details(ViewSpecificGradeDetails $request) {
        return TransactionUtil::transact($request, [], function() use($request) {
            $enrolledCourseId = $request->enrolledCourseId;

            $result = AssessmentAttempt::with([
                'assessment:id,title,type,passing_score,passed_type',
                'gradedBy:id,fname,mname,lname,suffix,email'
            ])
            ->where('enrolled_course_id', $enrolledCourseId)
            ->latest()
            ->get()
            ->unique('assessments_id')
            ->values();

            $result->transform(function($attempt) {
                $attempt->score = ($attempt->assessment->passed_type === "file_upload")
                    ? $attempt->score
                    : $attempt->answers()->sum('score');

                $attempt->assessment->totalScore = ($attempt->assessment->passed_type === "file_upload")
                    ? 100
                    : $attempt->assessment->sections->sum(fn($query) => $query->questions()->sum('score'));

                $attempt->percentageScore = ($attempt->assessment->passed_type === "file_upload")
                    ? $attempt->score
                    : number_format(($attempt->score / $attempt->assessment->totalScore) * 100, 2, '.', ',');

                unset($attempt->assessment->sections);
                return $attempt;
            });

            return response()->json(['result' => $result], 200);
        });
    }
}
