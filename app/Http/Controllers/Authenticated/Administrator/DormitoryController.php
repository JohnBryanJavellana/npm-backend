<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Models\DormitoryInventoryItem;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\Dormitory\{
    GetAvailableDorms,
    CreateOrUpdateDormitory,
    CreateOrUpdateRequest,
    CreateOrUpdateDormitoryInv
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
    DormitoryInventory
};

class DormitoryController extends Controller
{
    public function dormitories (Request $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $dormitories = Dormitory::withCount(['rooms' => function ($query) {
                $query->where("room_status", "AVAILABLE");
            }])->get();

            return response()->json(['dormitories' => $dormitories], 200);
        });
    }

    public function get_dormitory_rooms (Request $request, int $room_id) {
        return TransactionUtil::transact($request, [], function() use ($request, $room_id) {
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
            ->where([
                'room_for_type' => $request->room_for_type,
                'is_air_conditioned' => $request->room_type
            ])->get();

            return response()->json(['dorms' => $dorms], 200);
        });
    }

    public function get_available_rooms (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $dorms = DormitoryRoom::where('dormitory_id', $request->dormId)
                ->orderBy('room_available_slot', 'DESC')
                ->get();

            return response()->json(['rooms' => $dorms], 200);
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
        return TransactionUtil::transact(null, [], function() use ($request) {
            if($request->stock) {
                for($i = 0; $i < $request->stock; $i++) {
                    $room = new DormitoryInventoryItem;
                    $room->dormitory_inventory_id = $request->dormitoryInventoryId;
                    $room->unique_identifier = GenerateTrace::createTraceNumber(DormitoryInventoryItem::class, '-DIS-', 'unique_identifier');
                    $room->save();
                }
            }

            return $request->insideJob ? true : response()->json(['message' => "You've added a dormitory inventory stock."], 201);
        });
    }

    public function create_or_update_dormitory_inventory (CreateOrUpdateDormitoryInv $request) {
        return TransactionUtil::transact($request, ["inventoryItems"], function() use ($request) {
            $dorm_inventory = $request->httpMethod === "POST"
                ? new DormitoryInventory
                : DormitoryInventory::find($request->documentId);

            $dorm_inventory->name = $request->name;
            $dorm_inventory->description = $request->description;
            $dorm_inventory->is_consumable = $request->isConsumable;

            if($request->httpMethod === "POST") $dorm_inventory->control_number = GenerateTrace::createTraceNumber(DormitoryInventory::class, "-DI-", 'control_number');
            if(!is_null($request->filename)) {
                $filename = Str::uuid() . '.png';
                SaveAvatar::dispatch($request->filename, $filename, "dormitory/inventory/", false, true, $dorm_inventory->filename ?? '');
                $dorm_inventory->filename = $filename;
            }

            $dorm_inventory->save();

            if($request->stock) {
                $adjustedRequest = $request->merge([
                    "insideJob" => true,
                    "dormitoryInventoryId" => $dorm_inventory->id,
                ]);

                $this->create_dormitory_inventory_stock($adjustedRequest);
            }

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory inventory. ID#$dorm_inventory->id");

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " dormitory room. ID#$dorm_inventory->id"], 200);
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

            $this_dormitory_request->dormitory_room_id = $request->roomId;
            if($request->httpMethod === "POST") $this_dormitory_request->trace_number = GenerateTrace::createTraceNumber(DormitoryTenant::class, '-DR-');
            $this_dormitory_request->user_id = $request->userId;
            $this_dormitory_request->room_for_type = $request->forType;
            $this_dormitory_request->single_accommodation = $request->single_accommodation;
            $this_dormitory_request->status_of_occupancy = $request->status_of_occupancy;
            $this_dormitory_request->is_air_conditioned = $request->isAirConditioned;
            $this_dormitory_request->purpose = $request->purpose;
            $this_dormitory_request->process_type = $request->processType;
            $this_dormitory_request->tenant_from_date = $request->fromDate;
            $this_dormitory_request->tenant_to_date = $request->toDate;
            $this_dormitory_request->paying_guest = $request->payingGuest;

            if($request->forType === "COUPLE") {
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

            $this_dormitory_request->save();

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
        return TransactionUtil::transact($request, [], function() use ($request, $room_id) {
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
                'dormitory_room.dormitory'
            ]);

            if($request->tenantStatus) $room_requests->whereIn('tenant_status', $request->tenantStatus);

            $rr = $room_requests->orderBy('created_at', 'DESC')->get();
            return response()->json(['room_requests' => $rr], 200);
        });
    }
}
