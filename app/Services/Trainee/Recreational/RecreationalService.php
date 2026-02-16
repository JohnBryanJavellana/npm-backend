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
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
            "relatedEquipment.equipment:id,name,additional_details,availability_status",
            "relatedEquipment.equipment.hasData" => function($query){
                $query->where("status", RequestStatus::APPROVED->value);
            },
        ])
        ->available()
        ->okayCondition()
        ->get(["id","name","location","additional_details","open_time","close_time","condition_status","availability_status"]);
    }

    public function getFacilityRequests($validated)
    {
        return $this->rafacilityRequestModel->query()
        ->where([
            "r_a_facility_id" => $validated["id"],
            "r_a_request_info_id" => $validated["rARequestInfoId"]
        ])
        ->with([
            "facility.images"
        ])
        ->get();
    }

    public function getEquipmentRequests($validated)
    {
        return $this->raequipmentRequestModel->query()
        ->where([
            "r_a_equipments_id" => $validated["id"],
            "r_a_request_info_id" => $validated["rARequestInfoId"]
        ])->with([
            'equipment_stock',
            'equipment.images'
        ])->get();
    }

    /**
     * fetch all based on the ids
     * (additional) what if fetched with() stock also and fetch a single and available.
     * check if the fetched data is the same as the ids that were passed
     * store and return if same
     * else throw error
     *
     * create a separate methods for storing with UI and without
     */

    public function prepareEquipment($validated)
    {
        $eq_id = collect($validated["data"])->filter(fn($data) => $data["type"] === "EQUIPMENT")->pluck("unique_identifier","id");
        $equipments = $this->raequipmentsModel->query();
        $ui = $eq_id->values()->flatten()->filter()->unique();

        if($eq_id->values()->filter()->isNotEmpty()) {
            $equipments->with([
                "stocks" => function($query)use ($ui){
                    $query->whereIn("unique_identifier",$ui)->available()->okayCondition();
                }
            ]);
        }

        $equipments = $equipments->select("id", "name")
        ->withCount(["stocks" => function($query) {
            $query->available()->okayCondition();
        }])
        ->whereIn("id", $eq_id->keys())
        ->get()
        ->keyBy("id");

        $equipmentWithoutStock = $equipments->filter(function($query) {
            return $query["stocks_count"] <= 0;
        });

        $titles = implode(", ", $equipmentWithoutStock->pluck("name")->toArray());

        if(!$equipmentWithoutStock->isEmpty()) {
            throw new DomainException(count($equipmentWithoutStock) > 1
            ? "Equipments does not have stock available. $titles"
            : "Equipment does not have stock available. $titles");
        }

        return $equipments;
    }

    public function storeRecreationalRequests($validated)
    {
        return DB::transaction(function() use ($validated) {

            // $equipments = $this->prepareEquipment($validated);

            $types = collect($validated["data"])->unique("type")->pluck("type");
            $selectedType = match ($types->count()) {
                1 => $types->first(),
                default => 'HYBRID',
            };

            $record = $this->rarequestInfoModel->create([
                "user_id" => $validated["user_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->rarequestInfoModel,"-RAR-"),
                "request_type" => $selectedType,
                "reason" => $validated["purpose"],
            ]);

            foreach($validated["data"] as $info) {
                if ($info["type"] === "EQUIPMENT") {
                    $this->storeEquipmentRequest($info, $record);
                } else {
                    $this->storeFacilitiesRequest($info, $record);
                }
            }
        });
    }

    public function storeEquipmentRequest($info, $record)
    {
        $uniqueIdentifiers = $info["UI"] ?? null;
        $data = [];
        if(!empty($uniqueIdentifiers)) {
            foreach($uniqueIdentifiers as $unique_identifier) {
                $stock = $this->raequipmentStockModel->query()
                ->uniqueIdentifier($unique_identifier)
                ->available()
                ->okayCondition()
                ->firstOr(function() use ($unique_identifier) {
                    throw new ModelNotFoundException("Selected equipment with ID {$unique_identifier} is not unavailable anymore.");
                });

                $data[] = [
                    "r_a_request_info_id" => $record->id,
                    "r_a_equipment_stock_id" => $stock->id,
                    "r_a_equipments_id" => $info["id"],
                    "start_date" => $info["from_datetime"],
                    "end_date" => $info["to_datetime"],
                    "issued_condition" => $stock->condition_status,
                    "updated_at" => now(),
                    "created_at" => now(),
                ];
            }
        }
        //check forr what if no quantity just qr
        if(!empty($info["quantity"])) {
            for($default = 0; $default < $info["quantity"]; $default++) {
                $data[] = [
                    "r_a_request_info_id" => $record->id,
                    "r_a_equipment_stock_id" => null,
                    "r_a_equipments_id" => $info["id"],
                    "start_date" => $info["from_datetime"],
                    "end_date" => $info["to_datetime"],
                    "issued_condition" => null,
                    "updated_at" => now(),
                    "created_at" => now(),
                ];
            }
        }
        $this->raequipmentRequestModel->insert($data);
    }

    public function storeFacilitiesRequest($info, $record)
    {
        $facility = $this->rafacilityModel->query()
        ->select("id", "condition_status")
        ->whereKey($info["id"])
        ->whereDoesntHave("hasData", function ($query) use ($info) {
            $query->where(function ($q) use ($info) {
                $q->whereBetween('start_date', [$info['from_datetime'], $info['to_datetime']])
                ->orWhereBetween('end_date', [$info['from_datetime'], $info['to_datetime']])
                ->orWhere(function ($subQ) use ($info) {
                    $subQ->where('start_date', '<=', $info['from_datetime'])
                        ->where('end_date', '>=', $info['to_datetime']);
                });
            });
        })
        ->available()
        ->okayCondition()
        ->firstOr(function() {
            throw new ModelNotFoundException("Selected facility is not available anymore.");
        });

        if(!$facility)
            $this->rafacilityRequestModel->create([
                "r_a_request_info_id" => $record->id,
                "r_a_facility_id" => $info["id"],
                "start_date" => $info["from_datetime"],
                "end_date" => $info["to_datetime"],
                "issued_condition" =>$facility->condition_status
        ]);
    }

    public function isUniqueIdenfierExist($validated)
    {
        $model = match ($validated->type) {
            'EQUIPMENT'  => $this->raequipmentStockModel,
            'FACILITY' => $this->rafacilityModel,
            default    => throw new DomainException("Invalid request!")
        };

        $record = $model->query();

        if($validated->type === "EQUIPMENT") {
            $record->where("unique_identifier", $validated->UIId);
        } else {
            $record->whereKey($validated->UIId);
        }

        $record->with([
            "equipment" => function($q) {
                $q->withCount([
                    "stocks" => function($qq) {
                $qq->available()->okayCondition();
            }]);
            }
        ])
        ->available()
        ->okayCondition()
        ->firstOrFail();

        return $record;
    }
    public function isUniqueIdenfierExistV1($validated)
    {
        $model = match ($validated->type) {
            'EQUIPMENT'  => $this->raequipmentStockModel,
            'FACILITY' => $this->rafacilityModel,
            default    => throw new DomainException("Invalid request!")
        };

        $record = $model->query()
        ->where("unique_identifier", $validated->UIId)
        ->withCount([
            "siblings as stock_count" => function($q) {
                $q->available()->okayCondition();
            }
        ])
        ->available()
        ->okayCondition()
        ->first();

        if(!$record) {
            throw new DomainException($validated["type"] === "EQUIPMENT" ? "Equipment" : "Facility" . "not found");
        }
        

        return $record;
    }
    public function prepareForCancellation($record)
    {
        $restrictedStatuses = ["CANCELLED", "RECEIVED"];

        if(in_array($record->status, $restrictedStatuses)) {
            throw new DomainException("Cant cancel unit. It is already $record->status.");
        }
    }
    public function cancelRequests($validated)
    {

        DB::transaction(function() use ($validated){
            $restrictedStatus = ["CANCELLED","RETURNED","DONE","DECLINED"];

            $model = match ($validated["documentType"]) {
                'EQUIPMENT'  => RAEquipmentRequest::class,
                'FACILITY' => RAFacilityRequest::class,
                default    => throw new \Exception("Invalid document type")
            };

            $thisRequest = $model::findOrFail($validated["documentId"]);

            $this->prepareForCancellation($thisRequest);

            $thisRequest->status = "CANCELLED";
            $thisRequest->save();

            if($model === RAEquipmentRequest::class && $thisRequest->r_a_equipment_stock_id !== null) {
                $mainStock = RAEquipmentStock::findOrFail($thisRequest->r_a_equipment_stock_id);
                $mainStock->availability_status = RequestStatus::AVAILABLE->value;
                $mainStock->save();
            }

            if ($model === RAFacilityRequest::class) {
                $mainFacility = RAFacility::findOrFail($thisRequest->r_a_facility_id);
                $mainFacility->availability_status = RequestStatus::AVAILABLE->value;
                $mainFacility->save();
            }

            $exists = $this->rarequestInfoModel->query()
            ->with([
                "equipment_request" => function($query) use ($restrictedStatus) {
                    $query->whereNotIn("status", $restrictedStatus);
            },
                "facility_request" => function($query) use ($restrictedStatus) {
                    $query->whereNotIn("status", $restrictedStatus);
                }
            ])
            ->whereKey($thisRequest->r_a_request_info_id)
            ->first();

            if($exists->equipment_request->isEmpty() && $exists->facility_request->isEmpty()) {
                $exists->update([
                    "status" => RequestStatus::FOR_CSM->value
                ]);
            }
        });
    }
}
