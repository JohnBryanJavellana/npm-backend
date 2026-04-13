<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\CourseModule;
use App\Models\MainCertificate;

class EnrollmentMainCertificateManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $certificateId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $certificateId) {
        MainCertificate::updateOrCreate(['id' => $certificateId], $payload->only([
            'course_module_id',
            'name',
            'header',
            'header_1',
            'header_2',
            'body'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTCERT->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTCERT->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeCertificate
     * @param int $certificateId
     * @return array{message: string, status: int}
     */
    public function removeCertificate(int $certificateId) {
        MainCertificate::whereKey($certificateId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTCERT->value,
            'status' => 200
        ];
    }
}
