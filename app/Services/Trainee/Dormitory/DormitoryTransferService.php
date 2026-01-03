<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    DormitoryInventory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryTransfer,
    DormitoryExtendRequest
};
use App\Utils\AuditHelper;
use Illuminate\Support\Facades\DB;
use DomainException;

class DormitoryTransferService extends DormitoryHistoryService {

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtendRequest $dormitoryExtendRequest,
    ) {}

    private function validateData($userId, $documentId) {

        $record = $this->tenantModel
        ->with([
            "transferRequest" => function($query) {
                $query->where("status", "PENDING")->select("id", "dormitory_tenant_id", "status");
            }
        ])
        ->where([
            "id" => $documentId,
            "user_id" => $userId
        ])
        ->first(["id", "user_id", "tenant_status"]);

        if(!$record) {
            throw new DomainException("Invalid tenant record or unauthorized access.");
        }

        if($record->tenant_status !== "APPROVED") {
            throw new DomainException("No active tenant record was found. Room transfer requests can only be made by active tenants.");
        }

        if($record->transfers->isNotEmpty()) {
            throw new DomainException("A pending transfer request already exists. You may only submit a new request once the current one has been resolved.");
        }
    }

    public function createTransfer($validated, $userId)
    {
        DB::transaction(function() use ($userId, $validated) {
            $this->validateData($userId, $validated["document_id"]);

            $this->dormitoryTransfer->create([
                "dormitory_tenant_id" => $validated["document_id"],
                "transfer_type" => $validated["transfer_type"],
                "room_type" => $validated["type"],
                "reason" => $validated["reason"]
            ]);

            $this->loggingDetails(
                $validated["document_id"], 
                $userId, 
                "requested",
                "You’ve sent your dormitory transfer request."
            );
        });
    }


    public function cancelTransfer(int $id, int $userId)
    {
        DB::transaction(function() use($id, $userId) {
            $record = $this->dormitoryTransfer
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->with("tenant")
            ->lockForUpdate()
            ->findOrFail($id);

            if(!$record || $userId != $record->tenant->user_id) {
                throw new DomainException("Transfer request not found or unauthorized access.");
            }

            if($record->status === "APPROVED") {
                throw new DomainException("Transfer request cancellation is not permitted.");
            }

            $record->delete();

            $this->loggingDetails(
                $record->dormitory_tenant_id,
                $userId, 
                "cancelled",
                "You cancelled your room transfer request."
            );
        });
    }
    private function loggingDetails(int $tenant_id, int $userId, string $action, string $reason) {

        AuditHelper::log($userId, "User $userId has $action a dorm transfer request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $tenant_id,
            "history_reason" => $reason,
        ]);
    }
}