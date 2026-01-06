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
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;

class DormitoryExtendService {

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtensionRequest $dormitoryExtensionRequest,
    ) {}

     
    private function validateData($userId, $documentId)
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
            throw new \DomainException("No active tenant record was found. Room extension requests can only be made by active tenants.");
        }

        if(!$record->transferRequest->isNotEmpty()) {
            throw new \DomainException("A pending or approved transfer request already exists.");
        }
    }

    public function createExtend($userId, $documentId)
    {
        DB::transaction(function () use ($userId, $documentId) {
            $this->validateData($userId, $documentId);
            
            $this->dormitoryExtensionRequest->create([
                "trace_number" => GenerateTrace::createTraceNumber($this->dormitoryTransfer, "-TR-"),
            ]);
        });
    }
}