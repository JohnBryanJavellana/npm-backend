<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Events\BERecreational;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RecreationalActivity\CreateEquipmentStock;
use App\Http\Requests\Admin\RecreationalActivity\RemoveEquipment;
use App\Http\Requests\Admin\RecreationalActivity\RemoveEquipmentStock;
use App\Http\Requests\Admin\RecreationalActivity\RemoveFacility;
use App\Http\Requests\Admin\RecreationalActivity\RemoveRACharge;
use App\Http\Requests\Admin\RecreationalActivity\UpdateEquipmentStock;
use App\Models\RAEquipmentRequest;
use App\Services\Administrator\Recreational\RecreationalChargeManager;
use App\Services\Administrator\Recreational\RecreationalEquipmentManager;
use App\Services\Administrator\Recreational\RecreationalEquipmentStockManager;
use App\Services\Administrator\Recreational\RecreationalFacilityManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Utils\{
    TransactionUtil,
};
use App\Models\{
    RARequestInfo,
    RAFacility,
    RAEquipments,
    RAEquipmentStock,
    RAFacilityRequest,
    RAInvoices
};
use App\Http\Requests\Admin\RecreationalActivity\{
    CreateOrUpdateEquipment,
    CreateOrUpdateFacility,
    RequestInvoice
};
use Carbon\Carbon;
use App\Enums\Administrator\RAEnum;
use App\Enums\{
    AdministratorReturnResponse
};
use App\Helpers\Administrator\General\CountCollection;

