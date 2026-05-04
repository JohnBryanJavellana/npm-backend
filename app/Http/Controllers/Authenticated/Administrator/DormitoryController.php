<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\{
    AdministratorReturnResponse
};
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dormitory\CreateInventoryStock;
use App\Http\Requests\Admin\Dormitory\CreateOrUpdateDormitoryCharge;
use App\Http\Requests\Admin\Dormitory\CreateOrUpdateDormitoryRoom;
use App\Http\Requests\Admin\Dormitory\CreateOrUpdateInventory;
use App\Http\Requests\Admin\Dormitory\GetCurrentTenantInfo;
use App\Http\Requests\Admin\Dormitory\GetDormitoryInventoryStockRequest;
use App\Http\Requests\Admin\Dormitory\GetGuestCharge;
use App\Http\Requests\Admin\Dormitory\GetMatchRooms;
use App\Http\Requests\Admin\Dormitory\NewRoomReservation;
use App\Http\Requests\Admin\Dormitory\RemoveInventoryRequest;
use App\Http\Requests\Admin\Dormitory\RemoveInventoryStock;
use App\Http\Requests\Admin\Dormitory\SetOffsetDate;
use App\Http\Requests\Admin\Dormitory\SetRoomReservationAsReserved;
use App\Http\Requests\Admin\Dormitory\SetServiceRequestAsAction;
use App\Http\Requests\Admin\Dormitory\UpdateExtensionRequest;
use App\Http\Requests\Admin\Dormitory\UpdateInclusionRequest;
use App\Http\Requests\Admin\Dormitory\UpdateInventoryStock;
use App\Http\Requests\Admin\Dormitory\UpdateTransferRequest;
use App\Models\DormitoryExtensionRequest;
use App\Models\DormitoryInclusionRequest;
use App\Models\DormitoryInventoryItem;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryReqService;
use App\Models\DormitoryTransfer;
use App\Services\Administrator\Dormitory\DormitoryExtensionManager;
use App\Services\Administrator\Dormitory\DormitoryInclusionManager;
use App\Services\Administrator\Dormitory\DormitoryInventoryManager;
use App\Services\Administrator\Dormitory\DormitoryInventoryStockManager;
use App\Services\Administrator\Dormitory\DormitoryInvoiceManager;
use App\Services\Administrator\Dormitory\DormitoryOffsetManager;
use App\Services\Administrator\Dormitory\DormitoryRoomManager;
use App\Services\Administrator\Dormitory\DormitoryRoomReservationManager;
use App\Services\Administrator\Dormitory\DormitoryServiceManager;
use App\Services\Administrator\Dormitory\DormitoryServiceRequestManager;
use App\Services\Administrator\Dormitory\DormitoryTransferManager;
use Illuminate\Http\JsonResponse;
use App\Enums\Administrator\DormitoryEnum;
use App\Http\Requests\Admin\Dormitory\{
    CreateOrUpdateService,
    CreateServiceReq,
};
use Illuminate\Http\Request;
use App\Utils\{
    TransactionUtil,
};
use App\Models\{
    DormitoryRoom,
    DormitoryTenant,
    DormitoryInventory,
    DormitoryService
};
use App\Helpers\Administrator\General\CountCollection;
use Symfony\Component\HttpFoundation\Response;

