<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Models\RAEquipmentRequest;
use App\Models\RARelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    RAFacilityRequest
};
use App\Http\Requests\Admin\RecreationalActivity\{
    CreateOrUpdateEquipment,
    CreateOrUpdateFacility
};
use Carbon\Carbon;
use App\Enums\Administrator\RAEnum;

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
    public function get_requested_equipments(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $raEquipmentRequests = RAEquipmentRequest::with([
                'equipment_stock'
            ])
                ->where([
                    'r_a_request_info_id' => $request->rARequestInfoId,
                    'r_a_equipments_id' => $request->rAEquipmentsId
                ])->get();

            return response()->json(['raEquipmentRequests' => $raEquipmentRequests], 200);
        });
    }

    public function Facility(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $documentId = $request->documentId;
            $documentStatus = $request->documentStatus;
            $documentRemarks = $request->documentRemarks;

            $this_facility = RAFacilityRequest::findOrFail($documentId);

            if (\in_array($this_facility->status, ["CANCELLED", "OCCUPIED", "DECLINED"])) {
                return response()->json(['message' => "Sorry your Status must be Cancelled, Occupied or Declined! "], 409);
            }

            $conflicts = RAFacilityRequest::where(function ($query) use ($request) {
                $query->where('start_date', '<=', $request->end_date)
                    ->where('end_date', '>=', $request->start_date);
            });

            if ($conflicts) {
                return response()->json(['message' => "Sorry this facility is already booked for the selected dates! "], 409);
            }

            $this_facility->status = $documentStatus;
            if ($documentRemarks) $this_facility->remarks = $documentRemarks;
            $this_facility->save();

            return response()->json([
                'message' => 'Facility updated successfully!',
                'data' => $this_facility
            ]);
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

            return response()->json(['message' => "Issued Successfully!"], 200);
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
                ? $ra_facilities_temp->where('id', $request->documentId)->with(['images', 'relationships'])->first()
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

            if ($request->data_photos) {
                $room_images = RAFacilityImage::whereNotIn('id', $request->data_photos)
                    ->where('r_a_facility_id', $request->documentId)
                    ->get();

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
                return response()->json(['message' => "Success!"], 200);
            }
        });
        /*************  ✨ Windsurf Command ⭐  *************/
        /**
         * Update of request
         * considerations [DATETIME, STATUS]
         * add return TransactionUtil::transact(null, [], function () use ($request) { });
         * $rARequestInfoId = $request->rARequestInfoId;
         * $rAEquipmentsId = $request->rAEquipmentsId;
         * $rows = $request->row; ARRAY e.g., [{
         *    rowId: 1,
         *    rowStatus: 'RECEIVED'
         *    rowRemarks: null
         * },{
         *    rowId: 2,
         *    rowStatus: 'RECEIVED'
         *    rowRemarks: "Sample Remarks"
         * }]
         */
        /*******  f64d3662-9b6f-4078-a72b-74c6124cfd73  *******/
    }

    //!
    public function get_recreational_requests(Request $request)
    {
        // lacking!
        /**
         * update of request
         * considerations [DATETIME, STATUS]
         * add return TransactionUtil::transact(null, [], function () use ($request) { });
         * $rARequestInfoId = $request->rARequestInfoId;
         * $rAEquipmentsId = $request->rAEquipmentsId;
         * $rows = $request->row; ARRAY e.g., [{
         *    rowId: 1,
         *    rowStatus: 'RECEIVED'
         *    rowRemarks: null
         * },{
         *    rowId: 2,
         *    rowStatus: 'RECEIVED'
         *    rowRemarks: "Sample Remarks"
         * }]
         */

        $request->validate([
            'rows'               => 'required|array',
            'rows.*.rowId'       => 'required|exists:ra_equipment_requests,id',
            'rows.*.rowStatus'   => 'required|in:APPROVED,REJECTED,PENDING,RECEIVED',
            'rows.*.rowRemarks'  => 'nullable|string|max:500',
        ]);


        /**
         * apply filters or considerations
         * apply date time validations
         * must use foreach loop
         */
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {

                foreach ($request->rows as $row) {


                    $requestRecord = RAEquipmentRequest::find($row['rowId']);


                    if (in_array($requestRecord->status, ['PENDING', 'APPROVED'])) {
                        $requestRecord->update([
                            'status'     => $row['rowStatus'],
                            'remarks'    => $row['rowRemarks'] ?? null,
                            'updated_at' => now(),
                        ]);
                    }
                }

                /**
                 * @var mixed
                 * useless ??
                 *
                 */
                $raRequests = RAEquipmentRequest::whereIn('status', [
                    'APPROVED',
                    'REJECTED',
                    'PENDING',
                    'RECEIVED',
                ])->latest()->get();

                return response()->json([
                    'message'    => 'uUpdated Successfully).',
                    'raRequests' => $raRequests,
                ], 200);
            }
        );
    }
    //! 

    /* public function get_recreational_requests(Request $request)
    {
        
        $request->validate([
            'rows'             => 'required|array',
            'rows.*.rowId'     => 'required|exists:ra_equipment_requests,id',
            'rows.*.rowStatus' => 'required|in:APPROVED,REJECTED,PENDING,RECEIVED',
        ]);

        return TransactionUtil::transact(null, [], function () use ($request) {

            foreach ($request->rows as $row) {

               
                $requestRecord = RAEquipmentRequest::find($row['rowId']);

                
                if ($requestRecord->status === 'PENDING') {
                    $requestRecord->update([
                        'status'     => $row['rowStatus'],
                        'updated_at' => now(),
                    ]);
                }
            }

            return response()->json([
                'message' => 'Updated Successfully).',
            ], 200);
        });
    }

//!

    /**
     * Summary of ra_equipments
     * @param Request $request
     */

    public function RACount(Request $request)
    {


        $status = ['PENDING', 'ACTIVE', 'FOR CSM', 'COMPLETED'];

        $counts = RARequestInfo::whereIn('status', $status)
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $total_count = RARequestInfo::count();

        return response()->json([
            'count_pending'  => min($counts['PENDING'] ?? 0, 99),
            'count_active' => min($counts['ACTIVE'] ?? 0, 99),
            'count_forCSM' => min($counts['FOR CSM'] ?? 0, 99),
            'count_complete' => min($counts['COMPLETED'] ?? 0, 99),
            'count_total' => min($total_count ?? 0, 99),
        ], 200);
    }


    

    public function ra_equipments(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_equipments_temp = RAEquipments::withCount('hasData', 'stocks');
            $ra_equipments = $request->rARequestInfoId
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
                return response()->json(['message' => "Success!"], 200);
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
                    'r_a_equipments_id' => $this_equipment->id
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
                return response()->json(['message' => "Success!"], 200);
            }
        });
    }
}
