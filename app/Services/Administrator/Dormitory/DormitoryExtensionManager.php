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
        $this_request = DormitoryTenant::lockForUpdate()->findOrFail($documentId);
        $this_extension_request = DormitoryExtensionRequest::lockForUpdate()->where('dormitory_tenant_id', $documentId)->latest()->first();

        $preparedData = $this->finalPreparedData($status, $documentId, $this_request->user_id, $this_extension_request->new_end_date);
        $this_request->update($preparedData);
        $this_extension_request->update(['status' => $status]);

        return ['message' => "Success. Extension request has been updated.", 'status' => 200];
    }

    /**
     * Summary of finalPreparedData
     * @param string $status
     * @param int $documentId
     * @param int $tenantUserId
     * @param string $newEndDate
     * @return array{check_out_datetime: string|array{tenant_status: string}}
     */
    private function finalPreparedData(string $status, int $documentId, int $tenantUserId, string $newEndDate): array
    {
        $preparedData = ['tenant_status' => DormitoryEnum::RESERVED->value];

        switch($status) {
            case DormitoryEnum::FOR_PAYMENT->value:
                $this->dormitoryRoomReservationManager->createInvoice(DormitoryEnum::DORMITORY->value, $documentId, $tenantUserId, null, (object)['grandTotal' => 9999999]);
                $preparedData['tenant_status'] = DormitoryEnum::FOR_PAYMENT->value;
                break;
            case DormitoryEnum::DECLINED->value:
                $preparedData['tenant_status'] = DormitoryEnum::RESERVED->value;
                break;
            case DormitoryEnum::APPROVED->value:
                $preparedData = [
                    ...$preparedData,
                    'check_out_datetime' => Carbon::parse($newEndDate)
                ];
                break;
            default:
                $preparedData['tenant_status'] = DormitoryEnum::RESERVED->value;
                break;
        }

        return $preparedData;
    }
}
