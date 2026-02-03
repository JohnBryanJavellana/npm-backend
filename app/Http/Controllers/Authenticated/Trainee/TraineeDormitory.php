<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\RequestStatus;
use App\Events\BEDormitory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Dormitory\{CancelServiceRequest, CreateExtendRequest, CreateInclusionRequest, CreateServiceRequest, CreateTransferRequest, DormRoomRequest, RoomPreferRequest};
use App\Http\Resources\Trainee\Dormitory\{AvailableItemsResource, AvailableServicesResource, DApplicationResource, DAppliedRequest, DormRoomsResource, InclusionRequestsResource};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Utils\{AuditHelper, GenerateUniqueFilename, GenerateTrace, TransactionUtil};
use App\Models\{DormitoryRoom,
    DormitoryTenant,
    User,
    AuditTrail,
    DormitoryInvoice,
    DormitoryTenantHistory,
    DormitoryTransfer,
    DormitoryExtendRequest, DormitoryInventory, DormitoryItemBorrowing};
use App\Services\Trainee\Dormitory\{DormitoryRequestService, DormitoryTransferService, DormitoryExtraService, DormitoryExtendService, DormitoryInclusionService};
use App\Http\Resources\Trainee\Dormitory\ServiceRequestResource;
use DomainException;
use Illuminate\Support\Facades\Cache;

class TraineeDormitory extends Controller
{
    protected $long_ttl = 600;
    protected $short_ttl = 60;

    public const IN_PROGRESS = [
        'PENDING',
        'EXTENDING',
        'TRANSFERRED',
        'FOR PAYMENT',
        'PROCESSING PAYMENT',
    ];

    public const SUCCESS = [
        'APPROVED',
        'PAID',
    ];

    public const CLOSED = [
        'TERMINATED',
        'REJECTED',
        'CANCELLED',
    ];

    /**
     * Dependency injection
     */
    public function __construct(
        protected DormitoryRequestService $dormitory_service,
        protected DormitoryTransferService $dormitoryTransferService,
        protected DormitoryExtendService $dormitoryExtendService,
        protected DormitoryExtraService $dormitoryExtraService,
        protected DormitoryInclusionService $dormitoryInclusionService,
    ){}

