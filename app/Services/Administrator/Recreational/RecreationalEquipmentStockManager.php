<?php

namespace App\Services\Administrator\Recreational;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAEquipmentStock;

class RecreationalEquipmentStockManager
{
    public function __construct(
        public RecreationalEquipmentManager $recreationalEquipmentManager
    ) {}

    /**
     * Summary of createEquipmentStock
     * @param int $equipmentId
     * @param int $stockCount
     * @return array{message: string, returnedData: string[]}
     */
    public function createEquipmentStock(int $equipmentId, int $stockCount) {
        $result = $this->recreationalEquipmentManager->createEquipmentCopies($equipmentId, $stockCount);
        return [
            'message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYEQUIPMENTSTCK->value,
            'returnedData' => $result,
            'status' => 200
        ];
    }

    /**
     * Summary of updateEquipmentStockInfo
     * @param object $payload
     * @param int $equipmentStockId
     * @return array{message: string, status: int}
     */
    public function updateEquipmentStockInfo(object $payload, int $equipmentStockId) {
        RAEquipmentStock::lockForUpdate()
            ->whereKey($equipmentStockId)
            ->update($payload->only([
                'condition_status',
                'availability_status'
            ]));

        return [
            'message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUIPSTCK->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeEquipmentStock
     * @param int $equipmentStockId
     * @return array{message: string, status: int}
     */
    public function removeEquipmentStock(int $equipmentStockId) {
        RAEquipmentStock::whereKey($equipmentStockId)->delete();
        return [
            'message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIPSTCK->value,
            'status' => 200
        ];
    }
}
