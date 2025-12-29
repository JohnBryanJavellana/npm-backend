<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\{DormitoryReqService, DormitoryService, DormitoryTenant};
use DomainException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

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

    public function getUserServiceRequest($documentId, $status)
    {
        $record = $this->dormitoryReqService
        ->with([
            "services"
        ])
        ->where("dormitory_tenant_id", $documentId);

        if($status->isNotEmpty()) {
            $record->forStatus([$status]);
        }

        return $record->get();
    }

    private function validateData($validated, int $userId) {
        $existing = $this->tenantModel
        ->with(["services" => function($query) use($validated) {
            $query->where("dormitory_service_id", $validated["service_id"])
                ->forStatus([RequestStatus::APPROVED->value, RequestStatus::PENDING->value]);
        }])
        ->select("id")
        ->whereKey($validated["document_id"])
        ->forStatus([RequestStatus::APPROVED->value])
        ->forUser($userId)
        ->first();

        if(!$existing) {
            throw new DomainException("No active tenant record found");
        }

        if($existing->services->isNotEmpty()) {
            $services = $existing->pluck("services.name")->filter()->implode(', ');
            throw new DomainException("You already have an active request for this service. Please wait for the current request to be completed before submitting a new one. Service: $services");
        }
        
        $service = $this->dormitoryService
        ->select("id", "name", "status")
        ->whereKey($validated["service_id"])
        ->first();

        if(!$service) {
            throw new DomainException("Service not found");
        }

        if($service->status === RequestStatus::UNAVAILABLE->value) {
            throw new DomainException("Service in unavailable for the moment.");
        }
    }

    public function createService($validated, int $userId)
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

    public function cancelService($documentId, $userId)
    {
        DB::transaction(function () use ($documentId, $userId) {

            $record = $this->dormitoryReqService
            ->whereKey($documentId)
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->lockForUpdate()
            ->first();
            
            if(!$record) {
                throw new DomainException("Service record not found!");
            }

            if($record->status === RequestStatus::CANCELLED->value) {
                throw new DomainException("Service request was already cancelled.");
            }

            $record->update([
                "status" => RequestStatus::CANCELLED->value
            ]);
        });
    }
}