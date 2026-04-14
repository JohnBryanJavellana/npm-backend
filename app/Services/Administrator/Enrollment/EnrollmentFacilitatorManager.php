<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\TrainingFacilitator;
use App\Utils\DocumentExistenceChecker;

class EnrollmentFacilitatorManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $facilitatorId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $facilitatorId) {
        $isFacilitatorExists = DocumentExistenceChecker::checkForExistence(TrainingFacilitator::class, $payload->only(['course_module_id', 'user_id']), $facilitatorId);

        if($isFacilitatorExists) {
            return ['message' => "Facilitator already exist.", 'status' => 409];
        }

        TrainingFacilitator::updateOrCreate(['id' => $facilitatorId], $payload->only(['course_module_id', 'user_id', 'role']));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTFACILITATOR->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTFACILITATOR->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeFacilitator
     * @param int $facilitatorId
     * @return array{message: string, status: int}
     */
    public function removeFacilitator(int $facilitatorId) {
        TrainingFacilitator::whereKey($facilitatorId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTFACILITATOR->value,
            'status' => 200
        ];
    }
}
