<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\{DormitoryReqService, DormitoryInvoice};
use App\Utils\{GenerateTrace};

class DormitoryServiceRequestManager
{
    /**
     * Summary of createOrUpdate
     * @param mixed $payload
     * @param bool $isPost
     * @return DormitoryReqService|DormitoryReqService[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function createOrUpdate(object $payload, bool $isPost) {
        $service = $isPost
            ? new DormitoryReqService()
            : DormitoryReqService::lockForUpdate()->findOrFail($payload->documentId);

        $service->fill([
            'dormitory_tenant_id'  => $payload->tenantId,
            'dormitory_service_id' => $payload->serviceId,
            'status' => $payload->status,
            'fee_type' => $payload->feeType,
            'remarks' => $payload->remarks,
        ]);

        if ($payload->status === DormitoryEnum::FOR_PAYMENT->value &&
            $payload->feeType === DormitoryEnum::APPROVED_WITH_FEE->value &&
            ($service->services->charge ?? 0) > 0
        ) {
            $invoice = DormitoryInvoice::create([
                'dormitory_tenant_id' => $payload->tenantId,
                'user_id' => $payload->userId,
                'trace_number' => GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-INV-'),
                'invoice_amount' => $service->services->charge,
                'description' => "Room Service Request: " . $service->services->name,
                'type' => DormitoryEnum::SERVICE,
                'remarks' => $payload->paymentRemarks
            ]);

            $service->dormitory_invoice_id = $invoice->id;
        }

        if (\in_array($payload->status, [DormitoryEnum::CANCELLED->value, DormitoryEnum::DECLINED->value]) && $service->dormitory_invoice_id) {
            DormitoryInvoice::where('id', $service->dormitory_invoice_id)->update([
                'invoice_status' => DormitoryEnum::CANCELLED->value,
                'remarks' => $payload->paymentRemarks
            ]);
        }

        $service->save();
        return $service;
    }

    /**
     * Summary of setAsGivenAction
     * @param string $action
     * @param int $id
     * @return array{message: string, status: int}
     */
    public function setAsGivenAction(string $action, int $id) {
        $req = DormitoryReqService::lockForUpdate()->findOrFail($id);

        if ($action === DormitoryEnum::DONE->value &&
           !\in_array($req->status, [DormitoryEnum::APPROVED->value, DormitoryEnum::FOR_PAYMENT->value])) {
            return ['message' => "Only Approved or For Payment requests can be set to DONE.", 'status' => 409];
        }

        if ($action === DormitoryEnum::CANCELLED->value && $req->status === DormitoryEnum::DONE->value) {
            return ['message' => "Completed services cannot be cancelled.", 'status' => 409];
        }

        if ($action === DormitoryEnum::CANCELLED->value && $req->dormitory_invoice_id) {
            DormitoryInvoice::lockForUpdate()
                ->where('id', $req->dormitory_invoice_id)
                ->whereNot('invoice_status', DormitoryEnum::PAID->value)
                ->update(['invoice_status' => DormitoryEnum::CANCELLED->value]);
        }

        $req->update(['status' => $action]);
        return ['message' => "Service request marked as $action.", 'status' => 200];
    }
}