    public function viewRecommendedRooms(RoomPreferRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $rooms = $this->dormitory_service->getRecommendedRoom($validated);
            return DormRoomsResource::collection($rooms);
        }
        catch (\Exception $e) {
        }
    }

    //for removal
    public function get_filtered_dorms (Request $request) {
        try {
            $cost = $request->cost;
            $dormitories = DormitoryRoom::with("room_images")
                ->where('room_status', 'ACTIVE')
                ->where('room_available_slot', '>', 0);

            if($cost) $dormitories = $dormitories->where('room_cost', '<=', $cost);

            $dorms = $dormitories->get();
            return response()->json(['dormitories' => $dorms], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function view_room_application (Request $request) {
        \Log::info("status_view", [$request->all()]);
        try {
            $applications = DormitoryTenant::forUser($request->user()->id)
            ->with([
                "dormitory_room.dormitory.room_images",
                "dormitory_room.dormitory"
            ]);

            if(empty($request->type)) $applications->whereNot("tenant_status", RequestStatus::CANCELLED->value);
            if($request->type) $applications->whereIn("tenant_status", $request->type);

            $apps = $applications->latest("created_at")->get();
            return DApplicationResource::collection($apps);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    
    public function count_book_reservation (Request $request){
        $reservations = DormitoryTenant::where('user_id', $request->user()->id);

        $get_count = function ($collection) {
            $count = $collection->count();
            return $count > 99 ? '99+' : $count;
        };

        $count = [
            'total'     => $get_count($reservations),
            'in_progress'   => $get_count($reservations->clone()->whereIn('tenant_status', $this::IN_PROGRESS)),
            'success'   => $get_count($reservations->clone()->whereIn('tenant_status', $this::SUCCESS)),
            'closed'   => $get_count($reservations->clone()->whereIn('tenant_status', $this::CLOSED)),
        ];

        return response()->json(['reservationCount' => $count], 200);
    }

    public function view_applied_dormitories (Request $request, $dormitory_id) {
        try {
            $dormitory_info = DormitoryTenant::with([
                'dormitory_room.dormitory.room_images',
                'transferRequest' => fn($q) => $q->latest("created_at"),
                'extendRequest' => fn($q) => $q->latest("created_at"),
                'tenant_invoices' => function($self) {
                    $self->orderBy('created_at', 'DESC');
                },
                'dormitory_histories' => function($self) {
                    $self->limit(5)->orderBy('created_at', 'DESC');
                },
            ])
            ->where([
                'trace_number' => $dormitory_id,
                'user_id' => $request->user()->id
            ])
            ->first();

            return new DAppliedRequest($dormitory_info);

        } catch (\Exception $e) {
            \Log::info("error", [$e]);
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function applied_dormitory_histories (Request $request, int $dormitory_id) {
        try {
            $histories = DormitoryTenantHistory::tenant($dormitory_id)->orderBy('created_at', 'DESC')->get();
            return response()->json(['histories' => $histories]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function dormitory_record (Request $request) {
        $dorm_record = DormitoryTenant::with(
            'dormitory_room',
            'tenant_invoices'
        )->where('user_id', $request->user()->id)->get()
        ->map(function($query) {
            return [
                'record' => $query,
                'totalDays' => $query->tenant_invoices->sum('invoice_days'),
                'totalPaidAmount' => $query->tenant_invoices->sum('invoice_amount'),
            ];
        })->values();

        return response()->json(['data' => $dorm_record]);
    }

    public function check_pending_request (Request $request) {
        try {
            $dorm = DormitoryTenant::where('user_id', $request->user()->id)
                ->with([
                    'dormitory_room.room_images'
                ])
                ->whereIn('tenant_status', ['PENDING', 'PROCESSING', 'APPROVED', 'PAID'])
                ->first();

        if ($dorm) {
            return response()->json(['data' => true, 'dorm' => $dorm]);
        } else {
            return response()->json(['data' => false, 'dorm' => null]);
        }
        } catch (\Exception $e) {
            return response()->json(["message"=> $e->getMessage()], 500);
        }
    }
    
    public function get_personal_dormitory (Request $request) {
        try {
            $user = User::findOrFail($request->user()->id);
            $dormitory = $user->trainee_dormitory()->with(['dormitory_room'])->get();

            return response()->json(['data' => $dormitory]);
        } catch (\Exception $e) {

            return response()->json(["error"=> $e->getMessage()], 500);
        }
    }

    /**
     * Methods for Dorm Extension
     */
    public function create_extend_request(CreateExtendRequest $request)
    {
        $validated = $request->validated();
        $userId = $request->user()->id;

        \Log::info("create_extend_request", [$request->all()]);

        try {

            $this->dormitoryExtendService->createExtendRequest($userId, $validated);
           
            if(env("USE_EVENT")) {
                event(new BEDormitory(''));
            }

            //additional email for sending a extension request
            AuditHelper::log($request->user()->id, "User {$request->user()->id} sent a dorm extension request.");
            return response()->json(['message' => "Your extension request has been successfully submitted for review."]);
        }
        catch (DomainException $e) {
            throw $e;
        }
         catch (\Exception $e) {
            \Log::error("Error: ", [$e->getMessage()]);
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function cancel_extend_request(Request $request, $id)
    {
        $user_id = $request->user()->id;
        try {
            $this->dormitoryExtendService->cancelExtendRequest($id, $user_id);

            AuditHelper::log($user_id, "User {$user_id} cancelled a book request.");

            return response()->json(["message" => "Your transfer request has been successfully cancelled."], 200);
        }
        catch (\Exception $e) {
            \Log::info("cancel_extend_request", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    /**
     * Methods for Dorm Transfer
     */
    public function create_transfer_request(CreateTransferRequest $request)
    {
        try {
            $userId = $request->user()->id;
            $validated = $request->validated();

            $this->dormitoryTransferService->createTransferRequest($validated, $userId);
        
            event(new BEDormitory(''));

            return response()->json(['message' => "Transfer request sent! We're processing your request and will update you soon."], 200);

        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function cancel_transfer_request(Request $request, $id)
    {
        $user_id = $request->user()->id;
        try {
            $this->dormitoryTransferService->cancelTransferRequest($id, $user_id);

            return response()->json(["message" => "Your transfer request has been successfully cancelled."], 200);
        }
        catch (\Exception $e) {
            \Log::info("cancel_extend_request", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    /**
     * Methods for Dorm Occupancy
     */
    public function request_tenant_room(DormRoomRequest $request) {
        // \Log::info("controller dorm", [$request->all()]);
        $user = $request->user();
        $validated = $request->validated();
        try {
            $this->dormitory_service->createRequest($validated, $user->id);
            
            if(env("USE_EVENT")) {
                event(new BEDormitory(''));
            }

            return response()->json(["message"=> 'Dormitory request sent successfully.'], 200);
        } catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error-send-reqesut", [$e->getMessage()]);
            return response()->json(["message"=> "An unexpected error occurred. Please try again."],500);
        }
    }
    public function remove_applied_dormitories (Request $request, int $dormitory_id) {
        try {
            $this->dormitory_service->cancelRequest($request, $dormitory_id);                                 

            if(env("USE_EVENT")) {
                event(new BEDormitory(''));
            }

            return response()->json(['message' => "Dormitory request cancelled successfully."], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("errorcanceldorm", [$e->getMessage()]);
            return response()->json(['message' => "An unexpected error occurred. Please try again. "], 500);
        }
    }

    /**
     * Methods for Dorm Inclusions
     */
    public function view_inclusion_request(Request $request, string $document_id)
    {
        try {
            $items = $this->dormitoryInclusionService->getUserInclusionRequest($document_id);
            return InclusionRequestsResource::collection($items);
        } catch (\Exception $e) {
            \Log::error("error_view_inclusion_request", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    public function view_available_items(Request $request)
    {
        try {
            $items = $this->dormitoryInclusionService->getAllItems();
            return AvailableItemsResource::collection($items);
        }
        catch (\Exception $e) {
            \Log::error("error_view_available_items", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }
    public function view_inclusion(Request $request, string $documentId)
    {
        try {
            $items = $this->dormitoryInclusionService->getUserInclusions($documentId);
            return response()->json(["items" => $items], 200);
        } catch (\Exception $e) {
            \Log::error("error_view_inclusion", [$e->getMessage()]);
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function request_inclusion(CreateInclusionRequest $request)
    {
        $user_id = $request->user()->id;
        $validated = $request->validated();
        try {
            $this->dormitoryInclusionService->createInclusionRequest($validated, $user_id);
            return response()->json(["message" => "You've have successfully sent items request!"], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error_request_inclusion", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again. "], 500);
        }
    }

    public function cancel_request_inclusion(Request $request)
    {
        $user_id = $request->user()->id;
        \Log::info("cancel_request_inclusion_passed", [$request->all()]);
        try {            
            $this->dormitoryInclusionService->cancelInclusionRequest($request->all(), $user_id);
        }
        catch (\Exception $e) {
            \Log::error("error_cancel_request_inclusion", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    /**
     * Methods for Dorm Service
     */
    public function view_service()
    {
        try {
            return AvailableServicesResource::collection($this->dormitoryExtraService->viewServices());
        } catch (\Exception $e) {
            \Log::error("error_view_service", [$e->getMessage()]);
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function user_service_request(Request $request, $document_id)
    {
        try {
            $records = $this->dormitoryExtraService->getUserServiceRequest($document_id, $request->status);

            return ServiceRequestResource::collection($records);
        } catch (\Exception $e) {
            \Log::error("error_user_service_request", [$e->getMessage()]);
            return response()->json([$e->getMessage()], 500);
        }
    } 

    public function create_service_request  (CreateServiceRequest $request)
    {
        $user_id = $request->user()->id;
        $validated = $request->validated();
        \Log::info("request_service", [$validated]);
        try {
            
            $this->dormitoryExtraService->createService($validated, $user_id);

            return response()->json(["message" => "Your service request has been sent successfully!"], 200);
        } 
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error_create_service_request", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    public function cancel_service_request(CancelServiceRequest $request)
    {
        $user_id = $request->user()->id;
        $validated = $request->validated();
        try {   
            $this->dormitoryExtraService->cancelService($validated['request_id'], $user_id);

            return response()->json(["message" => "Service request has cancelled successfully"], 200);
        } 
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error_cancel_service_request", [$e->getMessage()]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }


}
