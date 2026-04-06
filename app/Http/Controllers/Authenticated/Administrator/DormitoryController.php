<?php

namespace App\Http\Controllers\Authenticated\Administrator;

// asasas
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dormitory\CreateOrUpdateDormitoryRoom;
use App\Http\Requests\Admin\Dormitory\GetCurrentTenantInfo;
use App\Http\Requests\Admin\Dormitory\GetMatchRooms;
use App\Http\Requests\Admin\Dormitory\NewRoomReservation;
use App\Http\Requests\Admin\Dormitory\SetServiceRequestAsAction;
use App\Models\DormitoryInventoryItem;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryItemBI;
use App\Models\DormitoryItemBorrowing;
use App\Models\DormitoryReqService;
use App\Models\DormitoryTenantSupDoc;
use File;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Enums\Administrator\DormitoryEnum;
use App\Http\Requests\Admin\Dormitory\{
    GetAvailableDorms,
    CreateOrUpdateDormitory,
    CreateOrUpdateRequest,
    CreateOrUpdateDormitoryInv,
    CreateOrUpdateService,
    CreateServiceReq,
    CreateOrUpdateDormitoryCharge
};
use Illuminate\Http\Request;
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    TransactionUtil,
    GenerateTrace,
    Notifications
};
use App\Events\{BEDormitory, BEAuditTrail};
use App\Jobs\SaveAvatar;
use App\Models\{
    DormitoryRoom,
    DormitoryTenant,
    DormitoryRoomImage,
    DormitoryInventory,
    DormitoryService,
    User,
    DormitoryTenantHistory
};
use App\Helpers\Administrator\General\CountCollection;
use App\Helpers\Administrator\General\CheckForDocumentExistence;

class DormitoryController extends Controller
{
    protected $cashierCtrl;

    public function __construct(Cashier $cashier) {
        $this->cashierCtrl = $cashier;
    }

    /**
     * Summary of addDescription
     * @param string $content
     * @return string
     */
    private function addDescription (string $content) {
        return "<div style='margin-top: 8px; padding: 16px; border: 1px dashed lightgrey; background-color: #FFFDD0;'>
            <div style='font-weight: bold; font-size: 1.25rem;'>Payable Amount</div>
            <div style='margin-top: 10px; line-height: 20px;'>
                $content
            </div>
        </div>";
    }

    // GOOOOOOOOODSSS -->>>>>>>>>>>>>>>
    /**
     * Summary of count_dorm_reservation
     * @param Request $request
     */
    public function count_dorm_reservation (Request $request){
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

    /**
     * Summary of count_service_requests
     * @param Request $request
     */
    public function count_service_requests (Request $request){
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

    /**
     * Summary of get_dormitory_rooms
     * @param Request $request
     */
    public function get_dormitory_rooms(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $room_managements = DormitoryRoom::withCount(['hasData'])
                ->orderBy('wing')
                ->orderBy('floor')
                ->get()
                ->groupBy(fn($item) => "Wing $item->wing - Floor $item->floor");

            return response()->json([
                'room_managements' => $room_managements
            ], 200);
        });
    }

    /**
     * Summary of create_or_update_room
     * @param Request $request
     */
    public function create_or_update_room(CreateOrUpdateDormitoryRoom $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;
            $room_name = $request->room_name;
            $room_slot = $request->room_slot;
            $dormitory = $request->dormitory;
            $room_type = $request->room_type;
            $guest_gender = $request->guest_gender;
            $wing = $request->wing;
            $floor = $request->floor;
            $room_cost = $request->room_cost;
            $guest_cost = $request->guest_cost;
            $accommodation = $request->accommodation;
            $remarks = $request->remarks;
            $data_room_image = $request->data_room_image;
            $room_image = $request->room_image;

            // if POST, create new room.
            $this_room = $isPost ? new DormitoryRoom() : DormitoryRoom::where([
                'id' =>  $documentId
            ])->lockForUpdate()->firstOrFail();

            $this_room->room_name = $room_name;
            $this_room->room_slot = $room_slot;
            $this_room->dormitory = $dormitory;
            $this_room->room_type = $room_type;
            $this_room->guest_gender = $guest_gender;
            $this_room->wing = $wing;
            $this_room->floor = $floor;
            $this_room->room_cost = $room_cost;
            $this_room->accommodation = $accommodation;
            $this_room->guest_cost = $guest_cost;
            $this_room->remarks = $remarks;
            $this_room->save();

            // if there are existing images and the request doesn't contain those images, delete them from storage and database
            if($data_room_image) {
                $room_images = DormitoryRoomImage::whereNotIn('id', $request->data_room_image)
                    ->where('dormitory_room_id', $documentId)
                    ->get();

                foreach($room_images as $item) {
                    if(file_exists(public_path("room-images/$item->filename"))) {
                        unlink(public_path("room-images/$item->filename"));
                    }

                    $item->delete();
                }
            }

            // if there are new images, save them in storage and database
            if($room_image) {
                $path = public_path('room-images');
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                foreach($request->room_image as $image) {
                    $room_image = new DormitoryRoomImage();
                    $room_image->dormitory_room_id = $this_room->id;

                    $image_name = Str::uuid() . '-room-.png';
                    $room_image->filename = $image_name;
                    $room_image->save();

                    SaveAvatar::dispatch($image, $image_name, "room-images", false, true, '');
                }
            }

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORY->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#$this_room->id"
            );

