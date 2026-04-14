<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\CourseModuleFee;
use App\Utils\DocumentExistenceChecker;

class EnrollmentTrainingFeeManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $trainingFeeId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $trainingFeeId) {
        $isTrainingFeeExists = DocumentExistenceChecker::checkForExistence(CourseModuleFee::class, $payload->only(['course_module_id']), $trainingFeeId);

        if($isTrainingFeeExists) {
            return ['message' => "Training Fee already exist.", 'status' => 409];
        }

        CourseModuleFee::updateOrCreate(['id' => $trainingFeeId], $payload->only([
            'course_module_id',
            'charge_category_id',
            'name',
            'amount',
            'status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTTRAININGFEE->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTTRAININGFEE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeTrainingFee
     * @param int $trainingFeeId
     * @return array{message: string, status: int}
     */
    public function removeTrainingFee(int $trainingFeeId) {
        CourseModuleFee::whereKey($trainingFeeId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTTRAININGFEE->value,
            'status' => 200
        ];
    }
}
