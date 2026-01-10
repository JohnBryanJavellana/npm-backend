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
        return Cache::remember($cacheKey, self::LONG_TTL, function() { 
           return $this->dormitoryService
           ->with([
            "charge:id,charge_category_id,name,amount,description,service_type",
            "charge.chargeCategory:id,name",
            ])->get();
        });
    }

    public function getUserServiceRequest($documentId, $status)
    {
        $record = $this->dormitoryReqService
        ->with([
            "services"
        ])
        ->where("dormitory_tenant_id", $documentId)
        ->latest("created_at");

        if(!empty($status)) {
            $record->forStatus([$status]);
        }

        return $record->get();
    }

    private function validateData($validated, int $userId) {
        $existing = $this->tenantModel->query()
        ->with(["services" => function($query) use($validated) {
            $query->where("dormitory_service_id", $validated["service_id"])
                ->forStatus([RequestStatus::APPROVED->value, RequestStatus::PENDING->value]);
        },
        "services.services"
        ])
        ->select("id")
        ->whereKey($validated["dormitory_id"])
        ->forStatus([RequestStatus::APPROVED->value, RequestStatus::EXTENDING->value])
        ->forUser($userId)
        ->first();

        if(!$existing) {
            throw new DomainException("Not active tenant record found");
        }

        if($existing->services->isNotEmpty()) {
            $services = $existing->services->pluck("services")->flatten()->pluck("name")->filter()->implode(', ');
            throw new DomainException("You already have an active request for this service. Please wait for the current request to be completed before submitting a new one. Service: $services");
        } 

        $service = $this->dormitoryService->query()
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
        return DB::transaction(function() use ($userId, $validated) {
            // $this->validateData($validated, $userId);

            $this->dormitoryReqService->create([
                "dormitory_tenant_id" => $validated["dormitory_id"],
                "dormitory_service_id" => $validated["service_id"],
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
                throw new DomainException("This service request has already been cancelled.");
            }

            if(!in_array($record->tenant_status, [
                RequestStatus::PENDING->value,
                RequestStatus::APPROVED->value,
                RequestStatus::FOR_PAYMENT->value,
            ])) {
                throw new DomainException("Service request cancellation is not permitted.");
            }

            //enum for done

            $record->update([
                "status" => RequestStatus::CANCELLED->value
            ]);
        });
    }
}