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
use Illuminate\Support\Str;

class RecreationalService
{

    private const EQUIPMENTPREFIX = "NMP-RAE";
    private const FACILITYPREFIX = "NMP-RAF";

    public function __construct(
        protected RAEquipments $raequipmentsModel,
        protected RAEquipmentStock $raequipmentStockModel,
        protected RAFacility $rafacilityModel,
        protected RAFacilityRequest $rafacilityRequestModel,
        protected RAEquipmentRequest $raequipmentRequestModel,
        protected RARequestInfo $rarequestInfoModel
    ) {}

    public function getEquipments()
    {
        return $this->raequipmentsModel->query()
            ->select(["id", "name", "additional_details", "availability_status"])
            ->withCount([
                "stocks" => function ($query) {
                    $query->available()->okayCondition();
                },
            ])
            ->with([
                "hasData" => function ($query) {
                    $query->where("status", [RequestStatus::APPROVED->value, RequestStatus::RECEIVED->value]);
                },
                "images:id,r_a_equipments_id,filename",
                "relatedFacility:id,r_a_facility_id,r_a_equipments_id",
                "relatedFacility.facility.images:id,r_a_facility_id,filename",
                "relatedFacility.facility:id,name,location,additional_details,open_time,close_time,condition_status,availability_status,unique_identifier",
                "relatedFacility.facility.hasData" => function ($query) {
                    $query->whereIn("status", [RequestStatus::APPROVED->value, RequestStatus::OCCUPIED->value]);
                }
            ])
            ->whereHas("stocks", function ($query) {
                $query->available()->okayCondition();
            })
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

        if (!empty($validated["status"])) {
            $recordsQuery->status($validated["status"]);
        }

        if (!empty($validated["traceNumber"])) {
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
                "hasData" => function ($query) {
                    $query->whereIn("status", [RequestStatus::APPROVED->value, RequestStatus::OCCUPIED->value]);
                },
                "images:id,r_a_facility_id,filename",
                "relatedEquipment:id,r_a_facility_id,r_a_equipments_id",
                "relatedEquipment.equipment.images:id,r_a_equipments_id,filename",
                "relatedEquipment.equipment.hasData" => function ($query) {
                    $query->whereIn("status", [RequestStatus::APPROVED->value, RequestStatus::RECEIVED->value]);
                },
                "relatedEquipment.equipment" => function ($q) {
                    $q->select("id", "name", "additional_details", "availability_status")
                        ->withCount([
                            "stocks as equipmentStocks" => function ($query) {
                                $query->available()->okayCondition();
                            }
                        ]);
                },
            ])
            ->available()
            ->okayCondition()
            ->get();
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


    public function prepareEquipment($validated)
    {
        $eq_id = collect($validated["data"])->filter(fn($data) => $data["type"] === "EQUIPMENT")->pluck("unique_identifier", "id");
        $equipments = $this->raequipmentsModel->query();
        $ui = $eq_id->values()->flatten()->filter()->unique();

        if ($eq_id->values()->filter()->isNotEmpty()) {
            $equipments->with([
                "stocks" => function ($query) use ($ui) {
                    $query->whereIn("unique_identifier", $ui)->available()->okayCondition();
                }
            ]);
        }

        $equipments = $equipments->select("id", "name")
            ->withCount(["stocks" => function ($query) {
                $query->available()->okayCondition();
            }])
            ->whereIn("id", $eq_id->keys())
            ->get()
            ->keyBy("id");

        $equipmentWithoutStock = $equipments->filter(function ($query) {
            return $query["stocks_count"] <= 0;
        });

        $titles = implode(", ", $equipmentWithoutStock->pluck("name")->toArray());

        if (!$equipmentWithoutStock->isEmpty()) {
            throw new DomainException(count($equipmentWithoutStock) > 1
                ? "Equipments does not have stock available. $titles"
                : "Equipment does not have stock available. $titles");
        }

        return $equipments;
    }

    public function validateFacilityRequest($info, $user_id)
    {
        $exists = $this->rafacilityRequestModel->where([
            "r_a_facility_id" => $info["id"],
            "start_date" => $info["from_datetime"],
            "end_date" => $info["to_datetime"],
        ])
            ->whereHas("requestInfo", function ($query) use ($user_id) {
                $query->forUser($user_id);
            })
            ->exists();

        if ($exists) {
            throw new DomainException("The selected facility is already reserved within the chosen time range. Please select a different schedule.");
        }
    }

