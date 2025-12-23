<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\DormitoryInventory;
use App\Models\DormitoryRoom;
use App\Models\DormitoryTenant;
use App\Models\DormitoryTenantHistory;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use App\Utils\GenerateUniqueFilename;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class DormitoryService {


    protected $tenantModel;
    protected $roomModel;
    protected $inventoryModel;

    protected $long_ttl = 600;

    public function __construct(DormitoryRoom $roomModel, DormitoryTenant $tenantModel, DormitoryTenantHistory $dormitoryTenantHistory, DormitoryInventory $dormitoryInventory)
    {
        $this->tenantModel =$tenantModel;
        $this->roomModel = $roomModel;
        $this->inventoryModel = $dormitoryInventory;
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

            foreach($validated["items"] as $item) {

            }

            $record = $this->tenantModel->create($data);
            $this->loggingDetails($record, $userId);

        });
    }

    public function allInvItems()
    {
        //might change, if will return based on stocks
        $cache_key = "inventoryItems";
        $items = Cache::remember($cache_key, $this->long_ttl, function() {
            return DormitoryInventory::all();
        });

        return $items;
    }

    private function loggingDetails($record, $userId) {

        AuditHelper::log($userId, "User {$userId} sent a dorm request.");

        $dormitory_tenant_history = new DormitoryTenantHistory;
        $dormitory_tenant_history->dormitory_tenant_id = $record->id;
        $dormitory_tenant_history->history_reason = "Requested";
        $dormitory_tenant_history->save();
    }
}
