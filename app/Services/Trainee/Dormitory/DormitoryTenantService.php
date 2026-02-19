<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\DormitoryTenant;

class DormitoryTenantService {


    public function __construct(
        protected DormitoryTenant $dormitoryTenantModel
    )
    {}

    public function getTenantRecordById($tenantId, $userId, $columns = ["*"], $with = [])
    {
        $record = $this->dormitoryTenantModel->query()
        ->whereKey($tenantId)
        ->forUser($userId);

        if(!empty($with)) {
            $record->with($columns);
        }

        return $record->first($columns);
    }
    
    public function updateTenantRecordById($tenantId, $userId, $status)
    {
        $record = $this->dormitoryTenantModel->query()
        ->lockForUpdate()
        ->whereKey($tenantId)
        ->forUser($userId)
        ->first();

        $record->update([
            "tenant_status" => $status
        ]);

    }
}