<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BEDormitory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Dormitory\CreateTransferRequest;
use App\Http\Requests\Trainee\Dormitory\DormRoomRequest;
use App\Http\Resources\Trainee\Dormitory\DApplicationResource;
use App\Http\Resources\Trainee\Dormitory\DAppliedRequest;
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
use App\Services\Trainee\Dormitory\DormitoryExtendService;
use App\Services\Trainee\Dormitory\DormitoryRequestService;
use App\Services\Trainee\Dormitory\DormitoryTransferService;
use DomainException;

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
     * @param DormitoryRequestService $dormitoryService
     */
    public function __construct(
        protected DormitoryRequestService $dormitory_service,
        protected DormitoryTransferService $dormitoryTransferService
    ){}

    public function get_all_dormitories(Request $request) {
        $dormitories = DormitoryRoom::where("room_status", "ACTIVE")->get();
        return response()->json(['dormitories' => $dormitories], 200);
    }

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
            \Log::info("view", [$dormitory_id]);
            $dormitory_info = DormitoryTenant::with([
                'dormitory_room.dormitory.room_images',
                'transferRequest' => function($q) {
                    $q->where('status', 'PENDING');
                },
                'tenant_invoices' => function($self) {
                    $self->orderBy('created_at', 'DESC');
                },
                'dormitory_histories' => function($self) {
                    $self->limit(5)->orderBy('created_at', 'DESC');
                },
                'borrowedItems.items.item.itemInfo'
            ])
            ->where([
                'trace_number' => $dormitory_id,
                'user_id' => $request->user()->id
            ])
            ->get();

            return DAppliedRequest::collection($dormitory_info);

        } catch (\Exception $e) {
            \Log::info("error", [$e]);
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function applied_dormitory_histories (Request $request, int $dormitory_id) {
        try {
            $histories = DormitoryTenantHistory::where('dormitory_tenant_id', $dormitory_id)->orderBy('created_at', 'DESC')->get();
            return response()->json(['histories' => $histories]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function remove_applied_dormitories (Request $request, int $dormitory_id) {
        try {
            \Log::info("cancel dorm", [$dormitory_id]);

            $this->dormitory_service->cancelRequest($request, $dormitory_id);                                 

            event(new BEDormitory(''));

            return response()->json(['message' => "You've cancelled dormitory request application. ID# $dormitory_id"], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error cancel dorm", [$dormitory_id]);
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

    public function create_extend_request(Request $request)
    {
        \Log::info("Dorm.......: ", [$request->all(), $request->user()->id]);
        $validations = [
            'document_id' => 'required',
            'date' => 'required|date',
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            return response()->json(['message' => implode(',', $validator->errors()->getMessages())], 422);
        } else {
            try {
                DB::beginTransaction();

                //validations
                $pending_request = DormitoryTransfer::whereHas("tenant", function ($query) use ($request) {
                    $query->where('user_id', $request->user()->id);
                })
                ->whereIn('status', ['PENDING','APPROVED'])
                ->exists();

                if($pending_request) {
                    return response()->json([
                        "message" => "A pending or approved transfer request already exists. You may only submit a new request once the current one has been resolved."
                    ], 400);
                }

                $exist = DormitoryTenant::where([
                    "id" => $request->document_id,
                    "tenant_status" => "APPROVED",
                    "user_id" => $request->user()->id
                ])->exists();

                if(!$exist) {
                    return response()->json([
                        "message" => "No active tenant record was found. Room transfer requests can only be made by active tenants."
                    ], 400);
                }

                //tenant update
                $dorm_record = DormitoryTenant::findOrFail($request->document_id);
                $dorm_record->tenant_status = "EXTENDING";
                $dorm_record->save();

                //create request
                $record = new DormitoryExtendRequest;
                $record->dormitory_tenant_id = $request->document_id;
                $record->date_of_extension = $request->date;
                $record->save();

                //create history
                $dormitory_tenant_history = new DormitoryTenantHistory;
                $dormitory_tenant_history->dormitory_tenant_id = $request->document_id;
                $dormitory_tenant_history->history_reason = "A Dormitory Extension Request has been created, extending the stay until {$request->date}.";
                $dormitory_tenant_history->save();

                if(env("USE_EVENT")) {
                    event(new BEDormitory(''));
                }

                //additional email for sending a extension request

                AuditHelper::log($request->user()->id, "User {$request->user()->id} sent a dorm extension request.");

                DB::commit();
                return response()->json(['message' => "Your extension request has been successfully submitted for review."]);

            } catch (\Exception $e) {
                \Log::error("Error: ", [$e->getMessage()]);
                DB::rollBack();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function create_transfer_request(CreateTransferRequest $request)
    {
        try {
            $userId = $request->user()->id;
            $validated = $request->validated();

            $this->dormitoryTransferService->createTransfer($validated, $userId);
        
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

    public function cancel_request(Request $request, Int $id)
    {
        try {
            DB::beginTransaction();

            $user_id = $request->user()->id;
            $allowedTypes = [
                'DormitoryTransfer' => "DormitoryTransfer",
                'DormitoryExtendRequest' => $this->dormitoryTransferService,
            ];

            if (!array_key_exists($request->type, $allowedTypes)) {
                return response()->json([
                    'message' => 'Cancellation failed due to an unexpected error. Please try again.'
                ], 404);
            }

            switch ($allowedTypes[$request->type]) {
                case 'DormitoryTransfer':
                    $this->dormitoryTransferService->cancelTransfer($id, $user_id);
                    break;
                case 'DormitoryExtendRequest':
                    //change for extension
                    $this->dormitoryTransferService->cancelTransfer($id, $user_id);
                    break;
            }

            if(env("USE_EVENT")) {
                event(new BEDormitory(''));
            }

            DB::commit();

            return response()->json([
                'message' => "Your transfer request has been successfully cancelled."
            ], 200);
        } catch (\Exception $e){
            DB::rollBack();
            return response()->json([
                'message' => "Cancellation failed due to an unexpected error. Please try again."
            ], 500);
        }
    }

    /**
     * Summary of request_tenant_room
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function request_tenant_room(DormRoomRequest $request) {
        \Log::info("controller dorm", [$request->all()]);
        // return response()->json(["wow" => $request->all()], 200);
        $user = $request->user();
        $validated = $request->validated();

        try {
            DB::beginTransaction();

            $this->dormitory_service->createDormRequest($validated, $user->id);

            if(env("USE_EVENT")) {
                event(new BEDormitory(''));
            }

            DB::commit();
            return response()->json(["message"=> 'Dormitory request sent successfully.'], 200);

        } catch (\DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("error-send-reqesut", [$e]);
            DB::rollBack();
            return response()->json(["message"=> $e->getMessage()],500);
        }
    }

    public function update_status_dormitory (Request $request){
        $validations = [
            'status' => 'required',
            'document_id' => 'required'
        ];
        $validator = \Validator::make($request->all(), $validations);

        if ($validator->fails()) {
            return response()->json(['message'=> $validator->errors()], 400);
        } else {
            try {
                $dormitory_record = DormitoryTenant::where([
                    'id' => $request->document_id,
                    'user_id' => $request->user()->id
                ])->first();

                if ($dormitory_record->room_for_type === "COUPLE" &&
                    $request->status === "CANCELLED" &&
                    file_exists(public_path('marriage-files/' . $dormitory_record->filename))
                ) {
                    unlink(public_path('marriage-files/' . $dormitory_record->filename));
                }

                $dormitory_record->tenant_status = $request->status;
                $dormitory_record->save();

                if(env("USE_EVENT")) {
                    event(new BEDormitory(''));
                }

                AuditHelper::log($request->user()->id, "User {$request->user()->id} updated a dorm request.");

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message'=> $e->getMessage()], 400);
            }
        }
    }

    public function update_dorm_invoice(Request $request) {
        \Log::info("paid", [$request->all()]);
        $validations = [
            'id' => 'required',
            'total_cost'=> 'required',
            'ref_number'=> 'required',
            'payment_type'=> 'required',
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()){
            $errors = $validator->errors()->messages();
            return response()->json(['message' => implode(', ', $errors)],400);
        } else {
            try {
                DB::beginTransaction();

                $exist = DormitoryInvoice::where([
                    "invoice_status" => "FOR-VERIFICATION",
                    "user_id" => $request->user()->id
                ])->exists();

                if($exist) {
                    return response()->json(["message" => "You still have a pending request under verification. Please wait for approval before submitting a new one."]);
                }

                $record = DormitoryInvoice::with(['room'])->find($request->id);
                $room_request = $request->httpMethod === "POST" ? new DormitoryInvoice : $record;
                $days = $request->number_of_days_to_pay;

                if($request->httpMethod == "POST") {
                    $room_request->user_id = $request->user()->id;
                    $room_request->dormitory_tenant_id = $record->dormitory_tenant_id;
                    $room_request->dormitory_room_id = $record->dormitory_room_id;
                    $room_request->invoice_completedays = ($record->invoice_completedays - $record->invoice_days);
                }

                $room_request->payment_type = $request->payment_type;
                $room_request->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class);
                $room_request->invoice_status = "FOR-VERIFICATION";
                $room_request->invoice_amount = $request->total_cost;
                $room_request->invoice_days = $days;
                $room_request->invoice_balance = $record->invoice_balance > 0
                        ? ($record->invoice_balance - $request->total_cost)
                        : $request->total_cost * ($record->invoice_completedays - $days);
                $room_request->invoice_reference = $request->ref_number;
                $room_request->save();

                $inv2 = DormitoryTenant::find($record->dormitory_tenant_id);
                $inv2->tenant_status = "PROCESSING PAYMENT";
                $inv2->save();

                $dormitory_tenant_history = new DormitoryTenantHistory;
                $dormitory_tenant_history->dormitory_tenant_id = $record->dormitory_tenant_id;
                $dormitory_tenant_history->history_reason = "Your payment of ₱{$request->total_cost} has been sent for verification. This request covers {$days} day(s).";
                $dormitory_tenant_history->save();

                if(env("USE_EVENT")) {
                    event(new BEDormitory(''));
                }

                AuditHelper::log($request->user()->id, "User " . $request->user()->id . " has proceed Dorm payment for verification.");

                DB::commit();
                return response()->json(['message'=> 'Payment Sent Successfully'], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['message'=> $e->getMessage()],500);
            }
        }
    }
}
