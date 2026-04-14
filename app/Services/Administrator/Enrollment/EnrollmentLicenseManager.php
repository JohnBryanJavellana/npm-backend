<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\License;
use App\Utils\DocumentExistenceChecker;

class EnrollmentLicenseManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $licenseId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $licenseId) {
        $isLicenseExists = DocumentExistenceChecker::checkForExistence(License::class, $payload->only(['license', 'short_name']), $licenseId);

        if($isLicenseExists) {
            return ['message' => "License already exist.", 'status' => 409];
        }

        License::updateOrCreate(['id' => $licenseId], $payload->only(['short_name', 'license']));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTLICENSE->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTLICENSE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeLicense
     * @param int $licenseId
     * @return array{message: string, status: int}
     */
    public function removeLicense(int $licenseId) {
        License::whereKey($licenseId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTLICENSE->value,
            'status' => 200
        ];
    }
}
