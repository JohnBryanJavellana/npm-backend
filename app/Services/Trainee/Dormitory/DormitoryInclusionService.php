<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\ {
    DormitoryInclusionRequest,
    DormitoryInventory,
    DormitoryItemBorrowing
};
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
    )
    {}

    public function getUserInclusionRequest($documentId)
    {
        return $this->dormitoryInclusionRequest
        ->with([
            "itemInfo"
        ])
        ->where("dormitory_tenant_id", $documentId)->get();
    }

    public function getAllItems()
    {
        $cacheKey = "dormitory:inclusions:all";
        return  Cache::remember($cacheKey, self::LONG_TTL, function () {
            return $this->dormitoryInventory
            ->whereHas("stock", fn($q) => $q->available())
            ->get();    
        });    
    }

    public function getInclusions(string $documentId)
    {
        //VALIDATE & ADD CACHE
        return $this->dormitoryItemBorrowing
        ->with([
            "items.item.itemInfo"
        ])
        ->whereRelation("tenant", "trace_number", "=", $documentId)
        ->get();
    }

    public function createInclusionRequest($validated, $userId)
    {
        return DB::transaction(function () use ($validated, $userId) {
            return $this->dormitoryInclusionRequest->create([
                "dormitory_inventory_id" => $validated["inclusion_id"],
                "dormitory_tenant_id" => $validated["request_id"],
                "quantity" => $validated["quantity"]
            ]);
        });
    }

    public function cancelInclusionRequest($validated, $userId)
    {
        // validate the owner
        DB::transaction(function () use ($validated, $userId) {
            $record = $this->dormitoryInclusionRequest
            ->whereKey($validated["document_id"])
            ->status([RequestStatus::APPROVED->value, RequestStatus::PENDING->value])
            ->first();

            if(!$record) {
                throw new DomainException("Item request not found!");
            }

            $record->update([
                "status" => RequestStatus::CANCELLED->value
            ]);
        });
    }
}