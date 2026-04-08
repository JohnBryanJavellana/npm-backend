<?php

namespace App\Services\Administrator\Cashier;

use App\Enums\Administrator\CashierEnum;
use App\Enums\AdministratorReturnResponse;
use App\Utils\CashierGetTableRef;

class CashierPaymentVerification
{
    public function __construct(
        public CashierGetTableRef $cashierGetTableRef
    ) {}

    /**
     * Summary of verifyPayment
     * @param object $payload
     * @param mixed $invoiceId
     * @param mixed $parentTableId
     * @return array{message: string, status: int}
     */
    public function verifyPayment(object $payload, int $invoiceId, int $parentTableId) {
        $this->cashierGetTableRef->getTable($payload->invoiceTableServiceName, $invoiceId, null)->update([
            'invoice_status' => $payload->invoiceStatus
        ]);

        $thisParentTable = $this->cashierGetTableRef->getTable($payload->parentTableServiceName, $parentTableId, null)->firstOrFail();
        if($payload->invoiceStatus === CashierEnum::PAID->value &&
           $thisParentTable->{$payload->parentTableStatusColumn} === CashierEnum::PROCESSING_PAYMENT->value &&
           !empty($payload->parentTableStatusColumn) &&
           !empty($parentTableId)
        ) {
            $thisParentTable->update([ $payload->parentTableStatusColumn => CashierEnum::PAID ]);
        }

        return [
            'message' => AdministratorReturnResponse::CASHIERCTRL_UPDATED_PAYMENT->value,
            'status' => 200
        ];
    }
}
