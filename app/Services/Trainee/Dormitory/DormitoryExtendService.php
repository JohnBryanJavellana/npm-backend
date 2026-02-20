<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryInventory,
    DormitoryTransfer,
    DormitoryExtensionRequest
};
use App\Enums\RequestStatus;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;

class DormitoryExtendService {


    private const PREFIX = "-TR-";
    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantService $dormitoryTenantService,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtensionRequest $dormitoryExtensionRequest,
    ) {}

    private function prepareData($userId, $documentId)
    {
        $record = $this->tenantModel
        ->with([
            "transferRequest"=> function ($query)use ($userId, $documentId) {
                $query->forUser($userId)
                    ->where("dormitory_tenant_id", $documentId)
                    ->status([RequestStatus::PENDING, RequestStatus::APPROVED]);
            },
            "extendRequest" => function ($query)use ($userId, $documentId) {
                $query->forUser($userId)
                    ->where("dormitory_tenant_id", $documentId)
                    ->status([RequestStatus::PENDING, RequestStatus::APPROVED ,RequestStatus::FOR_PAYMENT]);
            }
        ])
        ->forUser($userId)
        ->whereKey($documentId)
        ->first();
        
        if(!$record) {
            throw new DomainException("Dormitory request is not approved yet or an extending request is already existing.");
        }

        if(!in_array($record->tenant_status, [RequestStatus::ACTIVE->value])) {
            throw new DomainException("Room extension requests require an ACTIVE dormitory tenant record. Please ensure your tenant status is ACTIVE before submitting an extention request.");
        }

        if($record->transferRequest->isNotEmpty()) {
            throw new DomainException("A pending or approved TRANSFERING request already exists.");
        }

        if($record->extendRequest->isNotEmpty()) {
            throw new DomainException("A pending or approved EXTENDING request already exists.");
        }

        // if ($record->isExpired()) {
        //     throw new DomainException("This dormitory tenant record is already terminated.");
        // }
    }
    public function createExtendRequest($userId, $validated)
    {
        return DB::transaction(function () use ($userId, $validated) {
            $this->prepareData($userId, $validated["document_id"]);
            
            $record = $this->dormitoryExtensionRequest->create([
                "dormitory_tenant_id" => $validated["document_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->dormitoryExtensionRequest, self::PREFIX),
                "old_end_date" => $validated["to_date"],
                "new_end_date" => $validated["extension_date"],
            ]);

            $this->dormitoryTenantService->updateTenantRecordById($validated["document_id"], $userId, RequestStatus::EXTENDING);

            $this->loggingDetails(
                $validated["document_id"], 
                $userId,
                "sent",
                "You’ve sent your dormitory extend request."
            );

            return $record;
        });
    }

    public function cancelExtendRequest($requestId, $userId)
    {
        DB::transaction(function() use ($requestId, $userId) {
            $extend = $this->dormitoryExtensionRequest->query()
            ->with("tenant")
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->wherekey($requestId)
            ->lockForUpdate()
            ->first();

            if($extend->status === RequestStatus::CANCELLED) {
                throw new DomainException('This extending request has already been cancelled.');
            }

            if (!in_array($extend->status, [
                RequestStatus::PENDING->value,
                RequestStatus::APPROVED->value,
                RequestStatus::FOR_PAYMENT->value
            ])) {
                throw new DomainException('Extending request cancellation is not permitted.');
            }
            
            $extend->update([
                "status" => RequestStatus::CANCELLED
            ]);

            $status = Carbon::parse($extend->tenant?->tenant_to_date)->isPast() ? RequestStatus::TERMINATED->value : RequestStatus::ACTIVE->value;


            $this->dormitoryTenantService->updateTenantRecordById($extend->dormitory_tenant_id, $userId, $status);
        
            $this->loggingDetails(
                $extend->dormitory_tenant_id,
                $userId, 
                "cancelled",
                "You cancelled your room extend request."
            );
        });
    }

    private function loggingDetails(int $tenant_id, int $userId, string $action, string $reason) {

        AuditHelper::log($userId, "User $userId has $action a dorm extend request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $tenant_id,
            "history_reason" => $reason,
        ]);
    }
}