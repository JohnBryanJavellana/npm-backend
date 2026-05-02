<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\AdministratorReturnResponse;
use App\Models\DormitoryInventory;
use App\Models\DormitoryInventoryItem;
use App\Utils\GenerateTrace;
use App\Utils\RemoveFile;
use App\Utils\SaveFile;

class DormitoryInventoryManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $documentId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $documentId): array
    {
        $preparedData = $payload->only(['name', 'is_consumable', 'description', 'charge']);

        if($isPost) {
            $preparedData['control_number'] = GenerateTrace::createTraceNumber(DormitoryInventory::class, '-DORMINV-', 'control_number');
        }

        if($payload->hasFile('photo')) {
            $preparedData['filename'] = SaveFile::save($payload->file('photo'), 'dormitory/inventory');
        }

        $this_dormitory_inv = DormitoryInventory::updateOrCreate(['id' => $documentId], $preparedData);

        if($isPost) {
            $this->createStock($payload->stock_count, $this_dormitory_inv->id);
        }

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYINV->value
                : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYINV->value . " ID#$this_dormitory_inv->id",
            'status' => 200
        ];
    }

    /**
     * Summary of removeInventory
     * @param int $dormitoryInventoryId
     * @return array{message: string, status: int}
     */
    public function removeInventory(int $dormitoryInventoryId): array
    {
        $this_inventory = DormitoryInventory::findOrFail($dormitoryInventoryId);
        RemoveFile::removeFile("dormitory/inventory/$this_inventory->filename");

        $this_inventory->delete();
        return ['message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYINV->value, 'status' => 200];
    }

    /**
     * Summary of createStock
     * @param int $stockCount
     * @param int $dormitoryInventoryId
     * @return void
     */
    public function createStock(int $stockCount, int $dormitoryInventoryId) {
        $dataToInsert = [];

        for($i = 0; $i < $stockCount; $i++) {
            $dataToInsert[] = [
                'dormitory_inventory_id' => $dormitoryInventoryId,
                'unique_identifier' => GenerateTrace::createTraceNumber(DormitoryInventoryItem::class, '-DORMINV-S-', 'unique_identifier'),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DormitoryInventoryItem::insert($dataToInsert);
    }
}
