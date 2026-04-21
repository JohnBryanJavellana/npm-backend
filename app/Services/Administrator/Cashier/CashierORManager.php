<?php

namespace App\Services\Administrator\Cashier;

use App\Enums\Administrator\CashierEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\CashierOR;

class CashierORManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload)
    {
        $requestedRange = range($payload->starting_or_number, $payload->ending_or_number);
        $existingNumbers = CashierOR::whereIn('name', $requestedRange)->pluck('name')->toArray();
        $newNumbers = array_diff($requestedRange, $existingNumbers);

        if (empty($newNumbers)) {
            return [
                'message' => 'All numbers in this range already exist.',
                'status' => 409
            ];
        }

        $now = now();
        $preparedData = array_map(fn($number) => [
            'name' => $number,
            'office' => $payload->office,
            'charge_category_id' => $payload->charge_category_id,
            'created_at' => $now,
            'updated_at' => $now
        ], $newNumbers);

        CashierOR::insert($preparedData);
        return [
            'message' => AdministratorReturnResponse::CASHIERCTRL_CREATED_ORNUMBER->value,
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
