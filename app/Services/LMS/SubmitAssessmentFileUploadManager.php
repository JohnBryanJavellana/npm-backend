<?php

namespace App\Services\LMS;

use App\Models\AssessmentAttempt;
use App\Models\Assessments;
use App\Models\AssessmentSubmission;
use App\Models\CourseModule;
use App\Models\EnrolledCourse;
use App\Models\Training;
use App\Utils\SaveFile;
use Carbon\Carbon;

class SubmitAssessmentFileUploadManager
{
    /**
     * Summary of submitFileUpload
     * @param object $payload
     * @param string $assessmentControlNumber
     * @return array{message: string, status: int}
     */
    public function submitFileUpload(object $payload, string $assessmentControlNumber, int $enrolledCourseId) {
        $thisAssessment = Assessments::where('control_number', $assessmentControlNumber)->firstOrFail();

        $isAccessible = $this->checkIfAccessible($thisAssessment);
        if(!$isAccessible['isAccessible']) {
            return ['message' => 'Attempt on this assessment has already been submitted or is inaccessible.', 'status' => 409];
        }

        $newAttempt = AssessmentAttempt::create([
            'assessments_id' => $thisAssessment->id,
            'enrolled_course_id' => $enrolledCourseId,
            'created_by' => $payload->user()->id,
            'submitted_at' => now(),
            'status' => "IN_PROGRESS"
        ]);

        $dataToInsert = [];
        foreach ($payload->fileUpload as $fileUpload) {
            $dataToInsert[] = [
                'assessment_attempt_id' => $newAttempt->id,
                'file_path' => SaveFile::save($fileUpload, "upload-reference"),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        AssessmentSubmission::insert($dataToInsert);

        return [
            'message' => 'Success!',
            'asessmentAttemptId' => $newAttempt->id,
            'status' => 200
        ];
    }

    /**
     * Summary of checkIfAccessible
     * @param object $thisAssessment
     * @return array{enrolledCourse: EnrolledCourse|object|\Illuminate\Database\Eloquent\Model|null, isAccessible: bool|array{enrolledCourse: null, isAccessible: bool}}
     */
    public function checkIfAccessible(object $thisAssessment) {
        $courseModule = CourseModule::whereKey($thisAssessment->courseContent->courseModuleSection->courseModule->id)->get();

        $training = null;
        $enrolledCourse = null;

        foreach ($courseModule as $cm) {
            $training = Training::where('course_module_id', $cm->id)->first();
            $isCurrentEnrolled = EnrolledCourse::where([
                'user_id' => auth()->id(),
                'training_id' => $training->id,
                'enrolled_course_status' => 'ENROLLED'
            ])->first();

            if($isCurrentEnrolled) {
                $enrolledCourse = $isCurrentEnrolled;
                break;
            }
        }

        $accessible = false;
        if ($training) {
            $start = Carbon::parse($training->schedule_from)->startOfDay();
            $end = Carbon::parse($training->schedule_to)->startOfDay();
            $today = Carbon::today();

            if ($today->lt($start) || $today->gt($end)) {
                $accessible = false;
            } else {
                $dayCount = $today->diffInDays($start) + 1;
                $accessible = $thisAssessment->courseContent->courseModuleSection->day_number === $dayCount;
            }
        }

        $isAccessible = $thisAssessment->attempts->where('created_by', auth()->user()->id)->whereIn('status', ['IN_PROGRESS', 'FOR_REMOVAL'])->isNotEmpty() || $accessible;

        return [
            'isAccessible' => $isAccessible,
            'enrolledCourse' => $enrolledCourse
        ];
    }
}
