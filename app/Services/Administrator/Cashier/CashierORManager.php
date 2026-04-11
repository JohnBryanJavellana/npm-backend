<?php

namespace App\Services\Administrator\Cashier;

use App\Enums\Administrator\CashierEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\CashierOR;
use App\Utils\DocumentExistenceChecker;

class CashierORManager
{
    public function __construct(
        public DocumentExistenceChecker $documentExistenceChecker
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $documentId) {
        $isOrExists = $this->documentExistenceChecker->checkForExistence(
            CashierOR::class,
            ['name' => $payload->name, 'service_type' => $payload->service_type],
            $documentId
        );

        if($isOrExists) {
            return ['message' => "The OR Number '{$payload->name}' is already assigned to this service type.", 'status' => 409];
        }

        $this_or = CashierOR::updateOrCreate(['id' => $documentId], $payload->only([
            'name',
            'service_type'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::CASHIERCTRL_CREATED_ORNUMBER->value
                : AdministratorReturnResponse::CASHIERCTRL_UPDATED_ORNUMBER->value . "ID#$this_or->id",
            'status' => 200
        ];
    }

    /**
     * Summary of setUsedORAsStatus
     * @param int $orNumberId
     * @param string $status
     * @param bool $fromController
     * @return array{message: string, status: int}|bool
     */
    public function setUsedORAsStatus(int $orNumberId, string $status, bool $fromController) {
        CashierOR::lockForUpdate()->findOrFail($orNumberId)->update([ 'status' => $status ]);
        if($fromController) {
            return [
                'message' => "OR Number has been set to $status.",
                'status' => 200
            ];
        }

        return true;
    }

    /**
     * Summary of removeOR
     * @param int $orNumberId
     * @return array{message: string, status: int}
     */
    public function removeOR(int $orNumberId) {
        $this_or = CashierOR::withCount([
            'connectionInLibrary',
            'connectionInDormitory',
            'connectionInEnrollment'
        ])->lockForUpdate()->findOrFail($orNumberId);

        if($this_or->connection_in_library_count > 0 ||
           $this_or->connection_in_dormitory_count > 0 ||
           $this_or->connection_in_enrollment_count > 0 ||
           $this_or->status === CashierEnum::UNAVAILABLE->value
        ) {
            return [
                'message' => AdministratorReturnResponse::CASHIERCTRL_ERR_ORNUMBER->value,
                'status' => 409
            ];
        }

        $this_or->delete();
        return [
            'message' => AdministratorReturnResponse::CASHIERCTRL_REMOVED_ORNUMBER->value,
            'status' => 200
        ];
    }
}