            return response()->json(['message' => $isPost ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORY->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#$this_room->id"], 201);
        });
    }

    /**
     * Summary of remove_room
     * @param Request $request
     * @param int $roomId
     */
    public function remove_room (Request $request, int $roomId) {
        return TransactionUtil::transact(null, [], function() use ($request, $roomId) {
            $this_dorm = DormitoryRoom::withCount(['hasData'])->where('id', $roomId)->first();

            // if the dormitory room has active reservations, don't allow deletion
            if($this_dorm->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYROOM->value], 200);
            } else {
                $this_dorm->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYROOM->value . " ID#$roomId"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYROOM->value], 200);
            }
        });
    }

    /**
     * Summary of services
     * @param Request $request
     */
    public function services (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $services = DormitoryService::withCount('requestedService')->get();
            return response()->json(['services' => $services], 200);
        });
    }

    /**
     * Summary of create_or_update_service
     * @param CreateOrUpdateService $request
     */
    public function create_or_update_service (CreateOrUpdateService $request) {
        return TransactionUtil::transact($request, ["dormitory:services:all"], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            // if POST, create new service.
            // if UPDATE, update the existing service with lockForUpdate
            if($isPost) {
                $this_service = new DormitoryService();
            } else {
                $this_service = DormitoryService::where('id', $request->documentId)->lockForUpdate()->firstOrFail();
                $this_service->status = $request->status;
            }

            $this_service->name = $request->name;
            $this_service->description = $request->description;
            $this_service->charge = $request->charge;
            $this_service->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYSERVICE->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSERVICE->value . " ID#$this_service->id"
            );

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYSERVICE->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSERVICE->value) . "ID# " . $this_service->id], 201);
        });
    }

    /**
     * Summary of remove_service
     * @param Request $request
     * @param int $service_id
     */
    public function remove_service (Request $request, int $service_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $service_id) {
            $this_service = DormitoryService::withCount(['requestedService'])->where('id', $service_id)->first();

            // if the service has pending or approved requests, don't allow deletion
            if($this_service->requested_service_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYSERVICE->value], 200);
            } else {
                $this_service->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYSERVICE->value . " ID#$service_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYSERVICE->value], 200);
            }
        });
    }

    /**
     * Summary of room_reservations
     * @param Request $request
     */
    public function room_reservations (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $room_reservations = DormitoryTenant::with(['boarder', 'dormitory_room'])
                ->when($request->tenantStatus, fn($query, $status) => $query->whereIn('tenant_status', (array) $status))
                ->latest()
                ->get();

            return response()->json(['room_reservations' => $room_reservations], 200);
        });
    }

    /**
     * Summary of new_room_reservation
     * @param NewRoomReservation $request
     */
    public function new_room_reservation (NewRoomReservation $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $check_in_datetime = $request->check_in_datetime;
            $check_out_datetime = $request->check_out_datetime;
            $occupancy = $request->occupancy;
            $guest = $request->guest;
            $room = $request->room;
            $purpose = $request->purpose;
            $accommodation = $request->accommodation;
            $room_type = $request->room_type;
            $supporting_documents = $request->supporting_documents;
            $documentId = $request->documentId;
            $status = $request->status;
            $remarks = $request->remarks;
            $pricingBreakdown = $request->pricingBreakdown;
            $paymentRemarks = $request->paymentRemarks;
            $withFee = $request->withFee;

            // if POST, create new reservation.
            // if UPDATE, update the existing reservation with lockForUpdate
            if($isPost) {
                $this_reservation = new DormitoryTenant();
                $this_reservation->trace_number = GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-');
            } else {
                $this_reservation = DormitoryTenant::where([ 'id' => $documentId ])
                    ->lockForUpdate()
                    ->firstOrFail();
            }

            $this_reservation->remarks = $remarks;

            // if the reservation is being rejected, update tenant_status to REJECTED.
            // else, update or create reservation with FOR_PAYMENT status.
            if($status === DormitoryEnum::REJECTED->value) {
                $this_reservation->tenant_status = DormitoryEnum::REJECTED;
                $this_reservation->save();
            } else {
                $this_reservation->check_in_datetime = $check_in_datetime;
                $this_reservation->check_out_datetime = $check_out_datetime;
                $this_reservation->status_of_occupancy = $occupancy;
                $this_reservation->user_id = $guest;
                $this_reservation->dormitory_room_id = $room;
                $this_reservation->purpose = $purpose;
                $this_reservation->accommodation = $accommodation;
                $this_reservation->room_type = $room_type;
                $this_reservation->tenant_status = $status === DormitoryEnum::FOR_PAYMENT->value ? DormitoryEnum::FOR_PAYMENT : DormitoryEnum::APPROVED;
                $this_reservation->save();

                // if there are supporting documents, save them in the dormitory_tenant_sup_docs table and save the files in the storage
                if($supporting_documents) {
                    $path = public_path('dormitory/supporting-document');
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }

                    foreach($supporting_documents as $sd) {
                        $room_image = new DormitoryTenantSupDoc();
                        $room_image->dormitory_tenant_id = $this_reservation->id;

                        $image_name = Str::uuid() . '-room-.png';
                        $room_image->filename = $image_name;
                        $room_image->save();

                        SaveAvatar::dispatch($sd, $image_name, "dormitory/supporting-document", false, true, '');
                    }
                }

                // if the reservation is with fee and the occupancy is TRAINEE or PAYING GUEST/VISITOR,
                // create invoice for this reservation.
                $pricingBreakdownTemp = json_decode($pricingBreakdown);
                if($withFee && \in_array($occupancy, ['TRAINEE', 'PAYING GUEST/VISITOR']) && $pricingBreakdownTemp && $status === DormitoryEnum::FOR_PAYMENT->value) {
                    $new_invoice = new DormitoryInvoice();
                    $new_invoice->dormitory_tenant_id = $this_reservation->id;
                    $new_invoice->user_id = $guest;
                    $new_invoice->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-INV-');
                    $new_invoice->paying_as_trainee_days = $pricingBreakdownTemp?->traineeDays;
                    $new_invoice->paying_as_trainee_amount = $pricingBreakdownTemp?->traineeTotal;
                    $new_invoice->paying_as_guest_days = $pricingBreakdownTemp?->guestDays;
                    $new_invoice->paying_as_guest_amount = $pricingBreakdownTemp?->guestTotal;
                    $new_invoice->invoice_amount = $pricingBreakdownTemp?->grandTotal;
                    $new_invoice->type = DormitoryEnum::DORMITORY;
                    $new_invoice->remarks = $paymentRemarks;
                    $new_invoice->save();
                }
            }

            return response()->json(['message' => "New Reservation has been saved."], 200);
        });
    }

    /**
     * Summary of get_match_rooms
     * @param GetMatchRooms $request
     */
    public function get_match_rooms(GetMatchRooms $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $accommodation = $request->accommodation;
            $dormitory = $request->dormitory;
            $room_type = $request->room_type;

            // get dormitory rooms that match the accommodation, dormitory, and room type.
            // Group the result by wing and floor.
            $room_managements = DormitoryRoom::where([
                'accommodation' => $accommodation,
                'dormitory' => $dormitory,
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
    public function get_current_tenant_info (GetCurrentTenantInfo $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $userId = $request->userId;

            // get the user's current active tenant record. Active tenant record is the tenant record
            // that has tenant_status other than PENDING, CANCELLED, REJECTED, and TERMINATED.
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

    /**
     * Summary of create_or_update_service_request
     * @param CreateServiceReq $request
     */
    public function create_or_update_service_request (CreateServiceReq $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $tenantId = $request->tenantId;
            $userId = $request->userId;
            $serviceId = $request->serviceId;
            $feeType = $request->feeType;
            $paymentRemarks = $request->paymentRemarks;
            $status = $request->status;
            $remarks = $request->remarks;

            // if POST, create new service request.
            // if UPDATE, update the existing service request with lockForUpdate
            $this_service = $isPost ? new DormitoryReqService() : DormitoryReqService::where('id', $request->documentId)->lockForUpdate()->firstOrFail();
            $this_service->dormitory_tenant_id = $tenantId;
            $this_service->dormitory_service_id = $serviceId;
            $this_service->status = $status;
            $this_service->fee_type = $feeType;

            // if the service request is with fee and the status is FOR_PAYMENT,
            // create invoice for this service request.
            if($status === DormitoryEnum::FOR_PAYMENT->value && $feeType === DormitoryEnum::APPROVED_WITH_FEE->value && $this_service->services->charge > 0) {
                $new_invoice = new DormitoryInvoice();
                $new_invoice->dormitory_tenant_id = $tenantId;
                $new_invoice->user_id = $userId;
                $new_invoice->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-INV-');
                $new_invoice->invoice_amount = $this_service->services->charge;
                $new_invoice->description = "Room Service Request: " . $this_service->services->name;
                $new_invoice->type = DormitoryEnum::SERVICE;
                $new_invoice->remarks = $paymentRemarks;
                $new_invoice->save();

                $this_service->dormitory_invoice_id = $new_invoice->id;
                $this_service->status = DormitoryEnum::FOR_PAYMENT->value;
            }

            // if the request is being cancelled or declined, cancel the invoice
            if(\in_array($status, [DormitoryEnum::CANCELLED->value, DormitoryEnum::DECLINED->value]) && $this_service->dormitory_invoice_id) {
                $invoice = DormitoryInvoice::where('id', $this_service->dormitory_invoice_id)->lockForUpdate()->first();
                $invoice->invoice_status = DormitoryEnum::CANCELLED->value;
                $invoice->remarks = $paymentRemarks;
                $invoice->save();

                $this_service->remarks = $remarks;
            }

            $this_service->save();

            // notify the tenant about the new service request and
            // log the activity in the audit trail
            Notifications::notify($request->user()->id, $request->userId, "DORMITORY", "We have ". ($request->httpMethod === "POST" ? 'created' : 'updated') . " a dormitory service request for you.");
            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYSERVICEREQ->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSERVICEREQ->value). "ID#" . $this_service->id);
            return response()->json(['message' => ($request->httpMethod == "POST" ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYSERVICEREQ->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSERVICEREQ->value). "ID# " . $this_service->id], 201);
        });
    }

    /**
     * Summary of get_requested_service
     * @param Request $request
     */
    public function get_service_request (Request $request) {
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
    public function set_service_request_as_action (SetServiceRequestAsAction $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $serviceRequestId = $request->serviceRequestId;
            $action = $request->action;

            $this_service_request = DormitoryReqService::where('id', $serviceRequestId)->lockForUpdate()->firstOrFail();

            // if the action is DONE, only allow if the current status is APPROVED or FOR_PAYMENT. Otherwise, return error response.
            if($action === "DONE" && \in_array($this_service_request->status, [DormitoryEnum::CANCELLED->value, DormitoryEnum::DECLINED->value])) {
                return response()->json(['message' => "Only service requests with status Approved or Paid can be set as DONE."], 400);
            }

            // if the action is CANCELLED, only allow if the current status is not DONE. Otherwise, return error response.
            if($action === "CANCELLED" && $this_service_request->dormitory_invoice_id) {
                $invoice = DormitoryInvoice::where('id', $this_service_request->dormitory_invoice_id)->lockForUpdate()->first();

                if($invoice->invoice_status !== DormitoryEnum::PAID->value) {
                    $invoice->invoice_status = DormitoryEnum::CANCELLED->value;
                    $invoice->save();
                }
            }

            $this_service_request->status = $action;
            $this_service_request->save();

            return response()->json(['message' => "Service request has been marked as $action."], 200);
        });
    }

    // END OF GOOOOOOOOODSSS -->>>>>>>>>>>>>>>
    /**
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     * Summary of get_available_dorms
     */

    /**
     * Summary of get_available_dorms
     * @param GetAvailableDorms $request
     */
    public function get_available_dorms(GetAvailableDorms $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $roomId = $request->roomId;
            $isAirConditioned = $request->isAirConditioned;
            $singleAccommodation = $request->singleAccommodation;
            $dateFrom = $request->dateFrom;
            $dateTo = $request->dateTo;
            $userId = $request->userId;

            $tenant = User::findOrFail($userId);
            $getAdditionalTraineeInfo = $tenant->additional_trainee_info;
            $isOfficer = $getAdditionalTraineeInfo && $tenant->role !== "GUEST" && ($getAdditionalTraineeInfo->latest_shipboard_attainment?->rank !== null);
            $tempDorm = Dormitory::query();

            $tempDorm->where('room_fee_type', $isOfficer ? DormitoryEnum::OFFICERS : DormitoryEnum::RATINGS);

            $roomFilter = function($query) use ($isAirConditioned, $singleAccommodation, $dateFrom, $dateTo, $roomId) {
                $query->where('is_air_conditioned', $isAirConditioned)
                    ->where('room_status', 'AVAILABLE')
                    ->where(function($q) use ($singleAccommodation, $dateFrom, $dateTo) {
                        $occupancyConstraint = function($tenantQuery) use ($dateFrom, $dateTo) {
                            $tenantQuery->where('tenant_from_date', '<', $dateTo)
                                        ->where('tenant_to_date', '>', $dateFrom)
                                        ->whereNotIn('tenant_status', [
                                            DormitoryEnum::CANCELLED,
                                            DormitoryEnum::REJECTED,
                                            DormitoryEnum::TERMINATED
                                        ]);
                        };

                        if ($singleAccommodation === 'YES') {
                            $q->whereDoesntHave('hasData', $occupancyConstraint);
                        } else {
                            $q->whereHas('hasData', $occupancyConstraint, '<', \DB::raw('room_slot'))
                              ->orWhereDoesntHave('hasData', $occupancyConstraint);
                        }
                    });
            };

            $dorms = $tempDorm->whereHas('rooms', $roomFilter)
                ->with(['rooms' => function($query) use ($roomFilter, $dateFrom, $dateTo) {
                    $roomFilter($query);
                    $query->with(['hasData' => function($q) use ($dateFrom, $dateTo) {
                        $q->where('tenant_from_date', '<', $dateTo)
                          ->where('tenant_to_date', '>', $dateFrom)
                          ->whereNotIn('tenant_status', [
                                DormitoryEnum::CANCELLED,
                                DormitoryEnum::REJECTED,
                                DormitoryEnum::TERMINATED
                            ]);
                    }]);
                }])->get();

            $dorms->transform(function($dorm) use ($singleAccommodation, $roomId) {
                $dorm->rooms->transform(function($room, $index) use ($singleAccommodation, $roomId) {
                    $takenSlots = $room->hasData->pluck('for_slot')->map(fn($val) => (int)$val)->toArray();
                    $allSlots = range(1, $room->room_slot);
                    $availableSlots = array_values(array_diff($allSlots, $takenSlots));

                    $room->suggested_slot = !empty($availableSlots) ? ($singleAccommodation === "NO" ? $availableSlots[0] : 3) : null;
                    $room->canChoose = \count($availableSlots) > 0;
                    $room->isRecommended = ($roomId && $room->id === $roomId) || $index === 0;
                    unset($room->hasData);

                    return $room;
                });

                return $dorm;
            });

            return response()->json(['dorms' => $dorms], 200);
        });
    }

    /**
     * Summary of update_dormitory_room_request
     * @param Request $request
     */
    public function update_dormitory_room_request(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $status = $request->status;
            $remarks = $request->remarks;
            $dormitoryRequestId = $request->dormitoryRequestId;
            $roomId = $request->roomId;
            $slot = $request->slot;

            $this_request = DormitoryTenant::findOrFail($dormitoryRequestId);

            $checkIfWeCantUpdate = $status === DormitoryEnum::APPROVED->value && \in_array($this_request->tenant_status, [
                DormitoryEnum::CANCELLED,
                DormitoryEnum::TERMINATED,
                DormitoryEnum::REJECTED
            ]);

            if($checkIfWeCantUpdate) {
                return response()->json(['message' => "We're sorry. You can't update the dormitory request for the moment."], 409);
            }

            $this_request->dormitory_room_id = $roomId;
            $this_request->remarks = $remarks;
            $this_request->for_slot = $slot;
            $this_request->tenant_status = $status;
            $this_request->save();

            AuditHelper::log(
                $request->user()->id,
                "Dormitory request has been updated. ID#$this_request->id"
            );

            return response()->json(['message' => "Dormitory request has been updated."], 200);
        });
    }

    /**
     * Summary of get_available_supplies
     * @param Request $request
     */
    public function get_available_supplies (Request $request) {
    return TransactionUtil::transact(null, [], function() use ($request) {

        $tenantId = $request->userId;

        $availableSupplies = DormitoryInventory::withCount([
            'stock' => fn($query) => $query->whereIn('status', ['AVAILABLE'])
        ])->get()->map(function ($self) use ($request, $tenantId) {
            return (function() use ($self, $request, $tenantId) {
                $checkIfReservedTemp = $self->borrowings()
                    ->where('status', '!=', "DONE")
                    ->where('dormitory_tenant_id', $tenantId);
                $checkIfReserved = $checkIfReservedTemp->exists();
                $status = null;

                if ($checkIfReserved) {
                    $status = 'ADDED';
                } else if ($self->stock()->whereIn('status', ['AVAILABLE'])->exists()) {
                    $status = 'AVAILABLE';
                } else {
                    $status = 'OUT OF STOCK';
                }

                $self->provided = DormitoryItemBorrowing::where('dormitory_inventory_id', $self->id)
                    ->where('dormitory_tenant_id', $tenantId)
                    ->sum('count');

                $self->availabilityStatus = $status;

                return $self;
            })();
        })->sortBy(function ($item) {
            $order = [
                'AVAILABLE' => 2,
                'ADDED' => 1,
                'OUT OF STOCK' => 3,
            ];

            return $order[$item->availabilityStatus] ?? 99;
        })->values();

        return response()->json([
            'availableSupplies' => $availableSupplies
        ], 200);
    });
}

    /**
     * Summary of get_and_provide
     * @param Request $request
     */
    public function get_and_provide(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {

        });
    }

    /**
     * Summary of get_available_rooms
     * @param Request $request
     */
    public function get_available_rooms (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $targetRoomId = $request->roomId;

            $rooms = DormitoryRoom::where('dormitory_id', $request->dormId)
                ->orderByRaw("id = ? DESC", [$targetRoomId])
                ->orderBy('room_available_slot', 'DESC')
                ->get()
                ->map(function($room) {
                    $disabled = $room->hasData->filter(function($tenant) {
                        return !\in_array($tenant->tenant_status, ["PENDING", "TERMINATED", "CANCELLED", "DECLINED", "RESERVED"]);
                    })->map(function($d) {
                        return [
                            'from' => $d->tenant_from_date,
                            'to' => $d->tenant_to_date,
                            'slot' => $d->for_slot
                        ];
                    })->values();

                    return [
                        'room' => $room,
                        'disabled_dates' => $disabled
                    ];
                });

            return response()->json(['rooms' => $rooms], 200);
        });
    }

    /**
     * Summary of create_dormitory_rooms
     * @param Request $request
     */
    public function create_dormitory_rooms (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            if($request->room_count) {
                $existingNumbers = DormitoryRoom::where('dormitory_id', $request->dormitoryId)
                    ->where('room_name', 'LIKE', "R$request->dormitoryId-%")
                    ->orderByRaw('CAST(SUBSTRING_INDEX(room_name, "-", -0) AS UNSIGNED) ASC')
                    ->get()
                    ->map(fn($room) => (int) Str::afterLast($room->room_name, '-'))
                    ->toArray();

                $startFrom = !empty($existingNumbers) ? max($existingNumbers) + 1 : 0;

                for($i = 0; $i < $request->room_count; $i++) {
                    $room_name = "R$request->dormitoryId-" . ($startFrom + $i);

                    $exists = CheckForDocumentExistence::exists(
                        DormitoryRoom::class,
                        [
                            'dormitory_id' => $request->dormitoryId,
                            'room_name'    => $room_name,
                        ],
                        false,
                        null,
                        'id',
                        "Room name $room_name already exists in this dormitory."
                    );
                    if ($exists) return $exists;

                    $room = new DormitoryRoom;
                    $room->dormitory_id       = $request->dormitoryId;
                    $room->room_name          = $room_name;
                    $room->room_slot          = $request->room_slot;
                    $room->is_air_conditioned = "NO";
                    $room->save();
                }
            }
            return $request->insideJob ? true : response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYROOM->value], 201);
        });
    }

    /**
     * Summary of update_dormitory_room
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     */
    public function update_dormitory_room (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {

            $this_room = DormitoryRoom::findOrFail($request->documentId);

            if ($request->room_name) {
                if (empty(trim($request->room_name))) {
                    return response()->json(['message' => "Room name cannot be empty."], 422);
                }
                $exists = CheckForDocumentExistence::exists(
                    DormitoryRoom::class,
                    [
                        'dormitory_id' => $this_room->dormitory_id,
                        'room_name'    => trim($request->room_name),
                    ],
                    true,
                    $this_room->id,
                    'id',
                    "Room name $request->room_name already exists in this dormitory."
                );
                if ($exists) return $exists;
            }
            $this_room->is_air_conditioned = $request->is_air_conditioned;
            $this_room->remarks            = $request->remarks === 'null' ? NULL : $request->remarks;
            $this_room->room_status        = $request->status;
            if ($request->room_name) $this_room->room_name = trim($request->room_name);
            $this_room->save();

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYROOM->value . " ID#$this_room->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYROOM->value . " ID#$this_room->id"], 200);
        });
    }

    /**
     * Summary of get_dorm_inventories
     * @param Request $request
     */
    public function get_dorm_inventories (Request $request) {
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
     * Summary of create_dormitory_inventory_stock
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function create_dormitory_inventory_stock (Request $request) {
        return TransactionUtil::transact(null, ["dormitory:inclusions:all"], function() use ($request) {
            $dataToReturn = [];

            if($request->stock) {
                for($i = 0; $i < $request->stock; $i++) {
                    $room = new DormitoryInventoryItem;
                    $room->dormitory_inventory_id = $request->dormitoryInventoryId;
                    $room->unique_identifier = GenerateTrace::createTraceNumber(DormitoryInventoryItem::class, '-DIS-', 'unique_identifier');
                    $room->save();

                    array_push($dataToReturn, $room->unique_identifier);
                }
            }

            return $request->insideJob ? $dataToReturn : response()->json([
                'message' => "You've added a dormitory inventory stock.",
                'returnedData' => $dataToReturn
            ], 201);
        });
    }

    /**
     * Summary of create_or_update_dormitory_inventory
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateDormitoryInv $request
     */
    public function create_or_update_dormitory_inventory (CreateOrUpdateDormitoryInv $request) {
        return TransactionUtil::transact($request, ["inventoryItems", "dormitory:inclusions:all"], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $dorm_inventory = $isPost ? new DormitoryInventory() : DormitoryInventory::findOrFail($request->documentId);
            $dorm_inventory->name = $request->name;
            $dorm_inventory->charge = $request->amount;
            $dorm_inventory->description = $request->description;
            $dorm_inventory->is_consumable = $request->isConsumable;

            if($isPost) $dorm_inventory->control_number = GenerateTrace::createTraceNumber(DormitoryInventory::class, "-DI-", 'control_number');
            if($request->filename) {
                $filename = Str::uuid() . '.png';
                SaveAvatar::dispatch($request->filename, $filename, "dormitory/inventory", false, true, $dorm_inventory->filename ?? '');
                $dorm_inventory->filename = $filename;
            }

            $dorm_inventory->save();
            $dataToReturn = [];

            if($request->stock) {
                $adjustedRequest = $request->merge([
                    "insideJob" => true,
                    "dormitoryInventoryId" => $dorm_inventory->id,
                ]);

                $dataToReturn = $this->create_dormitory_inventory_stock($adjustedRequest);
            }

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYINV->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYINV->value . " ID#$dorm_inventory->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json([
                'message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYINV->value . " ID#$dorm_inventory->id",
                'returnedData' => $dataToReturn
            ], 200);
        });
    }

    /**
     * Summary of get_dormitory_inventory_stock
     * @param Request $request
     */
    public function get_dormitory_inventory_stock (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $stock = DormitoryInventoryItem::withCount('borrowed')
                ->where('dormitory_inventory_id', $request->documentId)
                ->get();

            return response()->json(['stocks' => $stock], 200);
        });
    }

    /**
     * Summary of update_dormitory_inventory_stock
     * @param Request $request
     */
    public function update_dormitory_inventory_stock(Request $request) {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $documentId = $request->documentId;
            $availabilityStatus = $request->availabilityStatus;

            $this_inventory_stock = DormitoryInventoryItem::where('id', $documentId)
                ->lockForUpdate()
                ->first();

            if (!$this_inventory_stock) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK->value], 409);
            } else {
                $this_inventory_stock->status = $availabilityStatus;
                $this_inventory_stock->save();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK->value . " ID#$documentId"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYINVSTOCK->value], 200);
            }
        });
    }
    //tunying
    /**
     * Summary of get_stock_reserved_tenant
     * @param Request $request
     */
    public function get_stock_reserved_tenant(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {

            if (!$request->stockId) {
                return response()->json(['message' => "Stock ID is required."], 422);
            }

            $stock = DormitoryInventoryItem::where('id', $request->stockId)->first();

            if (!$stock) {
                return response()->json(['message' => "Stock ID $request->stockId not found."], 404);
            }

            if ($stock->status !== DormitoryEnum::RESERVED->value) {
                return response()->json([
                    'message' => "Stock ID $request->stockId is not reserved. Current status is $stock->status."
                ], 409);
            }
            $provision = DormitoryItemBorrowing::with([
                'tenant.boarder',
                'tenant.dormitory_room',
            ])
            ->whereHas('items', fn($q) =>
                $q->where('dormitory_inventory_item_id', $stock->id)
            )
            ->whereHas('tenant', fn($q) =>
                $q->whereIn('tenant_status', [
                    DormitoryEnum::APPROVED->value,
                    DormitoryEnum::ACTIVE->value,
                    DormitoryEnum::RESERVED->value,
                ])
            )
            ->first();

            $tenant = $provision?->tenant;

            if (!$tenant) {
                return response()->json(['message' => "No tenant found for this reserved stock."], 404);
            }

            return response()->json([
                'stock' => [
                    'stock_id'          => $stock->id,
                    'unique_identifier' => $stock->unique_identifier,
                    'status'            => $stock->status,
                ],
                'reserved_by' => [
                    'tenant_id' => $tenant->id,
                    'name'      => $tenant->boarder->fname . ' ' . $tenant->boarder->lname,
                    'room'      => $tenant->dormitory_room?->room_name ?? 'No room assigned',
                    'status'    => $tenant->tenant_status,
                    'created_at' => $tenant->created_at,
                    'updated_at' => $tenant->updated_at,
                ],
            ], 200);
        });
    }

    /**
     * Summary of remove_dorm_inventory_stock
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $stock_id
     */
    public function remove_dorm_inventory_stock (Request $request, int $stock_id) {
        return TransactionUtil::transact(null, ["inventoryItems"], function() use ($request, $stock_id) {
            $this_stock = DormitoryInventoryItem::withCount(['borrowed'])->where('id', $stock_id)->first();

            if($this_stock->borrowed_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYINVSTOCK->value], 200);
            } else {
                $this_stock->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYINVSTOCK->value . " ID#$stock_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYINVSTOCK->value], 200);
            }
        });
    }

    /**
     * Summary of remove_dorm_inventory
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $inv_id
     */
    public function remove_dorm_inventory (Request $request, int $inv_id) {
        return TransactionUtil::transact(null, ["inventoryItems"], function() use ($request, $inv_id) {
            $this_dorm = DormitoryInventory::withCount(['borrowings'])->where('id', $inv_id)->first();

            if($this_dorm->borrowings_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYINVSTOCK->value], 200);
            } else {
                if(file_exists(public_path("dormitory/inventory/" . $this_dorm->filename))) {
                    unlink(public_path("dormitory/inventory/" . $this_dorm->filename));
                }

                $this_dorm->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYINV->value . " ID#$inv_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYINV->value . "ID#$inv_id"], 200);
            }
        });
    }

    // TO BE REMOVED
    public function create_or_update_request (CreateOrUpdateRequest $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $checkForPending = DormitoryTenant::where('user_id', $request->userId)
                ->whereIn('tenant_status', ['PENDING', 'APPROVED', 'EXTENDING', 'FOR PAYMENT', 'PAID', 'PROCESSING PAYMENT', 'ACTIVE', 'RESERVED'])
                ->exists();

            if($checkForPending && !$request->documentId) {
                return response()->json(['message' => "Our records indicate that this user is currently associated with an existing active dormitory request. Consequently, the system is unable to process a duplicate application at this time. Please verify the status of the current dormitory request and ensure the previous request is finalized or terminated before proceeding with a new submission."], 400);
            }

            $this_dormitory_request = $request->httpMethod === "POST"
                ? new DormitoryTenant()
                : DormitoryTenant::findOrFail($request->documentId);

            $this_dormitory_request->user_id = $request->userId;
            $this_dormitory_request->room_for_type = $request->forType;
            $this_dormitory_request->single_accommodation = $request->single_accommodation;
            $this_dormitory_request->status_of_occupancy = $request->status_of_occupancy;
            $this_dormitory_request->is_air_conditioned = $request->isAirConditioned;
            $this_dormitory_request->purpose = $request->purpose;
            $this_dormitory_request->process_type = $request->processType;

            if($request->httpMethod === "POST") $this_dormitory_request->trace_number = GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-');
            if($request->status) $this_dormitory_request->tenant_status = $request->status;

            $this_dormitory_request->tenant_from_date = $request->chosenRoom['start'];
            $this_dormitory_request->tenant_to_date = $request->chosenRoom['end'];
            $this_dormitory_request->dormitory_room_id = $request->chosenRoom['roomId'];
            $this_dormitory_request->for_slot = ($request->single_accommodation === "YES" || $request->forType === "COUPLE") ? '3' : $request->chosenRoom['slot'];

            if($request->forType === "COUPLE" && is_null($this_dormitory_request->filename)) {
                if(!is_null($request->filename)) {
                    $this_dormitory_request->filename = $request->filename;

                    if($request->filename) {
                        $image_name = Str::uuid() . '.png';
                        SaveAvatar::dispatch(
                            $request->filename,
                            $image_name,
                            "dormitory/supporting-document/",
                            false,
                            true,
                            $request->httpMethod === "UPDATE" ? 'dormitory/supporting-document/' . $this_dormitory_request->filename : ''
                        );
                        $this_dormitory_request->filename = $image_name;
                    }
                }
            }

            $this_dormitory_request->save();

            if ($request->providedItem) {
                $groupedItems = collect($request->providedItem)->groupBy('mainObjectId');

                foreach ($groupedItems as $mainObjectId => $items) {
                    $checkIfBorrowingExists = DormitoryItemBorrowing::where([
                        'dormitory_tenant_id' => $this_dormitory_request->id,
                        'dormitory_inventory_id' => $mainObjectId
                    ])->first();

                    $borrowingId = $checkIfBorrowingExists?->id;

                    if(!$checkIfBorrowingExists) {
                        $borrowing = new DormitoryItemBorrowing;
                        $borrowing->dormitory_tenant_id = $this_dormitory_request->id;
                        $borrowing->dormitory_inventory_id = $mainObjectId;
                        $borrowing->count = $items->count();
                        $borrowing->status = "ACTIVE";
                        $borrowing->save();

                        $borrowingId = $borrowing->id;
                    }

                    foreach ($items as $itemData) {
                        if($itemData['isNew']) {
                            $inventoryItem = DormitoryInventoryItem::where([
                                'status' => 'AVAILABLE',
                                'id' => $itemData['itemId']
                            ])->lockForUpdate()->first();

                            if ($inventoryItem) {
                                $detail = new DormitoryItemBI();
                                $detail->dormitory_item_borrowing_id = $borrowingId;
                                $detail->dormitory_inventory_item_id = $inventoryItem->id;
                                $detail->withFee = $itemData['withFee'];
                                $detail->status = "APPROVED";
                                $detail->save();

                                $inventoryItem->status = "RESERVED";
                                $inventoryItem->save();
                            }
                        }
                    }
                }
            }

            $checkIfHasInitial = $this_dormitory_request->tenant_invoices()->where('isInitial', 'Y')->exists();

            if ($request->updatedTotalData && !$checkIfHasInitial) {
                $guestCount = count($request->input('fetchDates.guest', []));
                $traineeCount = count($request->input('fetchDates.trainee', []));

                $guestRate = (float) $request->input('updatedTotalData.guestCost', 0);
                $traineeRate = (float) $request->input('updatedTotalData.traineeCost', 0);
                $inclusionCharge = (float) $request->input('updatedTotalData.inclusionCharge', 0);

                $totalGuestCharge = $guestCount * $guestRate;
                $totalTraineeCharge = $traineeCount * $traineeRate;

                //\Log::info("$totalGuestCharge -- $guestCount");

                $descriptionHtml = $this->addDescription(
           "<div style='font-weight: bold;'>
                        <span style='color: #6c757d;'>Dormitory Charge</span>
                    </div>

                    <div style='margin-bottom: 10px;'>
                        <span>" . $request->chosenRoom['start'] . " to " . $request->chosenRoom['end'] . "</span>
                    </div>

                    <div style='display: flex; align-items: center; justify-content: space-between;'>
                        <span style='color: #6c757d;'>Paying Guest ($guestCount days)</span>
                        <span>₱" . number_format($totalGuestCharge, 2) . "</span>
                    </div>

                    <div style='display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;'>
                        <span style='color: #6c757d;'>Paying Trainee ($traineeCount days)</span>
                        <span>₱" . number_format($totalTraineeCharge, 2) . "</span>
                    </div>

                    <div style='font-weight: bold;'>
                        <span style='color: #6c757d;'>Inclusion Charge</span>
                    </div>

                    <div style='display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;'>
                        <span style='color: #6c757d;'>All Items</span>
                        <span>₱" . number_format($inclusionCharge, 2) . "</span>
                    </div>"
                );

                $new_payment = new DormitoryInvoice();
                $new_payment->user_id = $request->userId;
                $new_payment->dormitory_tenant_id = $this_dormitory_request->id;
                $new_payment->charge_id = $request->charge;
                $new_payment->dormitory_room_id = $request->input('chosenRoom.roomId');
                $new_payment->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-DRINV-');
                $new_payment->total_amount = $request->input('updatedTotalData.updatedTotal');
                $new_payment->description = $descriptionHtml;
                $new_payment->remarks = $request->input('updatedTotalData.remarks') ?? '';
                $new_payment->save();
            }

            $dormitory_tenant_history = new DormitoryTenantHistory;
            $dormitory_tenant_history->dormitory_tenant_id = $this_dormitory_request->id;
            $dormitory_tenant_history->history_reason = ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory request.";
            $dormitory_tenant_history->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYREQ->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYREQ->value). "ID#" . $this_dormitory_request->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => ($request->httpMethod === "POST" ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORYREQ->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYREQ->value). "ID# " . $this_dormitory_request->id], 201);
        });
    }

    // DI SURE
    public function get_dormitory_info (Request $request, int $room_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $room_id) {
            $dormitory = Dormitory::with([
                'room_images',
                'roomCharge',
                'guestCharge'
            ])->withCount(['rooms' => function ($query) {
                $query->where("room_status", DormitoryEnum::AVAILABLE->value);
            }])->where('id', $room_id)->get();

            return response()->json(['dormitory' => $dormitory], 200);
        });
    }

    /**
     * Summary of get_all_requests
     * @param Request $request
     */
    public function get_all_requests (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $room_requests = DormitoryTenant::with([
                'boarder',
                'dormitory_room',
                'dormitory_room.dormitory',
                'borrowedItems',
                'borrowedItems.inventory',
                'borrowedItems.items',
                'borrowedItems.items.item',
                'tenant_invoices'
            ]);

            if($request->userId) $room_requests->where('user_id', $request->userId);
            if($request->tenantStatus) $room_requests->whereIn('tenant_status', $request->tenantStatus);

            $rr = $request->traceNumber
                ? $room_requests->where('trace_number', $request->traceNumber)->first()
                : $room_requests->orderBy('created_at', 'DESC')->get();

            return response()->json(['room_requests' => $rr], 200);
        });
    }

    // DI SURE
    public function cancel_dorm_request (Request $request, int $dormReqId) {
        return TransactionUtil::transact(null, [], function() use ($request, $dormReqId) {
            $this_dorm_request = DormitoryTenant::where('id', $dormReqId)->lockForUpdate()->first();

            if(\in_array($this_dorm_request->tenant_status, [DormitoryEnum::CANCELLED->value, DormitoryEnum::FOR_PAYMENT->value])) {
                return response()->json(['message' => "Can't cancel request."], 422);
            } else {
                $this_dorm_request->tenant_status = DormitoryEnum::CANCELLED->value;
                $this_dorm_request->save();

                if($this_dorm_request->dormitory_room_id !== null) {
                    $dorm = DormitoryRoom::findOrFail($this_dorm_request->dormitory_room_id);
                    $dorm->room_status = DormitoryEnum::AVAILABLE->value;
                    $dorm->save();
                }

                foreach($this_dorm_request->borrowedItems as $item) {
                    $this_item1 = DormitoryItemBorrowing::findOrFail($item->id);
                    $this_item1->status = "DONE";
                    $this_item1->save();

                    foreach($item->items as $item2) {
                        $this_item2 = DormitoryItemBI::findOrFail($item2->id);
                        $this_item2->status = DormitoryEnum::CANCELLED->value;
                        $this_item2->save();

                        $this_item3 = DormitoryInventoryItem::where('id', $item2->dormitory_inventory_item_id)->get();
                        foreach($this_item3 as $item3) {
                            $item3->status = DormitoryEnum::AVAILABLE->value;
                            $item3->save();
                        }
                    }
                }

                Notifications::notify($request->user()->id, $this_dorm_request->user_id, "DORMITORY", "has cancelled your dormitory request.");
                AuditHelper::log($request->user()->id, AdministratorAuditActions::DORMITORYCTRL_CANCELLED_DORMITORYREQ->value."ID#$dormReqId");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorAuditActions::DORMITORYCTRL_CANCELLED_DORMITORYREQ->value. "ID#$dormReqId"], 200);
            }
        });
    }

    /**
     * Summary of update_provided_stock_status
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function update_provided_stock_status (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $a = DormitoryItemBorrowing::where('id', $request->documentId)->lockForUpdate()->first();
            $a->status = DormitoryEnum::ACTIVE->value;
            $a->save();

            foreach ($request->item as $item) {
                $this_stock = DormitoryItemBI::where('id', $item['id'])->first();

                $this_main_stock = DormitoryInventoryItem::where('id', $this_stock->dormitory_inventory_item_id)->lockForUpdate()->first();
                $this_main_stock->status = match ($item["status"]) {
                    DormitoryEnum::PENDING->value, DormitoryEnum::APPROVED->value => DormitoryEnum::RESERVED->value,
                    DormitoryEnum::CANCELLED->value => DormitoryEnum::AVAILABLE->value,
                    DormitoryEnum::RECEIVED->value => DormitoryEnum::BORROWED->value,
                    default => $item["status"],
                };
                $this_main_stock->save();

                $this_stock->status = $item["status"];
                $this_stock->save();
            }

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTCKSTATUS->value
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSTCKSTATUS->value], 200);
        });
    }

    /**
     * Summary of update_provided_stock_list
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function update_provided_stock_list (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $borrowing = DormitoryItemBorrowing::findOrFail($request->documentId);
            $borrowing->count = count($request->item);
            $borrowing->status = DormitoryEnum::ACTIVE->value;
            $borrowing->save();

            foreach ($request->item as $item) {
                $this_main_stock = DormitoryInventoryItem::where('id', $item)->lockForUpdate()->first();

                if($this_main_stock->status === DormitoryEnum::AVAILABLE->value) {
                    $this_main_stock->status = DormitoryEnum::RESERVED->value;
                    $this_main_stock->save();

                    $this_stock = new DormitoryItemBI;
                    $this_stock->dormitory_item_borrowing_id = $borrowing->id;
                    $this_stock->dormitory_inventory_item_id = $item;
                    $this_stock->save();
                }
            }

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST->value
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST->value], 200);
        });
    }

    /**
     * Summary of get_trainee_enrolled_trainings
     * @param Request $request
     */
    public function get_trainee_enrolled_trainings (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $user = User::findOrFail($request->userId);

            $enrolledDaysList = $user->trainee_enrolled_courses()
                ->whereIn('enrolled_course_status', ['RESERVED', 'ENROLLED', 'FOR-PAYMENT', 'PROCESSING PAYMENT'])
                ->with('training')
                ->get()
                ->flatMap(function($enrollment) {
                    return CarbonPeriod::create(
                        Carbon::parse($enrollment->training->schedule_from),
                        Carbon::parse($enrollment->training->schedule_to)
                    )->toArray();
                })
                ->map(fn($date) => $date->format('Y-m-d'))
                ->unique()
                ->values();

            $searchStart = Carbon::parse($request->dateFrom);
            $searchEnd = Carbon::parse($request->dateTo);
            $searchPeriod = CarbonPeriod::create($searchStart, $searchEnd);

            $dateRanges = [
                'trainee' => [],
                'guest'   => []
            ];

            foreach ($searchPeriod as $date) {
                $formattedDate = $date->format('Y-m-d');

                if ($enrolledDaysList->contains($formattedDate)) {
                    $dateRanges['trainee'][] = $formattedDate;
                } else {
                    $dateRanges['guest'][] = $formattedDate;
                }
            }

            return response()->json(['dateRanges' => $dateRanges], 200);
        });
    }

    /**
     * Summary of get_dormitory_charges
     * @param Request $request ok
     */
    public function get_dormitory_charges (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reqTemp = DormitoryInvoice::with([
                'tenant.boarder',
                'orNumber'
            ])->where('dormitory_tenant_id', $request->userId)->get();

            return response()->json(['dormitoryInvoices' => $reqTemp], 200);
        });
    }

    public function created_or_update_dormitory_charge (CreateOrUpdateDormitoryCharge $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $new_fine = $isPost ? new DormitoryInvoice() : DormitoryInvoice::find($request->documentId);

            if($isPost) {
                $new_fine->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-DRINV-');
                $new_fine->user_id = $request->userId;
                $new_fine->dormitory_tenant_id = $request->tenantId;
            } else {
                $new_fine->invoice_status = $request->status;
            }

            $new_fine->invoice_amount = $request->amount;
            $new_fine->description = $request->details;
            $new_fine->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYCHARGE->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYCHARGE->value). "ID#$new_fine->id");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => ($request->httpMethod == "POST" ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORY->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYCHARGE->value). "ID#$new_fine->id"], 201);
        });
    }

    /**
     * Summary of cancel_charge
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $chargeId
     */
    public function cancel_charge (Request $request, int $chargeId) {
        return TransactionUtil::transact(null, [], function() use ($request, $chargeId) {
            $this_charge = DormitoryInvoice::where('id', $chargeId)->lockForUpdate()->first();

            if(!\in_array($this_charge->invoice_status, [DormitoryEnum::PENDING->value])) {
                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYCHARGE->value], 200);
            } else {
                $this_charge->invoice_status = DormitoryEnum::CANCELLED->value;
                $this_charge->save();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_CANCELLED_DORMITORYCHARGE->value. " ID#$chargeId"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_CANCELLED_DORMITORYCHARGE->value. "ID#$chargeId"], 200);
            }
        });
    }

    /**
     * Summary of set_status
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function set_status (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $this_dormitory_tenant = DormitoryTenant::where('id', $request->documentId)->lockForUpdate()->first();
            $this_dormitory_tenant->tenant_status = $request->status;
            $this_dormitory_tenant->save();

            Notifications::notify($request->user()->id, $this_dormitory_tenant->user_id, "DORMITORY", "has updated your dormitory request.");
            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTATUS->value. " ID#$request->documentId"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORYSTATUS->value. "ID#$request->documentId"], 200);
        });
    }

    //edrascoe
    //provide stocks to boarder
    /**
     * Summary of provide_stocks_to_boarder
     * @param Request $request
     */
    public function provide_stocks_to_boarder(Request $request) {
        return TransactionUtil::transact(null, ["dormitory:inclusions:all"], function() use ($request) {
            $dormitoryTenantId = $request->dormitoryTenantId;
            $inventoryId       = $request->inventoryId;
            $stockIds          = $request->stockIds;

            $tenantRequest = DormitoryTenant::with([
                'boarder',
                'dormitory_room',
                'dormitory_room.dormitory',
            ])->findOrFail($dormitoryTenantId);

            $validStatuses = [
                DormitoryEnum::APPROVED->value,
                DormitoryEnum::ACTIVE->value,
                DormitoryEnum::RESERVED->value,
            ];

            if (!\in_array($tenantRequest->tenant_status, $validStatuses)) {
                return response()->json([
                    'message' => "Cannot provide stocks. Boarder request status is {$tenantRequest->tenant_status}."
                ], 409);
            }

            $inventory = DormitoryInventory::findOrFail($inventoryId);

            $provision = DormitoryItemBorrowing::firstOrNew([
                'dormitory_tenant_id'    => $dormitoryTenantId,
                'dormitory_inventory_id' => $inventoryId,
            ]);

            $provided    = [];
            $unavailable = [];

            foreach ($stockIds as $stockId) {
                $stock = DormitoryInventoryItem::where('id', $stockId)
                    ->where('dormitory_inventory_id', $inventoryId)
                    ->where('status', DormitoryEnum::AVAILABLE->value)
                    ->lockForUpdate()
                    ->first();

                if (!$stock) {
                    $unavailable[] = $stockId;
                    continue;
                }

                $stock->status = DormitoryEnum::RESERVED->value;
                $stock->save();

                $provided[] = $stock;
            }

            if (empty($provided)) {
                return response()->json([
                    'message'     => "No stocks were provided. All selected items are unavailable.",
                    'unavailable' => $unavailable,
                ], 409);
            }

            $existingCount    = $provision->exists ? $provision->items()->count() : 0;
            $provision->count  = $existingCount + \count($provided);
            $provision->status = DormitoryEnum::ACTIVE->value;
            $provision->save();

            foreach ($provided as $stock) {
                $provisionDetail                               = new DormitoryItemBI();
                $provisionDetail->dormitory_item_borrowing_id  = $provision->id;
                $provisionDetail->dormitory_inventory_item_id  = $stock->id;
                $provisionDetail->status                       = DormitoryEnum::APPROVED->value;
                $provisionDetail->save();
            }

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST->value . " for Tenant ID#$dormitoryTenantId"
            );

            if (env('USE_EVENT')) {
                event(new BEDormitory(''), new BEAuditTrail(''));
            }

            return response()->json([
                'message' => "Stocks successfully provided to Tenant: {$tenantRequest->boarder->fname} {$tenantRequest->boarder->lname}.",
                'boarder'     => [
                    'id'        => $tenantRequest->boarder->id,
                    'name'      => $tenantRequest->boarder->full_name,
                    'room'      => $tenantRequest->dormitory_room->room_name,
                    'dormitory' => $tenantRequest->dormitory_room->dormitory->room_name,
                    'status'    => $tenantRequest->tenant_status,
                ],
                'inventory'   => [
                    'id'   => $inventory->id,
                    'name' => $inventory->name,
                ],
                'provision'   => $provision,
                'provided'    => collect($provided)->map(fn($s) => [
                    'id'                => $s->id,
                    'unique_identifier' => $s->unique_identifier,
                    'status'            => $s->status,
                ]),
                'unavailable' => $unavailable,
            ], 201);
        });
    }

    /**
     * Summary of get_provided_stocks
     * @param Request $request
     */
    public function get_provided_stocks(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $dormitoryTenantId = $request->dormitoryTenantId;
            $inventoryId       = $request->inventoryId;

            $tenantRequest = DormitoryTenant::with([
                'boarder',
                'dormitory_room',
                'dormitory_room.dormitory',
            ])->findOrFail($dormitoryTenantId);

            $inventory = DormitoryInventory::findOrFail($inventoryId);

            $provision = DormitoryItemBorrowing::with(['items.item'])
                ->where('dormitory_tenant_id', $dormitoryTenantId)
                ->where('dormitory_inventory_id', $inventoryId)
                ->first();

            $stocks = $provision
                ?->items->map(fn($detail) => [
                    'stock_id'          => $detail->item->id,
                    'unique_identifier' => $detail->item->unique_identifier,
                    'status'            => $detail->item->status,
                    'provision_status'  => $detail->status,
                    'provided_at'       => $detail->created_at,
                ])->values() ?? collect([]);

            return response()->json([
                'boarder' => [
                    'id'        => $tenantRequest->boarder->id,
                    'name'      => "{$tenantRequest->boarder->fname} {$tenantRequest->boarder->lname}",
                    'room'      => $tenantRequest->dormitory_room?->room_name ?? 'No room assigned',
                    'dormitory' => $tenantRequest->dormitory_room?->dormitory?->room_name ?? 'No dormitory assigned',
                    'status'    => $tenantRequest->tenant_status,
                ],
                'inventory' => [
                    'id'            => $inventory->id,
                    'name'          => $inventory->name,
                    'total_provided' => $provision?->count ?? 0,  // ← total stocks provided
                ],
                'stocks' => $stocks,
            ], 200);
        });
    }

    /**
     * Summary of update_stock_status
     * @param Request $request (stockId required, status required)
     */
    // public function update_stock_status(Request $request) {
    //     return TransactionUtil::transact(null, [], function() use ($request) {
    //             $stockId = $request->stockId;
    //             $status  = $request->status;

    //             $provisionDetail = DormitoryItemBI::where('dormitory_inventory_item_id', $stockId)
    //                 ->lockForUpdate()
    //                 ->first();

    //             if (!$provisionDetail) {
    //                 return response()->json(['message' => "Stock provision detail not found."], 404);
    //             }

    //             $stock = DormitoryInventoryItem::where('id', $provisionDetail->dormitory_inventory_item_id)
    //                 ->lockForUpdate()
    //                 ->first();

    //             if (!$stock) {
    //                 return response()->json(['message' => "Stock not found."], 404);
    //             }

    //             if ($stock->status === DormitoryEnum::LOST->value) {
    //                 return response()->json([
    //                     'message' => "Stock ID#$stockId cannot be updated. Stock is already marked as LOST."
    //                 ], 409);
    //             }

    //             $oldStatus          = $stock->status;
    //             $oldProvisionStatus = $provisionDetail->status;

    //             $provisionDetail->status = $status;
    //             $provisionDetail->save();

    //             $stock->status = match($status) {
    //                 DormitoryEnum::RETURNED->value  => DormitoryEnum::AVAILABLE->value,
    //                 DormitoryEnum::CANCELLED->value => DormitoryEnum::AVAILABLE->value,
    //                 DormitoryEnum::RECEIVED->value  => DormitoryEnum::BORROWED->value,
    //                 DormitoryEnum::APPROVED->value  => DormitoryEnum::RESERVED->value,
    //                 DormitoryEnum::PENDING->value   => DormitoryEnum::RESERVED->value,
    //                 DormitoryEnum::DAMAGED->value   => DormitoryEnum::DAMAGED->value,
    //                 DormitoryEnum::LOST->value      => DormitoryEnum::LOST->value,
    //                 default                         => DormitoryEnum::UNAVAILABLE->value,
    //             };
    //             $stock->save();

    //             AuditHelper::log(
    //                 $request->user()->id,
    //                 "Stock ID#$stockId provision status changed from $oldProvisionStatus to $status"
    //             );

    //             if (env('USE_EVENT')) {
    //                 event(new BEDormitory(''), new BEAuditTrail(''));
    //             }
    //             return response()->json([
    //         'message' => "Stocks successfully provided to Tenant: {$tenantRequest->boarder->fname} {$tenantRequest->boarder->lname}.",
    //             'boarder'     => [
    //                 'id'        => $tenantRequest->boarder->id,
    //                 'name' => ($tenantRequest->boarder->fname ?? '') . ' ' . ($tenantRequest->boarder->lname ?? ''),
    //                 'room'      => $tenantRequest->dormitory_room->room_name,
    //                 'dormitory' => $tenantRequest->dormitory_room->dormitory->room_name,
    //                 'status'    => $tenantRequest->tenant_status,
    //             ],
    //             'inventory'   => [
    //                 'id'   => $inventory->id,
    //                 'name' => $inventory->name,
    //             ],
    //             'provision'   => $provision,
    //             'provided'    => collect($provided)->map(fn($s) => [
    //                 'id'                => $s->id,
    //                 'unique_identifier' => $s->unique_identifier,
    //                 'status'            => $s->status,
    //             ]),
    //             'unavailable' => $unavailable,
    //         ], 201);
    //     });
    // }

    //  show reserved stocks for boarder(?)
    // public function get_provided_stocks(Request $request) {
    //     return TransactionUtil::transact(null, [], function() use ($request) {
    //         $dormitoryTenantId = $request->dormitoryTenantId;
    //         $inventoryId       = $request->inventoryId;

    //         $tenantRequest = DormitoryTenant::with([
    //             'boarder',
    //             'dormitory_room',
    //             'dormitory_room.dormitory',
    //         ])->findOrFail($dormitoryTenantId);

    //         $inventory = DormitoryInventory::findOrFail($inventoryId);

    //         $provision = DormitoryItemBorrowing::with(['items.item'])
    //             ->where('dormitory_tenant_id', $dormitoryTenantId)
    //             ->where('dormitory_inventory_id', $inventoryId)
    //             ->first();

    //         $stocks = $provision
    //             ?->items->map(fn($detail) => [
    //                 'stock_id'          => $detail->item->id,
    //                 'unique_identifier' => $detail->item->unique_identifier,
    //                 'status'            => $detail->item->status,
    //                 'provision_status'  => $detail->status,
    //                 'provided_at'       => $detail->created_at,
    //             ])->values() ?? collect([]);

    //         return response()->json([
    //             'boarder' => [
    //                 'id'        => $tenantRequest->boarder->id,
    //                 'name'      => "{$tenantRequest->boarder->fname} {$tenantRequest->boarder->lname}",
    //                 'room'      => $tenantRequest->dormitory_room?->room_name ?? 'No room assigned',
    //                 'dormitory' => $tenantRequest->dormitory_room?->dormitory?->room_name ?? 'No dormitory assigned',
    //                 'status'    => $tenantRequest->tenant_status,
    //             ],
    //             'inventory' => [
    //                 'id'             => $inventory->id,
    //                 'name'           => $inventory->name,
    //                 'total_provided' => $provision?->count ?? 0,
    //             ],
    //             'stocks' => $stocks,
    //         ], 200);
    //     });
    // }

    /**
     * Summary of update_stock_status
     * @param Request $request (stockId required, status required)
     */
    public function update_stock_status(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $stockId = $request->stockId;
            $status  = $request->status;

            $provisionDetail = DormitoryItemBI::where('dormitory_inventory_item_id', $stockId)
                ->lockForUpdate()
                ->first();

            if (!$provisionDetail) {
                return response()->json(['message' => "Stock provision detail not found."], 404);
            }

            $stock = DormitoryInventoryItem::where('id', $provisionDetail->dormitory_inventory_item_id)
                ->lockForUpdate()
                ->first();

            if (!$stock) {
                return response()->json(['message' => "Stock not found."], 404);
            }

            if ($stock->status === DormitoryEnum::LOST->value) {
                return response()->json([
                    'message' => "Stock ID#$stockId cannot be updated. Stock is already marked as LOST."
                ], 409);
            }

            $oldStatus          = $stock->status;
            $oldProvisionStatus = $provisionDetail->status;

            $provisionDetail->status = $status;
            $provisionDetail->save();

            $stock->status = match($status) {
                DormitoryEnum::RETURNED->value  => DormitoryEnum::AVAILABLE->value,
                DormitoryEnum::CANCELLED->value => DormitoryEnum::AVAILABLE->value,
                DormitoryEnum::RECEIVED->value  => DormitoryEnum::BORROWED->value,
                DormitoryEnum::APPROVED->value  => DormitoryEnum::RESERVED->value,
                DormitoryEnum::PENDING->value   => DormitoryEnum::RESERVED->value,
                DormitoryEnum::DAMAGED->value   => DormitoryEnum::DAMAGED->value,
                DormitoryEnum::LOST->value      => DormitoryEnum::LOST->value,
                default                         => DormitoryEnum::UNAVAILABLE->value,
            };
            $stock->save();

            AuditHelper::log(
                $request->user()->id,
                "Stock ID#$stockId provision status changed from $oldProvisionStatus to $status"
            );

            if (env('USE_EVENT')) {
                event(new BEDormitory(''), new BEAuditTrail(''));
            }

            return response()->json([
                'message' => "Stock status updated successfully.",
                'stock'   => [
                    'stock_id'             => $stock->id,
                    'unique_identifier'    => $stock->unique_identifier,
                    'old_status'           => $oldStatus,
                    'new_status'           => $stock->status,
                    'old_provision_status' => $oldProvisionStatus,
                    'new_provision_status' => $provisionDetail->status,
                ]
            ], 200);
        });
    }
}
