<?php

namespace App\Services\Trainee\Recreational;

use App\Enums\RequestStatus;
use App\Models\RAEquipmentRequest;
use App\Models\RAEquipments;
use App\Models\RAEquipmentStock;
use App\Models\RAFacility;
use App\Models\RAFacilityRequest;
use App\Models\RARequestInfo;
use App\Utils\GenerateTrace;
use Illuminate\Support\Facades\DB;

class RecreationalService {
    public function __construct(
        protected RAEquipments $raequipmentsModel,
        protected RAEquipmentStock $raequipmentStockModel,
        protected RAFacility $rafacilityModel,
        protected RAFacilityRequest $rafacilityRequestModel,
        protected RAEquipmentRequest $raequipmentRequestModel,
        protected RARequestInfo $rarequestInfoModel
    ){}

    public function getEquipments()
    {
        return $this->raequipmentsModel->query()
        ->select(["id", "name", "additional_details", "availability_status"])
        ->withCount([
            "stocks" => function($query) {
                $query->available()->okayCondition();
            },
        ])
        ->with([
            "hasData" => function($query){
                $query->where("status", RequestStatus::APPROVED->value);
            },
            "images:id,r_a_equipments_id,filename",
            "relatedFacility:id,r_a_facility_id,r_a_equipments_id",
            "relatedFacility.facility.images:id,r_a_facility_id,filename",
            "relatedFacility.facility:id,name,location,additional_details,open_time,close_time,condition_status,availability_status",
            "relatedFacility.facility.hasData" => function($query){
                $query->where("status", RequestStatus::APPROVED->value);
            }
        ])
        ->available()
        ->get();
    }

    public function getUserRecRecord($validated)
    {
        $recordsQuery = $this->rarequestInfoModel->query()
        ->where([
            "user_id" => $validated["userId"],
        ])
        ->latest();

        if(!empty($validated["status"])) {
            $recordsQuery->status($validated["status"]);
        }

        if(!empty($validated["traceNumber"])) {
            return $recordsQuery->where("trace_number", $validated["traceNumber"])
            ->with([
                "equipment_request",
                "equipment_request.equipment",
                "facility_request",
                "facility_request.facility",
            ])
            ->get();
        }
        return $recordsQuery->get();
    }

    public function getFacilities()
    {
        return $this->rafacilityModel->query()
        ->with([
            "hasData" => function($query) {
                $query->where("status", RequestStatus::APPROVED->value);
            },
            "images:id,r_a_facility_id,filename",
            "relatedEquipment:id,r_a_facility_id,r_a_equipments_id",
            "relatedEquipment.equipment.images:id,r_a_equipments_id,filename",
            "relatedEquipment.equipment:id,name,additional_details",
            "relatedEquipment.equipment.hasData" => function($query){
                $query->where("status", RequestStatus::APPROVED->value);
            },
        ])
        ->available()
        ->okayCondition()
        ->get(["id","name","location","additional_details","open_time","close_time","condition_status","availability_status"]);
    }

    public function prepareEquipment($validated)
    {
        // $requested = collect($validated["data"])->filter(fn($data) => $data["type"] === "EQUIPMENT")->pluck("id");
        return collect($validated["data"])->unique("type")->pluck("type");


        return $this->raequipmentsModel->query()
        ->whereIn("id", $requested)
        ->get();
    }


    public function storeRecreationalRequests($validated)
    {
        DB::transaction(function() use ($validated) {

            $types = collect($validated["data"])->unique("type")->pluck("type");

            $selectedType = match ($types->count()) {
                1 => $types->first(),
                default => 'HYBRID',
            };
            //create a separate method
            $record = $this->rarequestInfoModel->create([
                "user_id" => $validated["user_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->rarequestInfoModel,"-RAR-"),
                "request_type" => $selectedType,
                "reason" => $validated["purpose"],
            ]);

            //separate and group and validate
            foreach($validated["data"] as $info) {
                if ($info["type"] === "EQUIPMENT") {
                    $stock = $this->raequipmentStockModel->query()->where("unique_identifier", $validated["unique_identifier"])->lockForUpdate()->available()->okayCondition()->firstOrFail();
                    $this->raequipmentRequestModel->create([
                        "r_a_request_info_id" => $record->id,
                        // "r_a_equipment_stock_id" => $stock->id, if has unique identifier passed get the equipment_id
                        "start_date" => $info["from_datetime"],
                        "end_date" => $info["to_datetime"],
                        "issued_condition" => $stock->condition_status,
                    ]);
                    $stock->update([
                        "condition_status" => "BORROWED"
                    ]);
                } else {

                    $this->rafacilityRequestModel->create([
                        "r_a_request_info_id" => $record->id,
                        "r_a_facility_id" => $info["id"],
                        "start_date" => $info["from_datetime"],
                        "end_date" => $info["to_datetime"],
                        // "issued_condition" =>$stock->condition_status, MUST THROW AN ERROR
                    ]);
                }
            }
        });
    }

    public function storeEquipmentRequest()
    {
        return;
    }

    public function storeFacilitiesRequest()
    {
        return;
    }

    public function cancelRequests()
    {
        return;
    }
}
