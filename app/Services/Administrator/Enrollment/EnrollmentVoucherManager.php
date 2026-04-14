<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Voucher;
use App\Utils\DocumentExistenceChecker;

class EnrollmentVoucherManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $voucherId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $voucherId) {
        $isVoucherExists = DocumentExistenceChecker::checkForExistence(Voucher::class, $payload->only(['name', 'code']), $voucherId);

        if($isVoucherExists) {
            return ['message' => "Voucher already exist.", 'status' => 409];
        }

        Voucher::updateOrCreate(['id' => $voucherId], $payload->only(['name', 'code', 'status']));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTVOUCHER->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTVOUCHER->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeVoucher
     * @param int $voucherId
     * @return array{message: string, status: int}
     */
    public function removeVoucher(int $voucherId) {
        Voucher::whereKey($voucherId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTVOUCHER->value,
            'status' => 200
        ];
    }
}
