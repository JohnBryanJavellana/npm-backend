<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\DormitoryRoom;
use App\Models\DormitoryTenant;
use App\Models\DormitoryTenantHistory;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use App\Utils\GenerateUniqueFilename;
use Illuminate\Support\Facades\DB;

class DormitoryService {


    protected $tenantModel;
    protected $roomModel;

    public function __construct(DormitoryRoom $roomModel, DormitoryTenant $tenantModel, DormitoryTenantHistory $dormitoryTenantHistory)
    {
        $this->tenantModel =$tenantModel;
        $this->roomModel = $roomModel;
    }
    

    public function createDormRequest($validated, $userId)
    {
        DB::transaction(function($validated, $userId) {
            
            $data = [
                "user_id" => $userId,
                "room_for_type" => $validated["forType"],
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, "-DR-"),
                "is_air_conditioned" => $validated["is_air_conditioned"],
                "single_occupancy" => $validated["single_occupancy"],
                "tenant_from_date" => $validated["startDate"],
                "tenant_to_date" => $validated["endDate"],
                "purpose" => $validated["purpose"]
            ];

            if($validated["forType"] === $this->tenantModel::COUPLE) {
                $file_requested = $validated["file"];
                $filename = GenerateUniqueFilename::generate($file_requested);
                $file_requested->move(public_path('marriage-files'), $filename);
                $data["filename"] = $filename;
            }

            $record = $this->tenantModel->create($data);


        });
    }
    private function loggingDetails($record, $userId) {

        AuditHelper::log($userId, "User {$userId} sent a dorm request.");

        $dormitory_tenant_history = new DormitoryTenantHistory;
        $dormitory_tenant_history->dormitory_tenant_id = $tenant_dormitory->id;
        $dormitory_tenant_history->history_reason = "Requested";
        $dormitory_tenant_history->save();
    }
}
