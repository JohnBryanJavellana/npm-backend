<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\{DormitoryReqService, DormitoryService, DormitoryTenant};
use DomainException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DormitoryExtraService {

    private const LONG_TTL = 600;
    public function __construct(
        protected DormitoryTenant $tenantModel,
        protected DormitoryReqService $dormitoryReqService,
        protected DormitoryService $dormitoryService,
    ) {}

    public function viewServices()
    {
        $cacheKey = "dormitory:services:all";
        return Cache::remember($cacheKey, self::LONG_TTL, fn() => $this->dormitoryService->all()
        );
    }

    private function validateData($validated, int $userId) {
        $existing = $this->tenantModel
        ->with(["services" => function($query) use($validated) {
            $query->where("dormitory_service_id", $validated["service_id"]);
        }])
        ->select("id")
        ->wherekey($validated["document_id"])
        ->forStatus([RequestStatus::APPROVED->value])
        ->forUser($userId)
        ->first();

        if(!$existing) {
            throw new DomainException("No active tenant record found");
        }
        
        $service = $this->dormitoryService
        ->select("id", "name", "status")
        ->whereKey($validated["service_id"])
        ->first();

        if(!$service) {
            
        }

        if($service->status === RequestStatus::UNAVAILALBLE->value) {
            throw new DomainException("Service in unavailable for the moment.");
        }
    }

    public function createService($validated, $userId)
    {
        DB::transaction(function() use ($userId, $validated) {
            $this->validateData($validated, $userId);

            $this->dormitoryReqService->create([
                "dormitory_tenant_id" => $validated["dormitory_id"],
                "dormitory_service_id" => $validated["service_id"],
                "remarks" => $validated["remarks"]
            ]);
        });
    }
}