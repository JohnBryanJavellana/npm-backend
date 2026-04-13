<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\MainSchool;
use App\Utils\DocumentExistenceChecker;

class EnrollmentMainSchoolManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $schoolId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $schoolId) {
        $isSchoolExists = DocumentExistenceChecker::checkForExistence(MainSchool::class, [
            'school_name' => $payload->school_name,
            'school_address' => $payload->school_address
        ], $schoolId);

        if($isSchoolExists) {
            return ['message' => "School already exist.", 'status' => 409];
        }

        MainSchool::updateOrCreate(['id' => $schoolId], $payload->only([
            'school_name',
            'school_address',
            'school_status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTSCHL->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHL->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeSchool
     * @param int $schoolId
     * @return array{message: string, status: int}
     */
    public function removeSchool(int $schoolId) {
        MainSchool::whereKey($schoolId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHL->value,
            'status' => 200
        ];
    }
}