class DormitoryController extends Controller
{
    public function __construct(
        public Cashier $cashierCtrl,
        public DormitoryServiceManager $dormitoryServiceManager,
        public DormitoryRoomManager $dormitoryRoomManager,
        public DormitoryRoomReservationManager $dormitoryRoomReservationManager,
        public DormitoryServiceRequestManager $dormitoryServiceRequestManager,
        public DormitoryInventoryManager $dormitoryInventoryManager,
        public DormitoryInventoryStockManager $dormitoryInventoryStockManager,
        public DormitoryInclusionManager $dormitoryInclusionManager,
        public DormitoryExtensionManager $dormitoryExtensionManager,
        public DormitoryTransferManager $dormitoryTransferManager,
        public DormitoryInvoiceManager $dormitoryInvoiceManager,
        public DormitoryOffsetManager $dormitoryOffsetManager
    ) {}

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of count_dorm_reservation
     * @param Request $request
     */
    public function count_dorm_reservation (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = DormitoryTenant::query();

            // if status filter is provided, apply the filter to the query
            $count = [
                'total' => CountCollection::startCount($reservations),
                'pending' => CountCollection::startCount($reservations->clone()->where('tenant_status', DormitoryEnum::PENDING->value)),
                'paid' => CountCollection::startCount($reservations->clone()->where('tenant_status', DormitoryEnum::PAID->value)),
                'processing_payment' => CountCollection::startCount($reservations->clone()->where('tenant_status', DormitoryEnum::PROCESSING_PAYMENT->value)),
                'approved' => CountCollection::startCount($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::APPROVED->value, DormitoryEnum::RESERVED->value])),
                'active' => CountCollection::startCount($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::ACTIVE->value, DormitoryEnum::FOR_PAYMENT->value, DormitoryEnum::PAID->value, DormitoryEnum::PROCESSING_PAYMENT->value])),
                'extending' => CountCollection::startCount($reservations->clone()->where('tenant_status', DormitoryEnum::EXTENDING->value)),
                'settled' => CountCollection::startCount($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::CANCELLED->value, DormitoryEnum::REJECTED->value, DormitoryEnum::TERMINATED->value])),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of count_service_requests
     * @param Request $request
     */
    public function count_service_requests (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $serviceRequests = DormitoryReqService::query();

            // if status filter is provided, apply the filter to the query
            $count = [
                'total' => CountCollection::startCount($serviceRequests),
                'pending' => CountCollection::startCount($serviceRequests->clone()->where('status', DormitoryEnum::PENDING->value)),
                'paid' => CountCollection::startCount($serviceRequests->clone()->where('status', DormitoryEnum::PAID->value)),
                'for_payment' => CountCollection::startCount($serviceRequests->clone()->where('status', DormitoryEnum::FOR_PAYMENT->value)),
                'processing_payment' => CountCollection::startCount($serviceRequests->clone()->where('status', DormitoryEnum::PROCESSING_PAYMENT->value)),
                'approved' => CountCollection::startCount($serviceRequests->clone()->whereIn('status', [DormitoryEnum::APPROVED->value])),
                'done' => CountCollection::startCount($serviceRequests->clone()->whereIn('status', [DormitoryEnum::DONE->value])),
                'declined' => CountCollection::startCount($serviceRequests->clone()->whereIn('status', [DormitoryEnum::CANCELLED->value, DormitoryEnum::DECLINED->value])),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dormitory_rooms
     * @param Request $request
     */
    public function get_dormitory_rooms(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $pageCounter = $request->pageCounter ?? 10;
            $q = $request->q;

            $paginatedRooms = DormitoryRoom::withCount(['hasData'])
                ->when($q, fn($query) => $query->where("room_name", "LIKE", "%{$q}%")
                    ->orWhere("dormitory", "LIKE", "%{$q}%")
                    ->orWhere("room_type", "LIKE", "%{$q}%")
                    ->orWhere("accommodation", "LIKE", "%{$q}%")
                )
                ->orderBy('wing')
                ->orderBy('floor')
                ->paginate($pageCounter);

            $paginatedRooms->setCollection(
                $paginatedRooms->getCollection()->groupBy(function($item) {
                    return "Wing {$item->wing} - Floor {$item->floor}";
                })
            );

            $room_managements = $paginatedRooms;

            return response()->json(['room_managements' => $room_managements], 200);
        });
    }

    /**
     * Summary of create_or_update_room
     * @param Request $request
     */
    public function create_or_update_room(CreateOrUpdateDormitoryRoom $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $result = $this->dormitoryRoomManager->createOrUpdate($request, $isPost);

            return response()->json([
                'message' => $isPost
                    ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORY->value
                    : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#$result->id"
            ], 201);
        });
    }

    /**
     * Summary of remove_room
     * @param Request $request
     * @param int $roomId
     */
    public function remove_room (Request $request, int $roomId): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request, $roomId) {
            $result = $this->dormitoryRoomManager->removeRoom($request->user()->id, $roomId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of services
     * @param Request $request
     */
    public function services (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $services = DormitoryService::withCount('requestedService')->get();
            return response()->json(['services' => $services], 200);
        });
    }

    /**
     * Summary of create_or_update_service
     * @param CreateOrUpdateService $request
     */
    public function create_or_update_service (CreateOrUpdateService $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $this_service = $this->dormitoryServiceManager->createOrUpdate($request, $isPost);

            return response()->json(['message' => (
                $isPost
                    ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYSERVICE->value
                    : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSERVICE->value) . "ID# " . $this_service->id
            ], 201);
        });
    }

    /**
     * Summary of remove_service
     * @param Request $request
     * @param int $service_id
     */
    public function remove_service (Request $request, int $service_id): JsonResponse
    {
        return TransactionUtil::transact(null, [], function () use ($request, $service_id) {
            $result = $this->dormitoryServiceManager->removeService($request->user()->id, $service_id);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of room_reservations
     * @param Request $request
     */
    public function room_reservations (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $room_reservations = DormitoryTenant::with(['boarder', 'dormitory_room', 'coupleSupportingDocuments', 'latestActiveExtendRequest'])
                ->when($request->tenantStatus, fn($query, $status) => $query->whereIn('tenant_status', (array) $status))
                ->latest()
                ->get();

            return response()->json(['room_reservations' => $room_reservations], 200);
        });
    }

    /**
     * Summary of set_as_reserved
     * @param SetRoomReservationAsReserved $request
     */
    public function set_as_reserved(SetRoomReservationAsReserved $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $result = $this->dormitoryRoomReservationManager->setAsReserved($request->roomReservationId, $request->status);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of new_room_reservation
     * @param NewRoomReservation $request
     */
    public function new_room_reservation (NewRoomReservation $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $isPost = $request->httpMethod === "POST";
            $result = $this->dormitoryRoomReservationManager->handleReservation($request, $isPost);

            return response()->json([
                'message' => $isPost
                    ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYREQ->value
                    : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYREQ->value . " ID#$result->id"
            ], 201);
        });
    }

    /**
     * Summary of get_match_rooms
     * @param GetMatchRooms $request
     */
    public function get_match_rooms(GetMatchRooms $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $accommodation = $request->accommodation;
            $dormitory = $request->dormitory;
            $room_type = $request->room_type;

            // get dormitory rooms that match the accommodation, dormitory, and room type.
            // Group the result by wing and floor.
            $room_managements = DormitoryRoom::when($dormitory, fn($query) => $query->where('dormitory', $dormitory))->where([
                'accommodation' => $accommodation,
                'room_type' => $room_type
            ])->orderBy('wing')
            ->orderBy('floor')
            ->get()
            ->groupBy(fn($item) => "Wing $item->wing - Floor $item->floor");

            return response()->json([ 'room_managements' => $room_managements ], 200);
        });
    }

    /**
     * Summary of get_current_tenant_info
     * @param GetCurrentTenantInfo $request
     */
    public function get_current_tenant_info (GetCurrentTenantInfo $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $userId = $request->userId;
            $currentTenant = DormitoryTenant::with([
                'dormitory_room'
            ])->where('user_id', $userId)
            ->whereNotIn('tenant_status', [
                DormitoryEnum::PENDING->value,
                DormitoryEnum::CANCELLED->value,
                DormitoryEnum::REJECTED->value,
                DormitoryEnum::TERMINATED->value
            ])->first();

            return response()->json(['currentTenant' => $currentTenant], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of create_or_update_service_request
     * @param CreateServiceReq $request
     */
    public function create_or_update_service_request (CreateServiceReq $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $result = $this->dormitoryServiceRequestManager->createOrUpdate($request, $isPost);

            return response()->json([
                'message' => $isPost
                    ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYSERVICEREQ->value
                    : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSERVICEREQ->value . " ID#$result->id"
            ], 201);
        });
    }

    /**
     * Summary of get_requested_service
     * @param Request $request
     */
    public function get_service_request (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $status = $request->status;

            // get service requests with the tenant and service information.
            $serviceRequestsTemp = DormitoryReqService::with([
                'services',
                'invoice',
                'tenant.boarder'
            ]);

            // if status filter is provided, apply the filter to the query.
            if($status) {
                $serviceRequestsTemp->whereIn('status', (array) $status);
            }

            // order the result by latest and get the collection.
            $serviceRequests = $serviceRequestsTemp->latest()->get();
            return response()->json(['service_requests' => $serviceRequests], 200);
        });
    }

    /**
     * Summary of set_service_request_as_action
     * @param SetServiceRequestAsAction $request
     */
    public function set_service_request_as_action (SetServiceRequestAsAction $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $action = $request->action;
            $serviceRequestId = $request->serviceRequestId;
            $result = $this->dormitoryServiceRequestManager->setAsGivenAction($action, $serviceRequestId);

            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dorm_inventories
     * @param Request $request
     * @return JsonResponse
     */
    public function get_dorm_inventories (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $dorm_inventory = DormitoryInventory::withCount([
                'stock',
                'stock as available_stock' => fn($query) => $query->whereIn('status', ["AVAILABLE", "DAMAGED"]),
                'borrowings'
            ]);

            $di = $request->controlNumber
                ? $dorm_inventory->where('control_number', $request->controlNumber)->first()
                : $dorm_inventory->get();

            return response()->json(['dormInventory' => $di], 200);
        });
    }

    /**
     * Summary of create_or_update_inventory
     * @param CreateOrUpdateInventory $request
     */
    public function create_or_update_inventory(CreateOrUpdateInventory $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $result = $this->dormitoryInventoryManager->createOrUpdate($request, $isPost, $documentId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_inventory
     * @param RemoveInventoryRequest $request
     * @return JsonResponse
     */
    public function remove_inventory(RemoveInventoryRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $documentId = $request->documentId;

            $result = $this->dormitoryInventoryManager->removeInventory($documentId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dormitory_inventory_stocks
     * @param GetDormitoryInventoryStockRequest $request
     * @return JsonResponse
     */
    public function get_dormitory_inventory_stocks (GetDormitoryInventoryStockRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $controlNumber = $request->controlNumber;

            $stock = DormitoryInventoryItem::whereHas('itemInfo', fn($query) => $query->where('control_number', $controlNumber))->get();
            return response()->json(['stocks' => $stock], 200);
        });
    }

    /**
     * Summary of create_inventory_stock
     * @param CreateInventoryStock $request
     * @return JsonResponse
     */
    public function create_inventory_stock(CreateInventoryStock $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $stockCount = $request->stock_count;
            $controlNumber = $request->controlNumber;

            $result = $this->dormitoryInventoryStockManager->createStock($stockCount, $controlNumber);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of update_inventory_stock
     * @param UpdateInventoryStock $request
     * @return JsonResponse
     */
    public function update_inventory_stock(UpdateInventoryStock $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $status = $request->status;
            $uniqueIdentifier = $request->uniqueIdentifier;

            $result = $this->dormitoryInventoryStockManager->updateStock($status, $uniqueIdentifier);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_inventory_stock
     * @param RemoveInventoryStock $request
     * @return JsonResponse
     */
    public function remove_inventory_stock (RemoveInventoryStock $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $documentId = $request->documentId;

            $result = $this->dormitoryInventoryStockManager->removeStock($documentId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dormitory_inclusion_requests
     * @param Request $request
     * @return JsonResponse
     */
    public function get_dormitory_inclusion_requests (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $inclusionRequests = DormitoryInclusionRequest::with([
                'tenant.boarder:id,fname,mname,lname,suffix,email',
                'itemInfo:id,name,charge,description,filename,is_consumable'
            ])->orderByDesc('created_at')->get()->map(fn($query) => [
                'id' => $query->id,
                'tenantId' => $query->tenant->id,
                'tenant' => "{$query->tenant->boarder->fname} {$query->tenant->boarder?->mname} {$query->tenant->boarder->lname} {$query->tenant->boarder->suffix}",
                'itemInfo' => $query->itemInfo,
                'status' => $query->status,
                'quantity' => $query->quantity,
                'created_at' => $query->created_at,
                'updated_at' => $query->updated_at
            ]);

            return response()->json(['inclusionRequests' => $inclusionRequests], 200);
        });
    }

    /**
     * Summary of update_inclusion_request
     * @param UpdateInclusionRequest $request
     * @return JsonResponse
     */
    public function update_inclusion_request(UpdateInclusionRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $documentId = $request->documentId;
            $status = $request->status;

            $result = $this->dormitoryInclusionManager->updateInclusionRequest($documentId, $status);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dormitory_extension_requests
     * @param Request $request
     * @return JsonResponse
     */
    public function get_dormitory_extension_requests (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $pageCounter = $request->pageCounter ?? 10;
            $query = $request->q;
            $status = $request->status;

            $extensionRequests = DormitoryExtensionRequest::with([
                'tenant.dormitory_room',
                'tenant.trainee',
                'invoice.orNumber'
            ])->when(\count($status) > 0, fn($s) => $s->whereIn('status', $status))
            ->when($query, function($q) use ($query) {
                $q->where('trace_number', 'LIKE', "%{$query}%")
                    ->orWhere('status', 'LIKE', "%{$query}%")
                    ->orWhereHas('tenant', fn($q2) =>
                        $q2->whereHas('trainee', fn($q3) =>
                            $q3->where('fname', 'LIKE', "%{$query}%")
                               ->orWhere('mname', 'LIKE', "%{$query}%")
                               ->orWhere('lname', 'LIKE', "%{$query}%")
                               ->orWhere('suffix', 'LIKE', "%{$query}%")
                        )
                    );
            })->orderByDesc('created_at')->paginate($pageCounter);

            return response()->json(['extensionRequests' => $extensionRequests], 200);
        });
    }

    /**
     * Summary of update_extension_request
     * @param UpdateExtensionRequest $request
     * @return JsonResponse
     */
    public function update_extension_request(UpdateExtensionRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $documentId = $request->documentId;
            $status = $request->status;

            $result = $this->dormitoryExtensionManager->updateExtensionRequest($documentId, $status);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_dormitory_transfer_requests
     * @param Request $request
     * @return JsonResponse
     */
    public function get_dormitory_transfer_requests (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $pageCounter = $request->pageCounter ?? 10;
            $query = $request->q;
            $status = $request->status;

            $transferRequests = DormitoryTransfer::with([
                'tenant.dormitory_room',
                'newRoom:id,room_name',
                'tenant.trainee',
                'invoice.orNumber'
            ])->when(\count($status) > 0, fn($s) => $s->whereIn('status', $status))
            ->when($query, function($q) use ($query) {
                $q->where('trace_number', 'LIKE', "%{$query}%")
                    ->orWhere('status', 'LIKE', "%{$query}%")
                    ->orWhereHas('tenant', fn($q2) =>
                        $q2->whereHas('trainee', fn($q3) =>
                            $q3->where('fname', 'LIKE', "%{$query}%")
                               ->orWhere('mname', 'LIKE', "%{$query}%")
                               ->orWhere('lname', 'LIKE', "%{$query}%")
                               ->orWhere('suffix', 'LIKE', "%{$query}%")
                        )
                    );
            })->orderByDesc('created_at')->paginate($pageCounter);

            return response()->json(['transferRequests' => $transferRequests], 200);
        });
    }

    /**
     * Summary of update_transfer_request
     * @param UpdateTransferRequest $request
     * @return JsonResponse
     */
    public function update_transfer_request(UpdateTransferRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $documentId = $request->documentId;
            $status = $request->status;
            $roomId = $request->roomId;

            $result = $this->dormitoryTransferManager->updateTransferRequest($documentId, $status, $roomId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of get_all_dormitory_invoices
     * @param Request $request
     * @return JsonResponse
     */
    public function get_all_dormitory_invoices(Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $pageCounter = $request->pageCounter ?? 10;
            $query = $request->q;
            $status = $request->status;
            $type = $request->type; // DORMITORY | LIBRARY | RECREATIONAL | ENROLLMENT

            $transferRequests = DormitoryInvoice::with([
                'payee',
                'orNumber',
                'dormitoryReqService',
                'dormitoryIncService',
                'extendRequest',
                'transferRequest'
            ])->when(\count($status) > 0, fn($s) => $s->whereIn('invoice_status', $status))
            ->when($query, function($q) use ($query) {
                $q->where('type', 'LIKE', "%{$query}%")
                    ->orWhere('trace_number', 'LIKE', "%{$query}%")
                    ->orWhere('invoice_status', 'LIKE', "%{$query}%")
                    ->orWhere('invoice_amount', 'LIKE', "%{$query}%")
                    ->orWhereHas('payee', function($q2) use ($query) {
                        $q2->where('fname', 'LIKE', "%{$query}%")
                            ->orWhere('mname', 'LIKE', "%{$query}%")
                            ->orWhere('lname', 'LIKE', "%{$query}%")
                            ->orWhere('suffix', 'LIKE', "%{$query}%");
                    });
            })
            ->orderByDesc('created_at')->paginate($pageCounter);

            return response()->json(['transferRequests' => $transferRequests], 200);
        });
    }

    /**
     * Summary of create_or_update_charge
     * @param CreateOrUpdateDormitoryCharge $request
     */
    public function create_or_update_charge(CreateOrUpdateDormitoryCharge $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $dormitoryInvoiceId = $request->dormitoryInvoiceId;

            $result = $this->dormitoryInvoiceManager->createOrUpdateSimpleInvoice($request, $dormitoryInvoiceId, $isPost);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of get_guest_charges
     * @param GetGuestCharge $request
     * @return JsonResponse
     */
    public function get_guest_charges(GetGuestCharge $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $pageCounter = $request->pageCounter ?? 10;
            $q = $request->q;

            $charges = DormitoryInvoice::where('dormitory_tenant_id', $request->dormitory_tenant_id)
                ->with('orNumber:id,name')
                ->when($q, function($search) use($q) {
                    $search->where('trace_number', "LIKE", "%{$q}%")
                        ->orWhere('invoice_amount', "LIKE", "%{$q}%")
                        ->orWhere('invoice_status', "LIKE", "%{$q}%")
                        ->orWhere('description', "LIKE", "%{$q}%")
                        ->orWhereHas('orNumber', fn($query) => $query->where('name', "LIKE", "%{$q}%"));
                })->latest()->paginate($pageCounter);

            return response()->json(['charges' => $charges], Response::HTTP_OK);
        });
    }

    /**
     * Summary of set_offset_date
     * @param SetOffsetDate $request
     * @return JsonResponse
     */
    public function set_offset_date (SetOffsetDate $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $offsetDate = $request->offset_date;
            $dormitoryTenantId = $request->dormitory_tenant_id;

            $result = $this->dormitoryOffsetManager->setOffsetDate($offsetDate, $dormitoryTenantId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }
}
