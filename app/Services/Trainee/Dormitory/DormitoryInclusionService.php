<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\ {
    DormitoryInclusionRequest,
    DormitoryInventory,
    DormitoryItemBorrowing
};
use DomainException;
use Illuminate\Support\Facades\DB;


class DormitoryInclusionService {
    public function __construct(
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryItemBorrowing $dormitoryItemBorrowing,
        protected DormitoryInclusionRequest $dormitoryInclusionRequest,
    )
    {}

    public function getUserInclusionRequest($documentId)
    {
        return $this->dormitoryInclusionRequest->where("dormitory_tenant_id", $documentId)->get();
    }

    public function getAllItems()
    {
        //ADD CACHE
        return $this->dormitoryInventory
        ->whereHas("stock", function($query) {
            $query->where("status", "AVAILABLE");
        })
        ->get();
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
        DB::transaction(function () use ($validated, $userId) {
            $this->dormitoryInclusionRequest->create([
                "dormitory_inventory_id" => $validated["inclusion_id"],
                "dormitory_tenant_id" => $validated["request_id"],
                "quantity" => $validated["quantity"]
            ]);
        });
    }

    public function cancelInclusionRequest($validated, $userId)
    {
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