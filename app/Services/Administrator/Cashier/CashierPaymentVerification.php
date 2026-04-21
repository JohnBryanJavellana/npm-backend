<?php

namespace App\Services\Administrator\Cashier;

use App\Enums\Administrator\CashierEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\CashierOR;
use App\Utils\CashierGetTableRef;

class CashierPaymentVerification
{
    public function __construct(
        public CashierGetTableRef $cashierGetTableRef,
        public CashierORManager $cashierORManager
    ) {}

    /**
     * Summary of verifyPayment
     * @param object $payload
     * @param mixed $invoiceId
     * @param mixed $parentTableId
     * @return array{message: string, status: int}
     */
    public function verifyPayment(object $payload, int $invoiceId, int $parentTableId, bool $invoiceTableAlreadyUpdated = false) {
        if(!$invoiceTableAlreadyUpdated) {
            $this->cashierGetTableRef->getTable($payload->invoiceTableServiceName, $invoiceId, null)->update([
                'invoice_status' => $payload->invoiceStatus
            ]);
        }

        $thisParentTable = $this->cashierGetTableRef->getTable($payload->parentTableServiceName, $parentTableId, null)
            ->lockForUpdate()
            ->firstOrFail();

        if($payload->invoiceStatus === CashierEnum::PAID->value &&
           \in_array($thisParentTable->{$payload->parentTableStatusColumn}, [CashierEnum::PROCESSING_PAYMENT->value, CashierEnum::FOR_PAYMENT->value]) &&
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

    /**
     * Summary of payWalkIn
     * @param object $payload
     * @param int $invoiceId
     * @param string $invoiceTableServiceName
     * @return array{message: string, status: int}
     */
    public function payWalkIn(object $payload, int $invoiceId, string $invoiceTableServiceName) {
        $availableOR = CashierOR::lockForUpdate()->where('status', CashierEnum::AVAILABLE)->first();

        $this->cashierGetTableRef->getTable($invoiceTableServiceName, $invoiceId, null)->update([
            'invoice_status' => $payload->invoiceStatus,
            'datePaid' => now(),
            'payment_type' => CashierEnum::WALK_IN,
            'received_amount' => $payload->received_amount,
            'cashier_o_r_id' => $availableOR->id
        ]);

        $availableOR->update(['status' => CashierEnum::UNAVAILABLE]);
        $this->cashierORManager->setUsedORAsStatus($availableOR->id, CashierEnum::UNAVAILABLE->value, false);

        return $this->verifyPayment($payload, $invoiceId, $payload->parentTableId, true);
    }
}
