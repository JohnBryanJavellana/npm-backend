<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\DormitoryRoom;
use App\Models\DormitoryTenant;

class DormitoryService {


    protected $tenantModel;
    protected $roomModel;

    public function __construct(DormitoryRoom $roomModel, DormitoryTenant $tenantModel)
    {
        $this->tenantModel =$tenantModel;
        $this->roomModel = $roomModel;
    }
    
}
