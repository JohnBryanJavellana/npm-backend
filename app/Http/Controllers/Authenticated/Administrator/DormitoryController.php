<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Models\DormitoryInventoryItem;
use App\Models\DormitoryItemBI;
use App\Models\DormitoryItemBorrowing;
use App\Models\DormitoryReqService;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\Dormitory\{
    GetAvailableDorms,
    CreateOrUpdateDormitory,
    CreateOrUpdateRequest,
    CreateOrUpdateDormitoryInv,
    CreateOrUpdateService,
    CreateOrUpdateServiceReq
};
use Illuminate\Http\Request;
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    TransactionUtil,
    GenerateTrace
};
use App\Events\{BEDormitory, BEAuditTrail};
use App\Jobs\SaveAvatar;
use App\Models\{
    Dormitory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryRoomImage,
    DormitoryInventory,
    DormitoryService
};

class DormitoryController extends Controller
{
    public function dormitories (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $dormitories = Dormitory::withCount(['rooms' => function ($query) {
                $query->where("room_status", "AVAILABLE");
            }])->get();

            return response()->json(['dormitories' => $dormitories], 200);
        });
    }

    public function get_dormitory_rooms (Request $request, int $room_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $room_id) {
            $rooms = DormitoryRoom::withCount('hasData')
                ->where('dormitory_id', $room_id)
                ->get();

            return response()->json(['rooms' => $rooms], 200);
        });
    }

    public function create_or_update_dormitory (CreateOrUpdateDormitory $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_dormitory = $request->httpMethod === "POST"
                ? new Dormitory
                : Dormitory::find($request->documentId);

            $this_dormitory->user_id = $request->user()->id;
            $this_dormitory->room_name = $request->room_name;
            $this_dormitory->room_description = $request->room_description;
            $this_dormitory->room_cost = $request->room_cost;
            $this_dormitory->room_guest_cost = $request->room_guest_cost;
            $this_dormitory->room_fee_type = $request->room_fee_type;
            $this_dormitory->is_air_conditioned = $request->room_type;
            $this_dormitory->room_for_type = $request->room_for_type;
            if($request->room_status) $this_dormitory->room_status = $request->room_status;
            $this_dormitory->save();

            if($request->httpMethod === "POST"){
                $fixedRequest = $request->merge([
                    'insideJob' => true,
                    'dormitoryId' => $this_dormitory->id
                ]);
                $this->create_dormitory_rooms($fixedRequest);
            }

            if($request->data_room_image) {
                $room_images = DormitoryRoomImage::whereNotIn('id', $request->data_room_image)
                    ->where('dormitory_id', $request->documentId)
                    ->get();

                foreach($room_images as $item) {
                    if(file_exists(public_path('room-images/' . $item->filename))) {
                        unlink(public_path('room-images/' . $item->filename));
                    }

                    $item->delete();
                }
            }

            if($request->room_image) {
                foreach($request->room_image as $image) {
                    $room_image = new DormitoryRoomImage;
                    $room_image->dormitory_id = $this_dormitory->id;

                    $image_name = Str::uuid() . '-room-.png';
                    ConvertToBase64::generate($image, 'image', "room-images/$image_name");
                    $room_image->filename = $image_name;
                    $room_image->save();
                }
            }

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory. ID#" . $this_dormitory->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory. ID# " . $this_dormitory->id], 201);
        });
    }

    public function get_available_dorms (GetAvailableDorms $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $dorms = Dormitory::withCount('rooms')
                ->has('rooms')
                ->where([
                    'room_for_type' => $request->room_for_type,
                    'is_air_conditioned' => $request->room_type
                ])->get();

            return response()->json(['dorms' => $dorms], 200);
        });
    }

    public function get_available_supplies (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $availableSupplies = DormitoryInventory::withCount([
                'stock' => fn($query) => $query->whereIn('status', ['AVAILABLE'])
            ])->get()->map(function ($self) use ($request) {
                $availabilityStatus = (function() use ($self, $request) {
                    $checkIfReserved = $self->borrowings()
                        ->where('status', '!=', "DONE")
                        ->where('dormitory_tenant_id', $request->userId)
                        ->exists();

                    if ($checkIfReserved) {
                        return 'ADDED';
                    } else if ($self->stock()->whereIn('status', ['AVAILABLE'])->exists()) {
                        return 'AVAILABLE';
                    } else {
                        return 'OUT OF STOCK';
                    }
                })();

                $self->availabilityStatus = $availabilityStatus;
                return $self;
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

    public function get_available_rooms(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $targetRoomId = $request->roomId;

            $rooms = DormitoryRoom::where('dormitory_id', $request->dormId)
                ->orderByRaw("id = ? DESC", [$targetRoomId])
                ->orderBy('room_available_slot', 'DESC')
                ->get()
                ->map(function($room) {
                    $disabled = $room->hasData->filter(function($tenant) {
                        return !in_array($tenant->tenant_status, ["PENDING", "TERMINATED", "CANCELLED", "DECLINED"]);
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

    public function create_dormitory_rooms (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            if($request->room_count) {
                for($i = 0; $i < $request->room_count; $i++) {
                    $room = new DormitoryRoom;
                    $room->dormitory_id = $request->dormitoryId;
                    $room->room_slot = $request->room_slot;
                    $room->room_available_slot = $request->room_slot;
                    $room->save();
                }
            }

            return $request->insideJob ? true : response()->json(['message' => "You've added a dormitory room."], 201);
        });
    }

    public function remove_room (Request $request, int $room_id) {
        return TransactionUtil::transact($request, [], function() use ($request, $room_id) {
            $this_dorm = DormitoryRoom::withCount(['hasData'])->where('id', $room_id)->first();

            if($this_dorm->has_data_count > 0) {
                return response()->json(['message' => "Can't remove room. It already has connected data."], 200);
            } else {
                $this_dorm->delete();

                AuditHelper::log($request->user()->id, "Removed a dormitory room. ID#$room_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory room. ID#$room_id"], 200);
            }
        });
    }

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

    public function create_or_update_dormitory_inventory (CreateOrUpdateDormitoryInv $request) {
        return TransactionUtil::transact($request, ["inventoryItems", "dormitory:inclusions:all"], function() use ($request) {
            $dorm_inventory = $request->httpMethod === "POST"
                ? new DormitoryInventory
                : DormitoryInventory::find($request->documentId);

            $dorm_inventory->name = $request->name;
            $dorm_inventory->price = $request->amount;
            $dorm_inventory->description = $request->description;
            $dorm_inventory->is_consumable = $request->isConsumable;

            if($request->httpMethod === "POST") $dorm_inventory->control_number = GenerateTrace::createTraceNumber(DormitoryInventory::class, "-DI-", 'control_number');
            if(!is_null($request->filename) && $request->filename) {
                $filename = Str::uuid() . '.png';
                SaveAvatar::dispatch($request->filename, $filename, "dormitory/inventory/", false, true, $dorm_inventory->filename ?? '');
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

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory inventory. ID#$dorm_inventory->id");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json([
                'message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " dormitory room. ID#$dorm_inventory->id",
                'returnedData' => $dataToReturn
            ], 200);
        });
    }

    public function get_dormitory_inventory_stock (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $stock = DormitoryInventoryItem::withCount('borrowed')
                ->where('dormitory_inventory_id', $request->documentId)
                ->orderBy('status', 'ASC')
                ->get();

            return response()->json(['stocks' => $stock], 200);
        });
    }

    public function remove_dorm_inventory_stock (Request $request, int $stock_id) {
        return TransactionUtil::transact(null, ["inventoryItems"], function() use ($request, $stock_id) {
            $this_stock = DormitoryInventoryItem::withCount(['borrowed'])->where('id', $stock_id)->first();

            if($this_stock->borrowed_count > 0) {
                return response()->json(['message' => "Can't remove item. It already has connected data."], 200);
            } else {
                $this_stock->delete();
                AuditHelper::log($request->user()->id, "Removed a dormitory inventory item stock. ID#$stock_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory inventory item stock. ID#$stock_id"], 200);
            }
        });
    }

    public function remove_dorm_inventory (Request $request, int $inv_id) {
        return TransactionUtil::transact(null, ["inventoryItems"], function() use ($request, $inv_id) {
            $this_dorm = DormitoryInventory::withCount(['borrowings'])->where('id', $inv_id)->first();

            if($this_dorm->borrowings_count > 0) {
                return response()->json(['message' => "Can't remove item. It already has connected data."], 200);
            } else {
                if(file_exists(public_path("dormitory/inventory/" . $this_dorm->filename))) {
                    unlink(public_path("dormitory/inventory/" . $this_dorm->filename));
                }

                $this_dorm->delete();
                AuditHelper::log($request->user()->id, "Removed a dormitory inventory item. ID#$inv_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory inventory item. ID#$inv_id"], 200);
            }
        });
    }

    public function create_or_update_request (CreateOrUpdateRequest $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_dormitory_request = $request->httpMethod === "POST"
                ? new DormitoryTenant
                : DormitoryTenant::find($request->documentId);

            if($request->httpMethod === "POST") $this_dormitory_request->trace_number = GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-');
            $this_dormitory_request->user_id = $request->userId;
            $this_dormitory_request->room_for_type = $request->forType;
            $this_dormitory_request->single_accommodation = $request->single_accommodation;
            $this_dormitory_request->status_of_occupancy = $request->status_of_occupancy;
            $this_dormitory_request->is_air_conditioned = $request->isAirConditioned;
            $this_dormitory_request->purpose = $request->purpose;
            $this_dormitory_request->paying_guest = $request->payingGuest;
            $this_dormitory_request->process_type = $request->processType;

            if($request->status) $this_dormitory_request->tenant_status = $request->status;

            if($request->processType === "WALK-IN" && $request->choosenRoom) {
                $this_dormitory_request->tenant_from_date = $request->choosenRoom[0]['start'];
                $this_dormitory_request->tenant_to_date = $request->choosenRoom[0]['end'];
                $this_dormitory_request->dormitory_room_id = $request->choosenRoom[0]['roomId'];
                $this_dormitory_request->for_slot = ($request->single_accommodation === "YES" || $request->forType === "COUPLE")
                    ? '3'
                    : $request->choosenRoom[0]['slot'];
            } else {
                $this_dormitory_request->tenant_from_date = $request->fromDate;
                $this_dormitory_request->tenant_to_date = $request->toDate;
            }

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

            if($request->providedItem) {
                foreach($request->providedItem as $item) {
                    $checkIfCanAdd = DormitoryInventoryItem::where([
                        'dormitory_inventory_id' => $item['id'],
                        'status' => 'AVAILABLE'
                    ])->count();

                    if($checkIfCanAdd) {
                        $this_dormitory_item_request = new DormitoryItemBorrowing;
                        $this_dormitory_item_request->dormitory_tenant_id = $this_dormitory_request->id;
                        $this_dormitory_item_request->dormitory_inventory_id = $item['id'];
                        $this_dormitory_item_request->count = 0;
                        $this_dormitory_item_request->status = "PENDING";
                        $this_dormitory_item_request->save();
                    }
                }
            }

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory request. ID#" . $this_dormitory_request->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory request. ID# " . $this_dormitory_request->id], 201);
        });
    }

    public function get_dormitory_info (Request $request, int $room_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $room_id) {
            $dormitory = Dormitory::with(['room_images'])
                ->withCount(['rooms' => function ($query) {
                    $query->where("room_status", "AVAILABLE");
                }])->where('id', $room_id)->get();

            return response()->json(['dormitory' => $dormitory], 200);
        });
    }

    public function get_all_requests (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $room_requests = DormitoryTenant::with([
                'boarder',
                'dormitory_room',
                'dormitory_room.dormitory',
                'borrowedItems',
                'borrowedItems.inventory',
                'borrowedItems.items',
                'borrowedItems.items.item'
            ]);

            if($request->userId) $room_requests->where('user_id', $request->userId);
            if($request->tenantStatus) $room_requests->whereIn('tenant_status', $request->tenantStatus);

            $rr = $request->traceNumber
                ? $room_requests->where('trace_number', $request->traceNumber)->first()
                : $room_requests->orderBy('created_at', 'DESC')->get();

            return response()->json(['room_requests' => $rr], 200);
        });
    }

    public function cancel_dorm_request (Request $request, int $dormReqId) {
        return TransactionUtil::transact(null, [], function() use ($request, $dormReqId) {
            $this_dorm_request = DormitoryTenant::where('id', $dormReqId)->lockForUpdate()->first();

            if(!in_array($this_dorm_request->tenant_status, ["APPROVED", "PENDING", "CANCELLED"])) {
                return response()->json(['message' => "Can't cancel request."], 200);
            } else {
                $this_dorm_request->tenant_status = "CANCELLED";
                $this_dorm_request->save();

                if(!is_null($this_dorm_request->dormitory_room_id)) {
                    $dorm = DormitoryRoom::find($this_dorm_request->dormitory_room_id);

                    $dorm->room_available_slot = ($this_dorm_request->room_for_type === "COUPLE" || $this_dorm_request->single_accommodation)
                        ? 2
                        : 1;

                    $dorm->room_status = "AVAILABLE";
                    $dorm->save();
                }

                foreach($this_dorm_request->borrowedItems as $item) {
                    $this_item1 = DormitoryItemBorrowing::find($item->id);
                    $this_item1->status = "CANCELLED";
                    $this_item1->save();

                    foreach($item->items as $item2) {
                        $this_item2 = DormitoryItemBI::find($item2->id);
                        $this_item2->status = "CANCELLED";
                        $this_item2->save();

                        $this_item3 = DormitoryInventoryItem::where('id', $item2->dormitory_inventory_item_id)->get();
                        foreach($this_item3 as $item3) {
                            $item3->status = "AVAILABLE";
                            $item3->save();
                        }
                    }
                }

                AuditHelper::log($request->user()->id, "Cancelled a dormitory inventory item. ID#$dormReqId");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've cancelled dormitory inventory item. ID#$dormReqId"], 200);
            }
        });
    }

    public function services (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $services = DormitoryService::withCount('requestedService')->get();
            return response()->json(['services' => $services], 200);
        });
    }

    public function create_or_update_service (CreateOrUpdateService $request) {
        return TransactionUtil::transact($request, ["dormitory:services:all"], function() use ($request) {
            $this_service = $request->httpMethod === "POST"
                ? new DormitoryService
                : DormitoryService::find($request->documentId);

            $this_service->name = $request->name;
            $this_service->description = $request->description;
            $this_service->charge = $request->charge;
            if($request->status) $this_service->status = $request->status;
            $this_service->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory service. ID#" . $this_service->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory service. ID# " . $this_service->id], 201);
        });
    }

    public function remove_service (Request $request, int $service_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $service_id) {
            $this_service = DormitoryService::withCount(['requestedService'])->where('id', $service_id)->first();

            if($this_service->requested_service_count > 0) {
                return response()->json(['message' => "Can't remove service. It already has connected data."], 200);
            } else {
                $this_service->delete();
                AuditHelper::log($request->user()->id, "Removed a dormitory service. ID#$service_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory service. ID#$service_id"], 200);
            }
        });
    }

    public function update_provided_stock_status (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            foreach ($request->item as $item) {
                $this_stock = DormitoryItemBI::where('id', $item['id'])->first();
                $this_main_stock = DormitoryInventoryItem::where('id', $this_stock->dormitory_inventory_item_id)->lockForUpdate()->first();
                $this_main_stock->status = match ($item["status"]) {
                    "PENDING", "APPROVED" => "RESERVED",
                    "CANCELLED" => "AVAILABLE",
                    "RECEIVED" => "BORROWED",
                    default => $item["status"],
                };
                $this_main_stock->save();

                $this_stock->status = $item["status"];
                $this_stock->save();
            }

            AuditHelper::log($request->user()->id, "Updated provided item stock status.");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated provided item stock status"], 200);
        });
    }

    public function update_provided_stock_list (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $borrowing = DormitoryItemBorrowing::find($request->documentId);
            $borrowing->count = count($request->item);
            $borrowing->status = "ACTIVE";
            $borrowing->save();

            foreach ($request->item as $item) {
                $this_main_stock = DormitoryInventoryItem::where('id', $item)->lockForUpdate()->first();

                if($this_main_stock->status === "AVAILABLE") {
                    $this_main_stock->status = "RESERVED";
                    $this_main_stock->save();

                    $this_stock = new DormitoryItemBI;
                    $this_stock->dormitory_item_borrowing_id = $borrowing->id;
                    $this_stock->dormitory_inventory_item_id = $item;
                    $this_stock->save();
                }
            }

            AuditHelper::log($request->user()->id, "Updated provided item stock list.");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated provided item stock list"], 200);
        });
    }

    public function count_dorm_reservation (Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = DormitoryTenant::query();

            if($request->userId) {
                $reservations->where('user_id', $request->userId);
            }

            $get_count = function ($collection) {
                $count = $collection->count();
                return $count > 99 ? '99+' : $count;
            };

            $count = [
                'total'     => $get_count($reservations),
                'pending'   => $get_count($reservations->clone()->where('tenant_status', 'PENDING')),
                'approved'  => $get_count($reservations->clone()->whereIn('tenant_status', ['APPROVED', 'RESERVED'])),
                'active'    => $get_count($reservations->clone()->whereIn('tenant_status', ['ACTIVE', 'FOR PAYMENT', 'PAID', 'PROCESSING PAYMENT'])),
                'extending' => $get_count($reservations->clone()->where('tenant_status', 'EXTENDING')),
                'settled' => $get_count($reservations->clone()->whereIn('tenant_status', ['CANCELLED', 'REJECTED', 'TERMINATED'])),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    public function request_service (CreateOrUpdateServiceReq $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_service = $request->httpMethod === "POST"
                ? new DormitoryReqService()
                : DormitoryReqService::where('id', $request->documentId)->lockForUpdate()->first();

            $this_service->dormitory_tenant_id = $request->user_id;
            $this_service->dormitory_service_id = $request->service_id;
            $this_service->charge = $request->charge;
            $this_service->remarks = $request->remarks;
            if($request->status) $this_service->status = $request->status;
            $this_service->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory service request. ID#" . $this_service->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory service request. ID# " . $this_service->id], 201);
        });
    }

    public function get_requested_service (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reqTemp = DormitoryReqService::with([
                'services'
            ]);

            if($request->userId) {
                $reqTemp->where('dormitory_tenant_id', $request->userId);
            }

            if($request->status) {
                $reqTemp->where('status', $request->status);
            }

            $requestedServices = $reqTemp->get();

            return response()->json([
                'requestedServices' => $requestedServices
            ], 200);
        });
    }

    public function update_requested_service (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reqTemp = DormitoryReqService::where('id', $request->documentId)
                ->lockForUpdate()
                ->first();

            $reqTemp->status = $request->status;
            $reqTemp->save();

            AuditHelper::log($request->user()->id, "Updated requested service. ID#$request->documentId");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated requested service."], 200);
        });
    }
}
