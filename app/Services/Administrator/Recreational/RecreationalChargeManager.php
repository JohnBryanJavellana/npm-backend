<?php

namespace App\Services\Administrator\Recreational;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAInvoices;
use App\Utils\GenerateTrace;

class RecreationalChargeManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $recreationalInvoiceId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $recreationalInvoiceId)
    {
        $preparedData = $payload->only(['user_id', 'r_a_request_info_id', 'invoice_status', 'description', 'invoice_amount']);

        if ($isPost) {
            $preparedData['trace_number'] = GenerateTrace::createTraceNumber(RAInvoices::class, '-RAINV-');
        }

        RAInvoices::updateOrCreate(['id' => $recreationalInvoiceId], $preparedData);
        return [
            'message' => "Success. Charge has been saved.",
            'status' => 200
        ];
    }

    /**
     * Summary of removeCharge
     * @param int $recreationalInvoiceId
     * @return array{message: string, status: int}
     */
    public function removeCharge(int $recreationalInvoiceId)
    {
        RAInvoices::findOrFail($recreationalInvoiceId)->delete();
        return [
            'message' => "RA Invoice ID#$recreationalInvoiceId has been deleted successfully.",
            'status' => 200
        ];
    }
}
