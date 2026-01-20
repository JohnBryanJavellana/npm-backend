<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\{DormitoryInvoice, DormitoryReqService, DormitoryService, DormitoryTenant};
use App\Utils\GenerateTrace;
use DomainException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
use Termwind\Components\Raw;

class DormitoryExtraService {

    private const LONG_TTL = 600;
    public function __construct(
        protected DormitoryTenant $tenantModel,
        protected DormitoryReqService $dormitoryReqService,
        protected DormitoryService $dormitoryService,
        protected DormitoryInvoice $dormitoryInvoiceModel
        
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

    private function prepareData($validated, int $userId) {
        $record = $this->tenantModel->query()
        ->with([
            "services" => function($query) use($validated) {
            $query->where("dormitory_service_id", $validated["service_id"])
                ->forStatus([RequestStatus::APPROVED, RequestStatus::PENDING]);
        },
        "services.services"
        ])
        ->select("id")
        ->whereKey($validated["dormitory_id"])
        ->forStatus([RequestStatus::APPROVED, RequestStatus::EXTENDING])
        ->forUser($userId)
        ->first();

        if(!$record) {
            throw new DomainException("Not active tenant record found");
        }

        if($record->services->isNotEmpty()) {
            $services = $record->services->pluck("services")->flatten()->pluck("name")->filter()->implode(', ');
            throw new DomainException("You already have an active request for this service. Please wait for the current request to be completed before submitting a new one. Service: $services");
        } 

        //service validation
        $service = $this->dormitoryService->query()
        ->select("id", "name", "status")
        ->whereKey($validated["service_id"])
        ->first();

        if(!$service) {
            throw new DomainException("Service not found");
        }

        if($service->status === RequestStatus::UNAVAILABLE) {
            throw new DomainException("Service in unavailable for the moment.");
        }
    }

    public function createService($validated, int $userId)
    {
        return DB::transaction(function() use ($userId, $validated) {
            $this->prepareData($validated, $userId);
            $invoice =$this->dormitoryInvoiceModel->create([
                "user_id" => $userId,
                "dormitory_tenant_id" => $validated["dormitory_id"],
                "isInitial" => "N",
                "charge_id" => $validated["charge_id"],
                "type" => RequestStatus::SERVICE,
                "trace_number" => GenerateTrace::createTraceNumber($this->dormitoryInvoiceModel, "-DRINV-"),
            ]);

            $this->dormitoryReqService->create([
                "dormitory_tenant_id" => $validated["dormitory_id"],
                "dormitory_service_id" => $validated["service_id"],
                "dormitory_invoices_id" => $invoice->id
            ]);
        });
    }

    public function cancelService($documentId, $userId)
    {
        DB::transaction(function () use ($documentId, $userId) {

            $record = $this->dormitoryReqService->query()
            ->with(["invoice"])
            ->whereKey($documentId)
            ->whereRelation("tenant", "user_id", "=", $userId)
            ->lockForUpdate()
            ->first();
            
            if(!$record) {
                throw new DomainException("Service record not found!");
            }

            if($record->status === RequestStatus::CANCELLED) {
                throw new DomainException("This service request has already been cancelled.");
            }

            if(!in_array($record->status, [
                RequestStatus::PENDING->value,
                RequestStatus::APPROVED->value,
                RequestStatus::FOR_PAYMENT->value,
            ])) {
                throw new DomainException("Service request cancellation is not permitted.");
            }

            $record->update([
                "status" => RequestStatus::CANCELLED,
            ]);

            // $record->invoice->update([
            //     "invoice_status" => RequestStatus::CANCELLED,
            // ]);

            $record->invoice?->delete();
        });
    }
}