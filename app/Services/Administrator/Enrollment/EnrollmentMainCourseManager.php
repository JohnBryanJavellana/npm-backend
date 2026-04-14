<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\MainCourse;
use App\Utils\DocumentExistenceChecker;

class EnrollmentMainCourseManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $courseId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $courseId) {
        $isSchoolExists = DocumentExistenceChecker::checkForExistence(MainCourse::class, ['course_name' => $payload->course_name], $courseId);

        if($isSchoolExists) {
            return ['message' => "Course already exist.", 'status' => 409];
        }

        MainCourse::updateOrCreate(['id' => $courseId], $payload->only([
            'course_name',
            'course_status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTCOURSE->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTCOURSE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeCourse
     * @param int $courseId
     * @return array{message: string, status: int}
     */
    public function removeCourse(int $courseId) {
        MainCourse::whereKey($courseId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTCOURSE->value,
            'status' => 200
        ];
    }
}
