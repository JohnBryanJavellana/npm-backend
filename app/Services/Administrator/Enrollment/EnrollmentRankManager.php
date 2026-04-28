<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Rank;
use App\Utils\DocumentExistenceChecker;

class EnrollmentRankManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $rankId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $rankId) {
        $isRankExists = DocumentExistenceChecker::checkForExistence(Rank::class, $payload->only(['name', 'short_name', 'type']), $rankId);

        if($isRankExists) {
            return ['message' => "Rank already exist.", 'status' => 409];
        }

        Rank::updateOrCreate(['id' => $rankId], $payload->only(['name', 'short_name', 'type']));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTRANK->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTRANK->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeRank
     * @param int $rankId
     * @return array{message: string, status: int}
     */
    public function removeRank(int $rankId) {
        Rank::whereKey($rankId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTRANK->value,
            'status' => 200
        ];
    }
}
