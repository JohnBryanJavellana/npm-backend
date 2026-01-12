<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\DormitoryTenant;

class DormitoryTenantService {


    public function __construct(
        protected DormitoryTenant $dormitoryTenantModel
    )
    {}

    public function getTenantRecordById($tenant)
    {
        
    }
}