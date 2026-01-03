<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\DormitoryTenantHistory;

class DormitoryHistoryService {
    public function __construct(
        protected DormitoryTenantHistory $dormitoryTenantHistory
    )
    {}

    public function getUserDormHistory($userId, $documentId)
    {
        return$this->dormitoryTenantHistory
        ->whereRelation("tenants", "user_id", "=", $userId)
        ->where([
            "dormitory_tenant_id" => $documentId,
            ])
        ->get();
    }
}