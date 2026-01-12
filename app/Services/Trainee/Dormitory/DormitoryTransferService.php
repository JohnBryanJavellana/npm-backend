<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\{
    DormitoryInventory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryTransfer,
    DormitoryExtendRequest
};
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use Illuminate\Support\Facades\DB;
use DomainException;
use Symfony\Component\HttpFoundation\Request;

class DormitoryTransferService extends DormitoryHistoryService {

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtendRequest $dormitoryExtendRequest,
    ) {}

    private function prepareData($userId, $documentId) {

        $record = $this->tenantModel
        ->with([
            "transferRequest" => function($query) {
                $query->where("status", "PENDING")->select("id", "dormitory_tenant_id", "status");
            }

            //include the extending requests
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

        if($record->transfers !== null) {
            throw new DomainException("A pending transfer request already exists. You may only submit a new request once the current one has been resolved.");
        }
    }

    public function viewTransferRequests($documentId, $userId, array $status = [])
    {
        try {
            $query = $this->dormitoryTransfer
            ->forUser($userId)
            ->forTenant($documentId);

        if(!empty($status)) {
            $query->status($status);
        }

        return $query->get();
        }
        catch (\Exception $e) {
        }
    }

    public function createTransferRequest($validated, $userId)
    {
        DB::transaction(function() use ($userId, $validated) {
            // $this->prepareData($userId, $validated["document_id"]);

            $this->dormitoryTransfer->create([
                "dormitory_tenant_id" => $validated["document_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->dormitoryTransfer, "-TR-"),
                "transfer_type" => $validated["transfer_type"],
                "room_type" => $validated["type"],
                "reason" => $validated["reason"]
            ]);

            //temporary
            $this->tenantModel->query()
            ->whereKey($validated["document_id"])
            ->lockForUpdate()
            ->update([
                "tenant_status" => RequestStatus::TRANSFERRING->value
            ]);

            $this->loggingDetails(
                $validated["document_id"], 
                $userId, 
                "sent",
                "You’ve sent your dormitory transfer request."
            );
        });
    }

    public function cancelTransferRequest(int $id, int $userId)
    {
        DB::transaction(function() use($id, $userId) {
            $record = $this->dormitoryTransfer
            ->with("tenant")
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->whereNot("status", RequestStatus::CANCELLED->value)
            ->lockForUpdate()
            ->findOrFail($id);

            if(!$record) {
                throw new DomainException("Transfer request not found.");
            }

            if($record->status === RequestStatus::CANCELLED->value) {
                throw new DomainException(("This transfer request has already been cancelled."));
            }

            if($record->status === RequestStatus::APPROVED->value) {
                throw new DomainException("Transfer request cancellation is not permitted.");
            }

            $record->update(["status" => RequestStatus::CANCELLED->value]);

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