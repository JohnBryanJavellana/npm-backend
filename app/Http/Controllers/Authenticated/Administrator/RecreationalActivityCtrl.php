<?php

namespace App\Http\Controllers\Authenticated\Administrator;
use App\Http\Requests\Admin\Library\RequestInvoice;

use App\Events\BERecreational;
use App\Http\Controllers\Controller;
use App\Models\RAEquipmentRequest;
use App\Models\RARelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Utils\{
    TransactionUtil,
    AuditHelper,
    GenerateTrace,
    ConvertToBase64
};
use App\Models\{
    RARequestInfo,
    RAFacility,
    RAEquipments,
    RAEquipmentStock,
    RAEquipmentImage,
    RAFacilityImage,
    RAFacilityRequest,
    RAInvoices
};
use App\Http\Requests\Admin\RecreationalActivity\{
    CreateOrUpdateEquipment,
    CreateOrUpdateFacility
};
use Carbon\Carbon;
use App\Enums\Administrator\RAEnum;
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};
use App\Helpers\Administrator\General\CountCollection;

class RecreationalActivityCtrl extends Controller
{
    /**
     * Summary of ra_requests
     * @param Request $request
     */
    public function ra_requests(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $query = RARequestInfo::with(['requestor']);

            if ($request->status) {
                $query->whereIn('status', $request->status);
            }

            if ($request->trace_number) {
                $ra_requests = $query->where('trace_number', $request->trace_number)
                    ->with([
                        'equipment_request.equipment',
                        'equipment_request.updatedByWhom',
                        'facility_request.facility',
                        'facility_request.updatedByWhom'
                    ])
                    ->get()
                    ->map(function ($request) {
                        $grouped = $request->equipment_request->groupBy('r_a_equipments_id');

                        $request->grouped_equipment = $grouped->map(function ($items) {
                            $first = $items->first();
                            $first->requested_qty = $items->count();
                            $first->requested_issued_qty = $items->whereNotNull('r_a_equipment_stock_id')->count();
                            return $first;
                        })->values();

                        unset($request->equipment_request);
                        return $request;
                    })
                    ->first();
            } else {
                $ra_requests = $query->orderBy('created_at', 'DESC')->get();
            }

            return response()->json(['ra_requests' => $ra_requests], 200);
        });
    }

    /**
     * Summary of get_requested_equipments
     * @param Request $request
     */
    public function get_requested_equipments(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $raEquipmentRequests_temp = RAEquipmentRequest::with([
                'equipment_stock',
                'equipment'
            ])
            ->where([
                'r_a_request_info_id' => $request->rARequestInfoId,
                'r_a_equipments_id' => $request->rAEquipmentsId
            ]);

            $raEquipmentRequests = $request->status
                ? $raEquipmentRequests_temp->whereIn('status', $request->status)->get()
                : $raEquipmentRequests_temp->get();

            return response()->json(['raEquipmentRequests' => $raEquipmentRequests], 200);
        });
    }

    /**
     * Summary of update_requested_facility
     * @param Request $request
     */
    public function update_requested_facility(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $documentId = $request->documentId;
            $documentStatus = $request->documentStatus;
            $requestInfoId = $request->requestInfoId;
            $documentRemarks = $request->documentRemarks ?? NULL;

            $this_facility = RAFacilityRequest::findOrFail($documentId);
            $this_main_facility = RAFacility::findOrFail($this_facility->r_a_facility_id);

            if(\in_array($this_facility->status, [
                RAEnum::CANCELLED->value,
                RAEnum::DECLINED->value
            ])) {
                return response()->json(['message' => "Sorry your status is already " . ucfirst(strtolower($this_facility->status))], 409);
            }

            $hasDateTimeConflicts = RAFacilityRequest::where('id', '!=', $documentId)
                ->where('r_a_facility_id', $this_facility->r_a_facility_id)
                ->whereIn('status', [
                    RAEnum::APPROVED,
                    RAEnum::OCCUPIED
                ])
                ->where(function($query) use ($this_facility) {
                    $query->where('start_date', '<', $this_facility->end_date)
                          ->where('end_date', '>', $this_facility->start_date);
                })
                ->exists();

            if ($hasDateTimeConflicts && \in_array($documentStatus, [RAEnum::APPROVED->value, RAEnum::OCCUPIED->value])) {
                return response()->json(['message' => "Scheduling conflict detected. This facility is already booked for the selected time range."], 409);
            }

            $isClosing = \in_array($documentStatus, [RAEnum::DONE->value, RAEnum::DAMAGED->value]);

            $this_facility->status = $documentStatus;
            $this_facility->remarks = $documentRemarks;
            $this_facility->issued_condition = $this_main_facility->condition_status;
            $this_facility->updated_by_whom = $request->user()->id;
            $this_facility->issued_at = $this_facility->issued_at ?? Carbon::now();
            $this_facility->returned_at = $isClosing ? Carbon::now() : $this_facility->returned_at;
            $this_facility->returned_condition = $isClosing ? ($documentStatus === RAEnum::DONE->value ? RAEnum::GOOD_CONDITION->value : $documentStatus) : $this_facility->returned_condition;
            $this_facility->save();

            if($isClosing) {
                $this_main_facility->condition_status = $documentStatus === RAEnum::DONE->value ? RAEnum::GOOD_CONDITION->value : $documentStatus;
                $this_main_facility->save();
            }

            $this_request_info = RARequestInfo::findOrFail($this_facility->r_a_request_info_id);
            $this_request_info->status = RAFacilityRequest::where('r_a_request_info_id', $requestInfoId)->whereNotIn('status', [
                RAEnum::APPROVED,
                RAEnum::OCCUPIED,
                RAEnum::PENDING
            ])->exists() || RAEquipmentRequest::where('r_a_request_info_id', $requestInfoId)->whereNotIn('status', [
                RAEnum::ACTIVE,
                RAEnum::RECEIVED,
                RAEnum::PENDING
            ])->exists() ? RAEnum::FOR_CSM : RAEnum::ACTIVE;
            $this_request_info->save();

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json(['message' => 'Issued Successfully!']);
        });
    }

    /**
     * Summary of get_requested_match_equipments
     * @param Request $request
     */
    public function get_requested_match_equipments(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $raEquipmentMainFromRequests = RAEquipmentStock::where([
                'r_a_equipments_id' => $request->rAEquipmentsId
            ])->get();

            return response()->json(['raEquipmentMainFromRequests' => $raEquipmentMainFromRequests], 200);
        });
    }

    /**
     * Summary of issue_requested_equipments
     * @param Request $request
     */
    public function issue_requested_equipments(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $rARequestInfoId = $request->rARequestInfoId;
            $rAEquipmentsId = $request->rAEquipmentsId;
            $selectedRows = $request->row;

            $rARequestInfo = RARequestInfo::findOrFail($rARequestInfoId);
            $rARequestInfo->status = RAEnum::ACTIVE;
            $rARequestInfo->save();

            $ids = collect($selectedRows)
                ->pluck('rowEquipmentRequestId')
                ->unique()
                ->toArray();

            foreach ($selectedRows as $rows) {
                $getNotInCurrent = RAEquipmentRequest::whereNotIn('id', $ids)
                    ->where([
                        'r_a_request_info_id' => $rARequestInfoId,
                        'r_a_equipments_id' => $rAEquipmentsId
                    ])->get();

                if ($getNotInCurrent) {
                    foreach ($getNotInCurrent as $notInCurrents) {
                        $thisNotInCurrent = RAEquipmentRequest::findOrFail($notInCurrents->id);

                        if (!\in_array($thisNotInCurrent->status, [
                            RAEnum::CANCELLED->value,
                            RAEnum::RECEIVED->value,
                            RAEnum::PENDING->value,
                            RAEnum::RETURNED->value
                        ])) {
                            $thisNotInCurrent->status = RAEnum::PENDING;
                            $thisNotInCurrent->remarks = NULL;
                            $thisNotInCurrent->issued_condition = NULL;
                            $thisNotInCurrent->issued_at = NULL;
                            $thisNotInCurrent->updated_by_whom = NULL;

                            $mainEquipmentStock = RAEquipmentStock::findOrFail($thisNotInCurrent->r_a_equipment_stock_id);
                            $mainEquipmentStock->availability_status = RAEnum::AVAILABLE;
                            $mainEquipmentStock->save();

                            $thisNotInCurrent->r_a_equipment_stock_id = NULL;
                            $thisNotInCurrent->save();
                        }
                    }
                }

                $rAEquipments = RAEquipmentRequest::findOrFail($rows['rowEquipmentRequestId']);

                if (!\in_array($rAEquipments->status, [
                    RAEnum::CANCELLED->value,
                    RAEnum::RECEIVED->value,
                    RAEnum::RETURNED->value
                ])) {
                    $mainEquipmentStock = RAEquipmentStock::findOrFail($rows['rowId']);
                    $mainEquipmentStock->availability_status = RAEnum::UNAVAILABLE;
                    $mainEquipmentStock->save();

                    $rAEquipments->r_a_equipment_stock_id = $rows['rowId'];
                    $rAEquipments->remarks = $rows['remarks'] ?? NULL;
                    $rAEquipments->issued_condition = $mainEquipmentStock->condition_status;
                    $rAEquipments->issued_at = Carbon::now();
                    $rAEquipments->status = RAEnum::APPROVED;
                    $rAEquipments->updated_by_whom = $request->user()->id;
                    $rAEquipments->save();
                }
            };

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json(['message' => "Issued Successfully!"], 200);
        });
    }

    /**
     * Summary of update_requested_equipment
     * @param Request $request
     */
    public function update_requested_equipment(Request $request){
        return TransactionUtil::transact(null, [], function () use ($request) {
            $selectedRows = $request->row;
            $summary = [
                'success_ids' => [],
                'failed_items' => []
            ];

            foreach ($selectedRows as $row) {
                $requestId = $row['rowEquipmentRequestId'];
                $equipment = RAEquipmentRequest::find($requestId);

                if (!$equipment) {
                    $summary['failed_items'][] = ['id' => $requestId, 'reason' => 'Not found'];
                    continue;
                }

                $hasDateTimeConflicts = RAEquipmentRequest::where('id', '!=', $requestId)
                    ->where('r_a_equipments_id', $row['rowId'])
                    ->whereIn('status', [RAEnum::APPROVED, RAEnum::RECEIVED])
                    ->where(function($query) use ($equipment) {
                        $query->where('start_date', '<', $equipment->end_date)
                              ->where('end_date', '>', $equipment->start_date);
                    })
                    ->exists();

                if ($hasDateTimeConflicts) {
                    $summary['failed_items'][] = ['id' => $requestId, 'reason' => 'Schedule conflict'];
                    continue;
                }

                $terminalStatuses = [
                    RAEnum::CANCELLED->value,
                    RAEnum::RECEIVED->value,
                    RAEnum::RETURNED->value
                ];

                if (in_array($equipment->status, $terminalStatuses)) {
                    $summary['failed_items'][] = ['id' => $requestId, 'reason' => 'Already in terminal state'];
                    continue;
                }

                try {
                    $mainStock = RAEquipmentStock::findOrFail($row['rowId']);
                    $mainStock->availability_status = RAEnum::UNAVAILABLE;
                    $mainStock->save();

                    $equipment->status = $row['rowStatus'];
                    $equipment->remarks = $row['rowRemarks'] ?? null;
                    $equipment->updated_by_whom = $request->user()->id;
                    $equipment->save();

                    $summary['success_ids'][] = $requestId;
                } catch (\Exception $e) {
                    $summary['failed_items'][] = ['id' => $requestId, 'reason' => 'System error during save'];
                }
            }

            $failCount = count($summary['failed_items']);
            $successCount = count($summary['success_ids']);

            if ($failCount > 0) {
                $errorDetails = array_map(function($item) {
                    return "ID {$item['id']} ({$item['reason']})";
                }, $summary['failed_items']);

                return response()->json(['message' => "Update partially completed. $successCount successful, $failCount failed. Summary: " . implode(', ', $errorDetails)], 207);
            }

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json(['message' => "All items updated successfully!"], 200);
        });
    }

    /**
     * Summary of ra_facilities
     * @param Request $request
     */
    public function ra_facilities(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_facilities_temp = RAFacility::withCount(['hasData']);
            $ra_facilities = $request->documentId
                ? $ra_facilities_temp->where('unique_identifier', $request->documentId)->with([
                    'images',
                    'relationships',
                    'relationships.equipment'
                ])->first()
                : $ra_facilities_temp->get();

            return response()->json(['ra_facilities' => $ra_facilities], 200);
        });
    }

    /**
     * Summary of ra_create_or_update_facility
     * @param CreateOrUpdateFacility $request
     */
    public function ra_create_or_update_facility(CreateOrUpdateFacility $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $this_facility = $isPost ? new RAFacility() : RAFacility::findOrFail($documentId);
            if($isPost) $this_facility->unique_identifier = GenerateTrace::createTraceNumber(RAFacility::class, '-RAF-', 'unique_identifier', 10, 99);
            $this_facility->name = $request->name;
            $this_facility->additional_details = $request->additionalDetails;
            $this_facility->location = $request->location;
            $this_facility->open_time = $request->openTime;
            $this_facility->close_time = $request->closeTime;
            $this_facility->condition_status = $request->conditionStatus;
            if ($request->availabilityStatus) $this_facility->availability_status = $request->availabilityStatus;
            $this_facility->save();

            if ($request->related_equipment) {
                foreach ($request->related_equipment as $equipment) {
                    $checkExistence = RARelationship::where([
                        'r_a_facility_id' => $this_facility->id,
                        'r_a_equipments_id' => $equipment
                    ])->count();

                    if ($checkExistence <= 0) {
                        $relationship = new RARelationship();
                        $relationship->r_a_facility_id = $this_facility->id;
                        $relationship->r_a_equipments_id = $equipment;
                        $relationship->save();
                    }
                }
            }

            $dataPhotos = $request->input('data_photos', []);
            $room_images = RAFacilityImage::whereNotIn('id', $dataPhotos)
                ->where('r_a_facility_id', $request->documentId)
                ->get();

            if($room_images->isNotEmpty()) {
                foreach ($room_images as $item) {
                    if (file_exists(public_path('recreational-activity/facility/image/' . $item->filename))) {
                        unlink(public_path('recreational-activity/facility/image/' . $item->filename));
                    }

                    $item->delete();
                }
            }

            if ($request->photos) {
                foreach ($request->photos as $photos) {
                    $image_name = Str::uuid() . '.png';

                    $photo = new RAFacilityImage();
                    $photo->r_a_facility_id = $this_facility->id;
                    $photo->filename = $image_name;
                    $photo->save();

                    ConvertToBase64::generate($photos, 'image', "recreational-activity/facility/image/$image_name");
                }
            }

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            AuditHelper::log($request->user()->id, ($isPost ? 'Created' : 'Updated') . " an facility. ID#" . $this_facility->id);
            return response()->json(['message' => "Success!"], 200);
        });
    }

    /**
     * Summary of ra_remove_facility
     * @param Request $request
     */
    public function ra_remove_facility(Request $request, int $facility_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $facility_id) {
            $this_facility = RAFacility::where('id', $facility_id)
                ->with(['images'])
                ->withCount(['hasData'])
                ->first();

            if ($this_facility->has_data_count > 0) {
                return response()->json(['message' => "Can't remove facility. It already has connected data."], 409);
            } else {
                foreach ($this_facility->images as $images) {
                    if (file_exists(public_path('recreational-activity/facility/image/' . $images->filename))) {
                        unlink(public_path('recreational-activity/facility/image/' . $images->filename));
                    }
                }

                $this_facility->delete();
                AuditHelper::log($request->user()->id, "Removed an facility. ID#$facility_id");

                if(env('USE_EVENT')) {
                    event(
                        new BERecreational('')
                    );
                }
                return response()->json(['message' => "Success!"], 200);
            }
        });
    }

    /**
     * Summary of get_ra_count
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_ra_count(Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = RARequestInfo::query();

            $count = [
                'count_total'    => CountCollection::startCount($reservations),
                'count_active'   => CountCollection::startCount($reservations->clone()->where('status', RAEnum::ACTIVE)),
                'count_forCSM'   => CountCollection::startCount($reservations->clone()->where('status', RAEnum::FOR_CSM)),
                'count_complete' => CountCollection::startCount($reservations->clone()->where('status', RAEnum::COMPLETED)),
                'count_pending'  => CountCollection::startCount($reservations->clone()->where('status', RAEnum::PENDING)),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    /**
     * Summary of ra_equipments
     * @param Request $request
     */
    public function ra_equipments(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_equipments_temp = RAEquipments::withCount('hasData', 'stocks');
            $ra_equipments = $request->documentId
                ? $ra_equipments_temp->where('id', $request->documentId)->with(['images'])->first()
                : $ra_equipments_temp->get();

            return response()->json(['ra_equipments' => $ra_equipments], 200);
        });
    }

    /**
     * Summary of ra_equipment_stock
     * @param Request $request
     */
    public function ra_equipment_stock(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_equipment_stock = RAEquipmentStock::where('r_a_equipments_id', $request->documentId)
                ->withCount(['hasData'])
                ->get();

            return response()->json(['ra_equipment_stock' => $ra_equipment_stock], 200);
        });
    }

    /**
     * Summary of ra_remove_equipment_stock
     * @param bool auditActions === FALSE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     * @param int $equipment_stock_id
     */
    public function ra_remove_equipment_stock(Request $request, int $equipment_stock_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $equipment_stock_id) {
            $this_equipment_stock = RAEquipmentStock::where('id', $equipment_stock_id)
                ->withCount(['hasData'])
                ->first();

            if ($this_equipment_stock->has_data_count > 0) {
                return response()->json(['message' => "Can't remove equipment stock. It already has connected data."], 409);
            } else {
                $this_equipment_stock->delete();
                AuditHelper::log($request->user()->id, "Removed an equipment stock. ID#$equipment_stock_id");

                if(env('USE_EVENT')) {
                    event(
                        new BERecreational('')
                    );
                }
                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIPSTCK->value], 200);
            }
        });
    }

    /**
     * Summary of ra_update_equipment_stock
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     */
    public function ra_update_equipment_stock(Request $request) {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $documentId = $request->documentId;
            $conditionStatus = $request->conditionStatus;
            $availabilityStatus = $request->availabilityStatus;

            $this_equipment_stock = RAEquipmentStock::where('id', $documentId)
                ->lockForUpdate()
                ->first();

            if (!$this_equipment_stock) {
                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_UPDATED_RECREATIONALACTIVITYEQUIPSTCK->value], 409);
            } else {
                $this_equipment_stock->condition_status = $conditionStatus;
                $this_equipment_stock->availability_status = $availabilityStatus;
                $this_equipment_stock->save();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUPSTCK->value . " ID#$documentId"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BERecreational('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUIPSTCK->value], 200);
            }
        });
    }

    /**
     * Summary of ra_create_or_update_equipment
     * @param CreateOrUpdateEquipment $request
     */
    public function ra_create_or_update_equipment(CreateOrUpdateEquipment $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $this_equipment = $isPost ? new RAEquipments() : RAEquipments::findOrFail($documentId);
            $this_equipment->name = $request->name;
            $this_equipment->additional_details = $request->additionalDetails;
            if ($request->status) $this_equipment->availability_status = $request->status;
            $this_equipment->save();

            $dataToReturn = [];
            if ($request->copies) {
                $request->merge([
                    'insideJob' => true,
                    'documentId' => $this_equipment->id
                ]);

                $dataToReturn = $this->ra_equipment_create_stock($request);
            }

            if ($request->data_photos) {
                $room_images = RAEquipmentImage::whereNotIn('id', $request->data_photos)
                    ->where('r_a_equipments_id', $request->documentId)
                    ->get();

                foreach ($room_images as $item) {
                    if (file_exists(public_path('recreational-activity/inventory/image/' . $item->filename))) {
                        unlink(public_path('recreational-activity/inventory/image/' . $item->filename));
                    }

                    $item->delete();
                }
            }

            if ($request->photos) {
                foreach ($request->photos as $photos) {
                    $image_name = Str::uuid() . '.png';

                    $photo = new RAEquipmentImage();
                    $photo->r_a_equipments_id = $this_equipment->id;
                    $photo->filename = $image_name;
                    $photo->save();

                    ConvertToBase64::generate($photos, 'image', "recreational-activity/equipment/image/$image_name");
                }
            }

            AuditHelper::log($request->user()->id, ($isPost ? 'Created' : 'Updated') . " an equipment. ID#" . $this_equipment->id);

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json([
                'message' => "Success!",
                'returnedData' => $dataToReturn
            ], 200);
        });
    }

    /**
     * Summary of ra_equipment_create_stock
     * @param Request $request
     */
    public function ra_equipment_create_stock(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $stockData = [];

            if ($request->copies) {
                for ($i = 0; $i < $request->copies; $i++) {
                    $new_equipment_stock_ui = GenerateTrace::createTraceNumber(RAEquipmentStock::class, '-RAE-', 'unique_identifier', 10, 99);

                    $book_copy = new RAEquipmentStock;
                    $book_copy->unique_identifier = $new_equipment_stock_ui;
                    $book_copy->r_a_equipments_id = $request->documentId;
                    $book_copy->save();

                    array_push($stockData, $new_equipment_stock_ui);
                }
            }

            if(env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return $request->insideJob ? $stockData : response()->json([
                'message' => "You've added an equipment stock",
                'returnedData' => $stockData
            ], 201);
        });
    }

    /**
     * Summary of ra_remove_equipment
     * @param Request $request
     */
    public function ra_remove_equipment(Request $request, int $equipment_id)
    {
        return TransactionUtil::transact(null, [], function () use ($request, $equipment_id) {
            $this_equipment = RAEquipments::where('id', $equipment_id)
                ->with(['images'])
                ->withCount(['hasData'])
                ->first();

            if ($this_equipment->has_data_count > 0) {
                return response()->json(['message' => "Can't remove equipment. It already has connected data."], 409);
            } else {
                foreach ($this_equipment->images as $images) {
                    if (file_exists(public_path('recreational-activity/equipment/image/' . $images->filename))) {
                        unlink(public_path('recreational-activity/equipment/image/' . $images->filename));
                    }
                }

                $this_equipment->delete();
                AuditHelper::log($request->user()->id, "Removed an equipment. ID#$equipment_id");

                if(env('USE_EVENT')) {
                    event(
                        new BERecreational('')
                    );
                }
                return response()->json(['message' => "Success!"], 200);
                //OK TANAN
            }
        });
    }

    /**
     * Summary of ra_request_charges
     * @param Request $request
     */
    public function ra_request_charges(Request $request){
        $request->validate([
            'raRequestInfoId' => ['required', 'integer'],]);

        return TransactionUtil::transact(null, [], function () use($request) {
            $raCharges = RAInvoices::where('r_a_request_info_id', $request->raRequestInfoId)
                ->orderBy('created_at', 'DESC')
                ->get();
        
            return response()->json(['ra_charges' => $raCharges], 200);
        });
    }
    /**
     * Summary of ra_create_or_update_charge
     * @param Request $request  
     */
      public function ra_create_or_update_charge(RequestInvoice $request)
{
    $isPost = $request->httpMethod === 'POST';

    return TransactionUtil::transact(null, [], function () use ($request, $isPost) {

        $this_charge = $isPost
            ? new RAInvoices()
            : RAInvoices::findOrFail($request->documentId);

        if (!$isPost && in_array($this_charge->invoice_status, [
            RAEnum::CANCELLED,
            RAEnum::PAID
        ])) {
            return response()->json([
                'message' => "We're sorry. You can't update this charge for the moment."
            ], 409);
        }

        $this_charge->r_a_request_info_id = $request->r_a_request_info_id;

        if ($isPost) {
            $this_charge->trace_number = GenerateTrace::createTraceNumber(
                RAInvoices::class,
                '-RAINV-'
            );
            $this_charge->invoice_status = 'PENDING';
        }

        $this_charge->user_id = $request->userId;
        $this_charge->description = $request->description;
        $this_charge->invoice_amount = $request->invoiceAmount;

        if (!$isPost) {
            $this_charge->invoice_status = $request->status;
        }

        $this_charge->save();

        AuditHelper::log(
            $request->user()->id,
            ($isPost ? 'Created' : 'Updated') . " a charge. ID#{$this_charge->id}"
        );

        return response()->json([
            'message' => ($isPost ? 'created' : 'updated') . " a charge. ID#{$this_charge->id}"
        ], 200);
    });
}
    /**
     * Summary of ra_delete_charge
     * @param Request $request
     * @param mixed $id
     */
        public function ra_delete_charge(Request $request, $id)
    {
        $request->validate([
            'id' => ['integer']
        ]);

        return TransactionUtil::transact(null, [], function () use ($request, $id) {
            $raInvoice = RAInvoices::findOrFail($id);

            if (in_array($raInvoice->invoice_status, [RAEnum::PAID, RAEnum::CANCELLED])) {
                return response()->json([
                    'message' => "We're sorry. You can't delete this charge for the moment."
                ], 409);
            }

            $raInvoice->delete();

            AuditHelper::log(
                $request->user()->id,
                "Deleted RA Invoice ID#$id"
            );

            return response()->json([
                'message' => "RA Invoice ID#$id has been deleted successfully."
            ], 200);
        });
    }
}
