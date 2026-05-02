<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Models\DormitoryInclusionRequest;
use App\Models\DormitoryInventoryItem;
use App\Models\DormitoryItemBI;
use App\Models\DormitoryItemBorrowing;
use App\Utils\DocumentExistenceChecker;

class DormitoryInclusionManager extends DocumentExistenceChecker
{
    public function __construct(
        public DormitoryRoomReservationManager $dormitoryRoomReservationManager
    ) {}

    /**
     * Summary of updateInclusionRequest
     * @param int $documentId
     * @param string $status
     * @return array{message: string, status: int}
     */
    public function updateInclusionRequest(int $documentId, string $status): array
    {
        $this_request = DormitoryInclusionRequest::findOrFail($documentId);
        $this_invoice_id = $this_request->dormitory_invoice_id;

        if($status === DormitoryEnum::FOR_PAYMENT->value && $this_request->status === DormitoryEnum::PENDING->value) {
            $this_invoice_id = $this->dormitoryRoomReservationManager->createInvoice("INCLUSION", $this_request->dormitory_tenant_id, $this_request->tenant->user_id, null, (object)['grandTotal' => $this_request->itemInfo->charge]);
        }

        if($status === DormitoryEnum::APPROVED->value) {
            $this->addToBorrowings($this_request->dormitory_tenant_id, $this_request->dormitory_inventory_id, $this_request->quantity, "APPROVED");
        }

        $this_request->update([ 'status' => $status, 'dormitory_invoice_id' => $this_invoice_id ]);
        return ['message' => "Success. Inclusion request has been updated.", 'status' => 200];
    }

    /**
     * Summary of addToBorrowings
     * @param int $tenantId
     * @param int $inventoryId
     * @param int $count
     * @param string $status
     * @return void
     */
    public function addToBorrowings(int $tenantId, int $inventoryId, int $count, string $status) {
        $checkForExistence = DocumentExistenceChecker::checkForExistence(DormitoryItemBorrowing::class, ['dormitory_tenant_id' => $tenantId, 'dormitory_inventory_id' => $inventoryId], null);

        $borrowingInstance = $checkForExistence
            ? DormitoryItemBorrowing::where(['dormitory_tenant_id' => $tenantId, 'dormitory_inventory_id' => $inventoryId])->firstOrFail()
            : DormitoryItemBorrowing::create([
                'dormitory_tenant_id' => $tenantId,
                'dormitory_inventory_id' => $inventoryId,
                'count' => $count,
                'status' => 'ACTIVE'
            ]);

        $chosen = collect(DormitoryInventoryItem::where([
            'dormitory_inventory_id' => $inventoryId,
            'status' => 'AVAILABLE'
        ])->take($count)->get()->each(fn ($query) => $query->update([ 'status' => "UNAVAILABLE" ])))->map(fn($query) => [
            'dormitory_item_borrowing_id' => $borrowingInstance->id,
            'dormitory_inventory_item_id' => $query->id,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DormitoryItemBI::insert($chosen->toArray());
    }
}
