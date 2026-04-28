<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\DormitoryTenant;
use App\Models\DormitoryTransfer;
use App\Utils\DocumentExistenceChecker;

class DormitoryTransferManager extends DocumentExistenceChecker
{
    public function __construct(
        public DormitoryRoomReservationManager $dormitoryRoomReservationManager
    ) {}

    /**
     * Summary of updateTransferRequest
     * @param int $documentId
     * @param string $status
     * @param mixed $roomId
     * @return array{message: string, status: int}
     */
    public function updateTransferRequest(int $documentId, string $status, ?int $roomId): array
    {
        $this_extension_request = DormitoryTransfer::lockForUpdate()->whereKey($documentId)->latest()->first();
        $this_request = DormitoryTenant::lockForUpdate()->findOrFail($this_extension_request->dormitory_tenant_id);

        $preparedData = $this->finalPreparedData($status, $this_request->id, $this_request->user_id, $roomId);
        $this_request->update($preparedData[0]);
        $this_extension_request->update($preparedData[1]);

        return ['message' => "Success. Extension request has been updated.", 'status' => 200];
    }

    /**
     * Summary of finalPreparedData
     * @param string $status
     * @param int $documentId
     * @param int $tenantUserId
     * @param mixed $roomId
     * @return array<array{dormitory_invoice_id: int, dormitory_room_id: int|null, status: string|array{dormitory_room_id: int|null}|array{status: string}|string[]>}
     */
    private function finalPreparedData(string $status, int $documentId, int $tenantUserId, ?int $roomId): array
    {
        $preparedData = [['tenant_status' => DormitoryEnum::ACTIVE->value], []];

        switch($status) {
            case DormitoryEnum::FOR_PAYMENT->value:
                $invId = $this->dormitoryRoomReservationManager->createInvoice(DormitoryEnum::TRANSFER->value, $documentId, $tenantUserId, null, (object)['grandTotal' => 9999999]);
                $preparedData= [[...$preparedData[0]], [
                    'dormitory_invoice_id' => $invId,
                    'status' => $status,
                    'dormitory_room_id' => $roomId
                ]];
                break;
            case DormitoryEnum::DECLINED->value:
                $preparedData = [[...$preparedData[0]], ['status' => $status]];
                break;
            case DormitoryEnum::APPROVED->value:
                $preparedData = [[...$preparedData[0], 'dormitory_room_id' => $roomId], ['status' => $status]];
                break;
            default:
                $preparedData = [[...$preparedData[0]], ['status' => $status]];
                break;
        }

        return $preparedData;
    }
}