    public function storeRecreationalRequests($validated)
    {
        return DB::transaction(function () use ($validated) {

            // $equipments = $this->prepareEquipment($validated);

            $types = collect($validated["data"])->unique("type")->pluck("type");
            $selectedType = match ($types->count()) {
                1 => $types->first(),
                default => 'HYBRID',
            };

            $record = $this->rarequestInfoModel->create([
                "user_id" => $validated["user_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->rarequestInfoModel, "-RAR-"),
                "request_type" => $selectedType,
                "reason" => $validated["purpose"],
            ]);

            foreach ($validated["data"] as $info) {
                if ($info["type"] === "EQUIPMENT") {
                    $this->storeEquipmentRequest($info, $record);
                } else {
                    $this->validateFacilityRequest($info, $validated["user_id"]);
                    $this->storeFacilitiesRequest($info, $record);
                }
            }
            return $record;
        });
    }

    public function storeEquipmentRequest($info, $record)
    {
        $uniqueIdentifiers = $info["UI"] ?? null;
        $data = [];
        if (!empty($uniqueIdentifiers)) {
            foreach ($uniqueIdentifiers as $unique_identifier) {
                $stock = $this->raequipmentStockModel->query()
                    ->uniqueIdentifier($unique_identifier)
                    ->available()
                    ->okayCondition()
                    ->firstOr(function () use ($unique_identifier) {
                        throw new DomainException("Selected equipment with ID {$unique_identifier} is not unavailable anymore.");
                    });

                $data[] = [
                    "r_a_request_info_id" => $record->id,
                    "r_a_equipment_stock_id" => $stock->id,
                    "r_a_equipments_id" => $info["id"],
                    "start_date" => $info["from_datetime"],
                    "end_date" => $info["to_datetime"],
                    "updated_by_whom" => auth()->id(),
                    "issued_condition" => $stock->condition_status,
                    "updated_at" => now(),
                    "created_at" => now(),
                ];
            }
        }
        if (!empty($info["quantity"])) {
            for ($default = 0; $default < $info["quantity"]; $default++) {
                $data[] = [
                    "r_a_request_info_id" => $record->id,
                    "r_a_equipment_stock_id" => null,
                    "r_a_equipments_id" => $info["id"],
                    "start_date" => $info["from_datetime"],
                    "end_date" => $info["to_datetime"],
                    "issued_condition" => null,
                    "updated_by_whom" => auth()->id(),
                    "updated_at" => now(),
                    "created_at" => now(),
                ];
            }
        }
        $this->raequipmentRequestModel->insert($data);
    }

    public function storeFacilitiesRequest($info, $record)
    {
        return DB::transaction(function () use ($info, $record) {

            $startDate = $info['from_datetime'];
            $endDate   = $info['to_datetime'];

            $facility = $this->rafacilityModel
                ->select('id', 'name', 'condition_status')
                ->whereKey($info['id'])
                ->uniqueIdentifier($info['UI'])
                ->withCount(['hasData as overlapping_count' => function ($q) use ($startDate, $endDate) {
                    $q->whereIn('status', [
                        RequestStatus::APPROVED->value,
                        RequestStatus::OCCUPIED->value
                    ])
                        ->where('start_date', '<', $endDate)
                        ->where('end_date', '>', $startDate);
                }])
                ->first();

            if (!$facility) {
                throw new DomainException("Facility not found.");
            }

            if ($facility->overlapping_count > 0) {
                throw new DomainException(
                    "The facility '{$facility->name}' is not available for the selected dates."
                );
            }

            return $this->rafacilityRequestModel->create([
                'r_a_request_info_id' => $record->id,
                'r_a_facility_id'     => $facility->id,
                'start_date'          => $startDate,
                'end_date'            => $endDate,
                'issued_condition'    => $facility->condition_status,
                'updated_by_whom' => auth()->id(),
            ]);
        });
    }

    public function checkPrefix($UIId)
    {
        if (!isset($UIId) || $UIId === false) {
            throw new DomainException("Unique identifier is required.");
        }
        $prefix = Str::of($UIId)->explode("-")->take(2)->implode("-");

        return match ($prefix) {
            self::EQUIPMENTPREFIX => $this->raequipmentStockModel,
            self::FACILITYPREFIX => $this->rafacilityModel,
            default => throw new DomainException("Invalid QR!")
        };
    }

    public function isUniqueIdenfierExistV2($validated)
    {
        $model = $this->checkPrefix($validated->UIId);
        return $model->query()->where("unique_identifier", $validated->UIId)
            ->when($model instanceof RAEquipmentStock, function ($query) {
                $query->whereRelation("equipment", "availability_status", RequestStatus::AVAILABLE->value)
                    ->withCount([
                        "siblings as stock_count" => function ($query) {
                            $query->available()
                                ->okayCondition();
                        },
                    ]);
            })
            ->available()
            ->okayCondition()
            ->firstOr(fn() => throw new DomainException(($model instanceof RAEquipmentStock ? "Equipment" : "Facility") . " not available"));
    }

    public function prepareForCancellation($record)
    {
        $restrictedStatuses = ["CANCELLED", "RECEIVED"];

        if (in_array($record->status, $restrictedStatuses)) {
            throw new DomainException("Can't cancel unit. It is already $record->status.");
        }
    }

    public function cancelRequests($validated)
    {
        DB::transaction(function () use ($validated) {

            $model = match ($validated["documentType"]) {
                'EQUIPMENT'  => RAEquipmentRequest::class,
                'FACILITY' => RAFacilityRequest::class,
                default    => throw new \Exception("Invalid document type")
            };

            $thisRequest = $model::findOrFail($validated["documentId"]);

            $this->prepareForCancellation($thisRequest);

            $thisRequest->status = "CANCELLED";
            $thisRequest->save();

            if ($model === RAEquipmentRequest::class && $thisRequest->r_a_equipment_stock_id !== null) {
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
                ->whereKey($thisRequest->r_a_request_info_id)
                ->with([
                    "equipment_request" => function ($query) {
                        $query->whereNotIn("status", RequestStatus::CompletingRecRequest());
                    },
                    "facility_request" => function ($query) {
                        $query->whereNotIn("status", RequestStatus::CompletingRecRequest());
                    }
                ])
                ->first();

            if ($exists->equipment_request->isEmpty() && $exists->facility_request->isEmpty()) {
                $exists->update([
                    "status" => RequestStatus::FOR_CSM->value
                ]);
            }
        });
    }

    public function getRecRequestCount($userId)
    {
        return $this->rarequestInfoModel->query()
            ->select(DB::raw("count(*) as status_count"), "status")
            ->forUser($userId)
            ->groupBy("status")
            ->pluck("status_count", "status");
    }
}
