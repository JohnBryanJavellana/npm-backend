<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\Administrator\DormitoryEnum;
use App\Enums\RequestStatus;
use App\Models\ {
    DormitoryInclusionRequest,
    DormitoryInventory,
    DormitoryInvoice,
    DormitoryItemBorrowing
};
use App\Services\Administrator\Dormitory\DormitoryRoomReservationManager;
use App\Utils\GenerateTrace;
use DomainException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class DormitoryInclusionService {

    protected const SHORT_TTL = 300;
    protected const LONG_TTL = 600;

    public function __construct(
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryItemBorrowing $dormitoryItemBorrowing,
        protected DormitoryInclusionRequest $dormitoryInclusionRequest,
        protected DormitoryInvoice $dormitoryInvoiceModel,
        protected DormitoryRoomReservationManager $dormitoryRoomReservationManager
    )
    {}

    public function getAllItems()
    {
        $cacheKey = "dormitory:inclusions:all";
        return  Cache::remember($cacheKey, self::LONG_TTL, function () {
            return $this->dormitoryInventory
            ->whereHas("stock", fn($q) => $q->available())
            ->get();
        });
    }

    public function getUserInclusionRequest($documentId)
    {
        return $this->dormitoryInclusionRequest->query()
        ->with([
            "itemInfo"
        ])
        ->where("dormitory_tenant_id", $documentId)
        ->latest("created_at")
        ->get();
    }

    public function getUserInclusions(string $documentId)
    {
        //VALIDATE & ADD CACHE
        return $this->dormitoryItemBorrowing->query()
        ->with([
            "items.item.itemInfo"
        ])
        ->whereRelation("tenant", "trace_number", "=", $documentId)
        ->latest("created_at")
        ->get();
    }

    public function createInclusionRequest($validated, $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            $dataToInsert = collect($validated["data"])->map(function($query) use ($userId, $validated) {
                $thisInventory = DormitoryInventory::findOrFail($query["inclusion_id"]);

                return [
                    "control_number" => GenerateTrace::createTraceNumber($this->dormitoryInclusionRequest, '-INCR-', 'control_number'),
                    "dormitory_invoice_id" => $validated["isWalkIn"]
                        ? $this->dormitoryRoomReservationManager->createInvoice(DormitoryEnum::INCLUSION->value, $validated["request_id"], $userId, null, (object)['grandTotal' => $thisInventory->charge *  $query["quantity"]])
                        : null,
                    "dormitory_inventory_id" => $query["inclusion_id"],
                    "dormitory_tenant_id" => $validated["request_id"],
                    "quantity" => $query["quantity"],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            })->toArray();

            $this->dormitoryInclusionRequest->insert($dataToInsert);
        });
    }

    public function cancelInclusionRequest($validated, $userId)
    {
        // validate the owner
        DB::transaction(function () use ($validated, $userId) {
            $record = $this->dormitoryInclusionRequest->query()
            ->status([RequestStatus::APPROVED, RequestStatus::PENDING])
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->whereKey($validated["request_id"])
            ->first();

            if(!$record) {
                throw new DomainException("Item request not found!");
            }

            $record->update([
                "status" => RequestStatus::CANCELLED
            ]);
        });
    }
}
