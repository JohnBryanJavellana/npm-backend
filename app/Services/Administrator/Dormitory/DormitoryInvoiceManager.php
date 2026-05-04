<?php

namespace App\Services\Administrator\Dormitory;

use App\Models\DormitoryInvoice;
use App\Utils\DocumentExistenceChecker;
use App\Utils\GenerateTrace;
use Symfony\Component\HttpFoundation\Response;

class DormitoryInvoiceManager extends DocumentExistenceChecker
{
    /**
     * Summary of createOrUpdateSimpleInvoice
     * @param object $payload
     * @param mixed $dormitoryInvoiceId
     * @param bool $isPost
     * @return array{message: string, status: int}
     */
    public function createOrUpdateSimpleInvoice(object $payload, ?int $dormitoryInvoiceId, bool $isPost): array
    {
        $preparedData = $payload->only([ 'dormitory_tenant_id', 'invoice_amount', 'description', 'invoice_status', 'type' => 'OTHERS' ]);
        if($isPost) {
            $preparedData['trace_number'] = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-DINV-');
        }

        DormitoryInvoice::updateOrCreate(['id' => $dormitoryInvoiceId], $preparedData);
        return ['message' => 'Success!', 'status' => Response::HTTP_OK];
    }
}