class RecreationalActivityCtrl extends Controller
{
    public function __construct(
        public RecreationalFacilityManager $recreationalFacilityManager,
        public RecreationalEquipmentManager $recreationalEquipmentManager,
        public RecreationalEquipmentStockManager $recreationalEquipmentStockManager,
        public RecreationalChargeManager $recreationalChargeManager
    ) {}

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_ra_count
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_ra_count(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
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

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_requests
     * @param Request $request
     */
    public function ra_requests(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $query = RARequestInfo::with(['requestor']);

            if ($request->status) {
                $query->whereIn('status', $request->status);
            }

            $ra_requests = $request->trace_number
                ? $query->where('trace_number', $request->trace_number)
                ->with([
                    'equipment_request.equipment',
                    'equipment_request.updatedByWhom',
                    'facility_request.facility',
                    'facility_request.updatedByWhom'
                ])
                ->get()
                ->map(function ($raReq) {
                    $grouped = $raReq->equipment_request->groupBy('r_a_equipments_id');

                    $raReq->grouped_equipment = $grouped->map(function ($items) {
                        $first = $items->first();
                        $first->requested_qty = $items->count();
                        $first->requested_issued_qty = $items->whereNotNull('r_a_equipment_stock_id')->count();
                        return $first;
                    })->values();

                    unset($raReq->equipment_request);
                    return $raReq;
                })->first()
                : $query->orderBy('created_at', 'DESC')->get();

            return response()->json(['ra_requests' => $ra_requests], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_facilities
     * @param Request $request
     */
    public function ra_facilities(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_facilities_temp = RAFacility::withCount(['hasData']);
            $ra_facilities = $request->documentId
                ? $ra_facilities_temp->where('unique_identifier', $request->documentId)->with(['images', 'relationships', 'relationships.equipment'])->first()
                : $ra_facilities_temp->get();

            return response()->json(['ra_facilities' => $ra_facilities], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_create_or_update_facility
     * @param CreateOrUpdateFacility $request
     */
    public function ra_create_or_update_facility(CreateOrUpdateFacility $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $facilityId = $request->facilityId;

            $result = $this->recreationalFacilityManager->createOrUpdate($request, $isPost, $facilityId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of ra_remove_facility
     * @param RemoveFacility $request
     * @param int $facilityId
     */
    public function ra_remove_facility(RemoveFacility $request, int $facilityId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request, $facilityId) {
            $result = $this->recreationalFacilityManager->removeFacility($facilityId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_equipments
     * @param Request $request
     */
    public function ra_equipments(Request $request): JsonResponse
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
     * Summary of ra_create_or_update_equipment
     * @param CreateOrUpdateEquipment $request
     */
    public function ra_create_or_update_equipment(CreateOrUpdateEquipment $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $equipmentId = $request->equipmentId;

            $result = $this->recreationalEquipmentManager->createOrUpdate($request, $isPost, $equipmentId);
            return response()->json([
                'message' => $result['message'],
                'returnedData' => $result['returnedData']
            ], $result['status']);
        });
    }

    /**
     * Summary of ra_remove_equipment
     * @param RemoveEquipment $request
     * @param int $equipmentId
     */
    public function ra_remove_equipment(RemoveEquipment $request, int $equipmentId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request, $equipmentId) {
            $result = $this->recreationalEquipmentManager->removeEquipment($equipmentId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_equipment_stock
     * @param Request $request
     */
    public function ra_equipment_stock(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $ra_equipment_stock = RAEquipmentStock::where('r_a_equipments_id', $request->documentId)
                ->withCount(['hasData'])
                ->get();

            return response()->json(['ra_equipment_stock' => $ra_equipment_stock], 200);
        });
    }

    /**
     * Summary of ra_equipment_create_stock
     * @param Request $request
     */
    public function ra_equipment_create_stock(CreateEquipmentStock $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $equipmentId = $request->equipmentId;
            $stockCount = $request->stockCount;

            $result = $this->recreationalEquipmentStockManager->createEquipmentStock($equipmentId, $stockCount);
            return response()->json([
                'message' => $result['message'],
                'returnedData' => $result['returnedData']
            ], $result['status']);
        });
    }

    /**
     * Summary of ra_update_equipment_stock
     * @param UpdateEquipmentStock $request
     */
    public function ra_update_equipment_stock(UpdateEquipmentStock $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $equipmentStockId = $request->equipmentStockId;

            $result = $this->recreationalEquipmentStockManager->updateEquipmentStockInfo($request, $equipmentStockId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of ra_remove_equipment_stock
     * @param RemoveEquipmentStock $request
     * @param int $equipmentStockId
     */
    public function ra_remove_equipment_stock(RemoveEquipmentStock $request, int $equipmentStockId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request, $equipmentStockId) {
            $result = $this->recreationalEquipmentStockManager->removeEquipmentStock($equipmentStockId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of ra_request_charges
     * @param Request $request
     */
    public function ra_request_charges(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $raCharges = RAInvoices::where('r_a_request_info_id', $request->raRequestInfoId)
                ->with(['orNumber'])
                ->orderBy('created_at', 'DESC')
                ->get();

            return response()->json(['ra_charges' => $raCharges], 200);
        });
    }

    /**
     * Summary of ra_create_or_update_charge
     * @param RequestInvoice $request
     */
    public function ra_create_or_update_charge(RequestInvoice $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === 'POST';
            $recreationalInvoiceId = $request->recreationalInvoiceId;

            $result = $this->recreationalChargeManager->createOrUpdate($request, $isPost, $recreationalInvoiceId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of ra_delete_charge
     * @param RemoveRACharge $request
     * @param int $recreationalInvoiceId
     */
    public function ra_delete_charge(RemoveRACharge $request, int $recreationalInvoiceId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($recreationalInvoiceId) {
            $result = $this->recreationalChargeManager->removeCharge($recreationalInvoiceId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }



    # 📍📍📍📍📍


    /**
     * Summary of get_requested_equipments
     * @param Request $request
     */
    public function get_requested_equipments(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
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
    public function update_requested_facility(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $documentId = $request->documentId;
            $documentStatus = $request->documentStatus;
            $requestInfoId = $request->requestInfoId;
            $documentRemarks = $request->documentRemarks ?? NULL;

            $this_facility = RAFacilityRequest::findOrFail($documentId);
            $this_main_facility = RAFacility::findOrFail($this_facility->r_a_facility_id);

            if (\in_array($this_facility->status, [
                RAEnum::CANCELLED->value,
                RAEnum::DECLINED->value
            ])) {
                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYREQFACILITY->value . ucfirst(strtolower($this_facility->status))], 409);
            }

            $hasDateTimeConflicts = RAFacilityRequest::where('id', '!=', $documentId)
                ->where('r_a_facility_id', $this_facility->r_a_facility_id)
                ->whereIn('status', [
                    RAEnum::APPROVED,
                    RAEnum::OCCUPIED
                ])
                ->where(function ($query) use ($this_facility) {
                    $query->where('start_date', '<', $this_facility->end_date)
                        ->where('end_date', '>', $this_facility->start_date);
                })
                ->exists();

            if ($hasDateTimeConflicts && \in_array($documentStatus, [RAEnum::APPROVED->value, RAEnum::OCCUPIED->value])) {
                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_CONFLICT_ERR_RECREATIONALACTIVITYREQFACILITY->value], 409);
            }

            $isClosing = \in_array($documentStatus, [RAEnum::DONE->value, RAEnum::DAMAGED->value]);

            $this_facility->status = $documentStatus;
            $this_facility->remarks = $documentRemarks;
            $this_facility->issued_condition = $this_main_facility->condition_status;
            $this_facility->updated_by_whom = $request->user()->id;
            $this_facility->issued_at ??= Carbon::now();
            $this_facility->returned_at = $isClosing ? Carbon::now() : $this_facility->returned_at;
            $this_facility->returned_condition = $isClosing ? ($documentStatus === RAEnum::DONE->value ? RAEnum::GOOD_CONDITION->value : $documentStatus) : $this_facility->returned_condition;
            $this_facility->save();

            if ($isClosing) {
                $this_main_facility->condition_status = $documentStatus === RAEnum::DONE->value ? RAEnum::GOOD_CONDITION->value : $documentStatus;
                $this_main_facility->save();
            }

            $this_request_info = RARequestInfo::findOrFail($this_facility->r_a_request_info_id);
            $this_request_info->status = RAFacilityRequest::where('r_a_request_info_id', $requestInfoId)->whereNotIn('status', [
                RAEnum::APPROVED,
                RAEnum::OCCUPIED,
                RAEnum::PENDING
            ])->exists() && RAEquipmentRequest::where('r_a_request_info_id', $requestInfoId)->whereNotIn('status', [
                RAEnum::ACTIVE,
                RAEnum::RECEIVED,
                RAEnum::PENDING
            ])->exists() ? RAEnum::FOR_CSM : RAEnum::ACTIVE;
            $this_request_info->save();

            return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYREQFACILITY->value]);
        });
    }

    /**
     * Summary of get_requested_match_equipments
     * @param Request $request
     */
    public function get_requested_match_equipments(Request $request): JsonResponse
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
    public function issue_requested_equipments(Request $request): JsonResponse
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

            if (env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYREQEQUIPMENT->value], 200);
        });
    }

    /**
     * Summary of update_requested_equipment
     * @param Request $request
     */
    public function update_requested_equipment(Request $request): JsonResponse
    {
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
                    ->where(function ($query) use ($equipment) {
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

                if (\in_array($equipment->status, $terminalStatuses)) {
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

            $failCount = \count($summary['failed_items']);
            $successCount = \count($summary['success_ids']);

            if ($failCount > 0) {
                $errorDetails = array_map(function ($item) {
                    return "ID {$item['id']} ({$item['reason']})";
                }, $summary['failed_items']);

                return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYREQEQUIPMENT->value . implode(', ', $errorDetails)], 207);
            }

            if (env('USE_EVENT')) {
                event(
                    new BERecreational('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYREQEQUIPMENT->value], 200);
        });
    }
}
