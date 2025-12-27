<?php

namespace App\Services\Trainee\Dormitory;

use App\Models\{
    DormitoryInventory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryTenantHistory,
    DormitoryTransfer,
    DormitoryExtendRequest
};
use App\Enums\RequestStatus;
use App\Utils\AuditHelper;
use App\Utils\GenerateTrace;
use App\Utils\GenerateUniqueFilename;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Svg\Tag\Rect;
use Symfony\Component\HttpFoundation\Request;

class DormitoryRequestService {

    protected $long_ttl = 600;

    public function __construct(
        protected DormitoryRoom $roomModel,
        protected DormitoryTenant $tenantModel,
        protected DormitoryTenantHistory $dormitoryTenantHistory,
        protected DormitoryInventory $dormitoryInventory,
        ){}

    public function createDormRequest($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {
            
            $this->validateData($userId);
            
            $data = [
                "user_id" => $userId,
                "room_for_type" => $validated["forType"],
                "trace_number" => GenerateTrace::createTraceNumber($this->tenantModel, "-DR-"),
                "is_air_conditioned" => $validated["is_air_conditioned"],
                "single_accomodation" => $validated["single_accomodation"],
                "tenant_from_date" => $validated["startDate"],
                "tenant_to_date" => $validated["endDate"],
                "purpose" => $validated["purpose"],
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

            $this->loggingDetails($record, $userId, "requested");

        });
    }

    public function cancelRequest($request, $dormitory_id)
    {
        DB::transaction(function() use ($request, $dormitory_id) {
            $record = $this->tenantModel
            ->where('id', $dormitory_id)
            ->lockForUpdate()
            ->firstOrFail();

            if($record->tenant_status === RequestStatus::CANCELLED) {
                throw new \DomainException(
                    "Dormitory request is already cancelled."
                );
            }

            if (
                $record->room_for_type === "COUPLE" && 
                $record->filename &&
                file_exists(public_path('marriage-files/' . $record->filename))
            ) {
                unlink(public_path('marriage-files/' . $record->filename));
            }

            $record->update([
                $record->tenant_status => RequestStatus::CANCELLED
            ]);

            $this->loggingDetails(
                $record, 
                $request->user()->id, 
                "cancelled",
            );
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

    private function validateData($userId) {
        
        $existing_request = $this->tenantModel
        ->where(['user_id' => $userId, 'tenant_status' => "PENDING"])
        ->exists();

        if ($existing_request) {
            throw new \DomainException("A request is already existing!");
        }
    }

    private function loggingDetails($record, $userId, $action) {

        AuditHelper::log($userId, "User $userId has $action a dorm room request.");

        $this->dormitoryTenantHistory->create([
            "dormitory_tenant_id" => $record->id,
            "history_reason" => $action,
        ]);
    }
}
