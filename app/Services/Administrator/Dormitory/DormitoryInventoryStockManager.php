<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\AdministratorReturnResponse;
use App\Models\DormitoryInventory;
use App\Models\DormitoryInventoryItem;
use App\Utils\GenerateTrace;
use App\Utils\RemoveFile;
use App\Utils\SaveFile;

class DormitoryInventoryStockManager
{
    public function __construct(
        public DormitoryInventoryManager $dormitoryInventoryManager
    ) {}

    /**
     * Summary of createStock
     * @param int $stockCount
     * @param string $dormInventoryControlNumber
     * @return array{message: string, status: int}
     */
    public function createStock(int $stockCount, string $dormInventoryControlNumber): array
    {
        $this_inv = DormitoryInventory::where('control_number', $dormInventoryControlNumber)->firstOrFail();
        $this->dormitoryInventoryManager->createStock($stockCount, $this_inv->id);

        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK->value,
            'status' => 200
        ];
    }

    /**
     * Summary of updateStock
     * @param string $status
     * @param string $uniqueIdentifier
     * @return array{message: string, status: int}
     */
    public function updateStock(string $status, string $uniqueIdentifier): array
    {
        DormitoryInventoryItem::where('unique_identifier', $uniqueIdentifier)->update([ 'status' => $status ]);

        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeStock
     * @param int $dormitoryStockId
     * @return array{message: string, status: int}
     */
    public function removeStock(int $dormitoryStockId): array
    {
        DormitoryInventoryItem::findOrFail($dormitoryStockId)->delete();
        return ['message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYINVSTOCK->value, 'status' => 200];
    }
}
