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



    protected $long_ttl = 600;

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory)
    {
    }
    

    public function createDormRequest($validated, $userId)
    {
        DB::transaction(function($validated, $userId) {
            
            $data = [
                "user_id" => $userId,
                "room_for_type" => $validated["forType"],
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, "-DR-"),
                "is_air_conditioned" => $validated["is_air_conditioned"],
                "single_accomodation" => $validated["single_accomodation"],
                "tenant_from_date" => $validated["startDate"],
                "tenant_to_date" => $validated["endDate"],
                "purpose" => $validated["purpose"],
                "remarks" => $validated["remarks"]
            ];

            if($validated["forType"] === $this->tenantModel::COUPLE) {
                $file_requested = $validated["file"];
                $filename = GenerateUniqueFilename::generate($file_requested);
                $file_requested->move(public_path('marriage-files'), $filename);
                $data["filename"] = $filename;
            }

            $record = $this->tenantModel->create($data);

            foreach($validated["items"] as $item) {
                $this->dormitoryInventory->create([
                    "dormitory_tenant_id" => $record->id,
                    "dormitory_inventory_id" => $item
                ]);
            }

            $this->loggingDetails($record, $userId);

        });
    }

    public function allInvItems()
    {
        //might change, if will return based on stocks
        $cache_key = "inventoryItems";
        $items = Cache::remember($cache_key, $this->long_ttl, function() {
            return $this->dormitoryInventory::all();
        });

        return $items;
    }

    private function loggingDetails($record, $userId) {

        AuditHelper::log($userId, "User {$userId} sent a dorm request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $record->id,
            "history_reason" => "Requested",
        ]);
    }
}
