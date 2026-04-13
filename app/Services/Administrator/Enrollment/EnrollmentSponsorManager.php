<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Sponsor;
use App\Utils\DocumentExistenceChecker;

class EnrollmentSponsorManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $sponsorId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $sponsorId) {
        $isSponsorExists = DocumentExistenceChecker::checkForExistence(Sponsor::class, $payload->only(['name', 'short_name']), $sponsorId);

        if($isSponsorExists) {
            return ['message' => "Sponsor already exist.", 'status' => 409];
        }

        Sponsor::updateOrCreate(['id' => $sponsorId], $payload->only(['name', 'short_name', 'status']));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTSPONSOR->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTSPONSOR->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeSponsor
     * @param int $sponsorID
     * @return array{message: string, status: int}
     */
    public function removeSponsor(int $sponsorID) {
        Sponsor::whereKey($sponsorID)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTSPONSOR->value,
            'status' => 200
        ];
    }
}
