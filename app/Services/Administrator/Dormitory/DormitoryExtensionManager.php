<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\DormitoryExtensionRequest;
use App\Models\DormitoryTenant;
use App\Utils\DocumentExistenceChecker;
use Carbon\Carbon;

class DormitoryExtensionManager extends DocumentExistenceChecker
{
    public function __construct(
        public DormitoryRoomReservationManager $dormitoryRoomReservationManager
    ) {}

    /**
     * Summary of updateExtensionRequest
     * @param int $documentId
     * @param string $status
     * @return array{message: string, status: int}
     */
    public function updateExtensionRequest(int $documentId, string $status): array
    {
        $this_extension_request = DormitoryExtensionRequest::lockForUpdate()->whereKey($documentId)->latest()->first();
        $this_request = DormitoryTenant::lockForUpdate()->findOrFail($this_extension_request->dormitory_tenant_id);

        $preparedData = $this->finalPreparedData($status, $this_request->id, $this_request->user_id, $this_extension_request->new_end_date);
        $this_request->update($preparedData[0]);
        $this_extension_request->update($preparedData[1]);

        return ['message' => "Success. Extension request has been updated.", 'status' => 200];
    }

    /**
     * Summary of finalPreparedData
     * @param string $status
     * @param int $documentId
     * @param int $tenantUserId
     * @param string $newEndDate
     * @return array<array|array{check_out_datetime: Carbon, tenant_status: string|array{dormitory_invoice_id: int}|array{tenant_status: string}>}
     */
    private function finalPreparedData(string $status, int $documentId, int $tenantUserId, string $newEndDate): array
    {
        $preparedData = [['tenant_status' => DormitoryEnum::ACTIVE->value], []];

        switch($status) {
            case DormitoryEnum::FOR_PAYMENT->value:
                $invId = $this->dormitoryRoomReservationManager->createInvoice(DormitoryEnum::EXTENSION->value, $documentId, $tenantUserId, null, (object)['grandTotal' => 9999999]);
                $preparedData = [[], ['dormitory_invoice_id' => $invId, 'status' => $status]];
                break;
            case DormitoryEnum::DECLINED->value:
                $preparedData = [['tenant_status' => DormitoryEnum::ACTIVE->value], ['status' => $status]];
                break;
            case DormitoryEnum::APPROVED->value:
                $preparedData = [['tenant_status' => DormitoryEnum::ACTIVE->value, 'check_out_datetime' => Carbon::parse($newEndDate)], ['status' => $status]];
                break;
            default:
                $preparedData = [['tenant_status' => DormitoryEnum::ACTIVE->value], ['status' => $status]];
                break;
        }

        return $preparedData;
    }
}
