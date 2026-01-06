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
use App\Utils\GenerateTrace;
use DomainException;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;

class DormitoryExtendService {


    private const PREFIX = "-TR-";
    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtensionRequest $dormitoryExtensionRequest,
    ) {}

     
    private function prepareData($userId, $documentId)
    {
        $record = $this->tenantModel
        ->with([
            "transferRequest"=> function ($query)use ($documentId, $userId) {
                $query->forUser($userId)
                    ->where("dormitory_tenant_id", $documentId)
                    ->status([RequestStatus::PENDING->value, RequestStatus::APPROVED->value]);
            },
            "extendRequest" => function ($query)use ($documentId, $userId) {
                $query->forUser($userId)
                    ->where("dormitory_tenant_id", $documentId)
                    ->status([RequestStatus::PENDING->value, RequestStatus::APPROVED->value]);
            }
        ])
        ->forUser($userId)
        ->forStatus([RequestStatus::APPROVED->value])
        ->whereKey($documentId)
        ->first();

        if(!$record) {
            throw new DomainException("No active tenant record was found. Room extension requests can only be made by active tenants.");
        }

        if(!$record->transferRequest->isNotEmpty()) {
            throw new DomainException("A pending or approved transfering request already exists.");
        }

        if(!$record->extendRequest->isNotEmpty()) {
            throw new DomainException("A pending or approved extending request already exists.");
        }
    }

    public function createExtendRequest($userId, $validated)
    {
        return DB::transaction(function () use ($userId, $validated) {
            $this->prepareData($userId, $validated["document_id"]);
            
            $record = $this->dormitoryExtensionRequest->create([
                "trace_number" => GenerateTrace::createTraceNumber($this->dormitoryTransfer, self::PREFIX),
                "old_end_date" => $validated["to_date"],
                "new_end_date" => $validated["extension_date"],
            ]);

            $this->updateTenantRecord($validated["document_id"], RequestStatus::EXTENDING->value);

            return $record;
        });
    }

    public function cancelExtendRequest(DormitoryExtensionRequest $extend)
    {
        if (!in_array($extend->status, [
            RequestStatus::PENDING->value,
            RequestStatus::APPROVED->value,
            RequestStatus::FOR_PAYMENT->value
        ])) {
            throw new DomainException('Extending request cannot be cancelled.');
        }
        
        $extend->update([
            "status" => RequestStatus::CANCELLED->value
        ]);

        $this->updateTenantRecord($extend->dormitory_tenant_id, RequestStatus::APPROVED->value);
    }

    private function updateTenantRecord(DormitoryTenant $tenant, $status) {
        $tenant->update([
            "tenant_status" => $status
        ]);
    }
}