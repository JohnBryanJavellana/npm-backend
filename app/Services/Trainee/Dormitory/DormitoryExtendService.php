<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryInventory,
    DormitoryTransfer,
    DormitoryExtendRequest
};
use App\Enums\RequestStatus;

class DormitoryExtendService {

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryExtendRequest $dormitoryExtendRequest,
    ) {}

     
    private function validateData($userId, $documentId)
    {
        $record = $this->tenantModel
        ->with("transferRequest")
        ->where([
            "id" => $documentId,
            "user_id" => $userId
        ])->first();

        if(!$record) {
            throw new \DomainException("");
        }

    }
}