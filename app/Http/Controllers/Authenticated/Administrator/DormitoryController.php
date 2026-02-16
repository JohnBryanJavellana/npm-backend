<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};
use App\Http\Controllers\Controller;
use App\Models\DormitoryInventoryItem;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryItemBI;
use App\Models\DormitoryItemBorrowing;
use App\Models\DormitoryReqService;
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
    CreateOrUpdateServiceReq,
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
    Dormitory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryRoomImage,
    DormitoryInventory,
    DormitoryService,
    User,
    DormitoryTenantHistory
};

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

    /**
     * Summary of dormitories
     * @param Request $request
     */
    public function dormitories (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $dormitories = Dormitory::withCount([
                'rooms' => function ($query) {
                    $query->where("room_status", DormitoryEnum::AVAILABLE->value);
                }
            ])->withCount([
                'rooms'
            ])->get();

            return response()->json(['dormitories' => $dormitories], 200);
        });
    }

    /**
     * Summary of get_dormitory_rooms
     * @param Request $request
     * @param int $room_id
     */
    public function get_dormitory_rooms (Request $request, int $room_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $room_id) {
            $rooms = DormitoryRoom::withCount('hasData')
                ->where('dormitory_id', $room_id)
                ->get();

            return response()->json(['rooms' => $rooms], 200);
        });
    }

    /**
     * Summary of create_or_update_dormitory
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param CreateOrUpdateDormitory $request
     */
    public function create_or_update_dormitory (CreateOrUpdateDormitory $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $this_dormitory = $isPost ? new Dormitory() : Dormitory::findOrFail($request->documentId);
            $this_dormitory->room_name = $request->room_name;
            $this_dormitory->room_description = $request->room_description;
            $this_dormitory->room_cost = $request->room_cost;
            $this_dormitory->guest_cost = $request->room_guest_cost;
            $this_dormitory->room_fee_type = $request->room_fee_type;
            $this_dormitory->save();

            if($isPost){
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
                    $room_image = new DormitoryRoomImage();
                    $room_image->dormitory_id = $this_dormitory->id;

                    $image_name = Str::uuid() . '-room-.png';
                    ConvertToBase64::generate($image, 'image', "room-images/$image_name");
                    $room_image->filename = $image_name;
                    $room_image->save();
                }
            }

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORY->value : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#$this_dormitory->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => $isPost ? AdministratorReturnResponse::DORMITORYCTRL_CREATED_DORMITORY->value : AdministratorReturnResponse::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#$this_dormitory->id"], 201);
        });
    }

    /**
     * Summary of get_available_dorms
     * @param GetAvailableDorms $request
     */
    public function get_available_dorms (GetAvailableDorms $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            if($request->userId) {
                $checkForPending = DormitoryTenant::where('user_id', $request->userId)
                    ->whereIn('tenant_status', ['PENDING', 'APPROVED', 'EXTENDING', 'FOR PAYMENT', 'PAID', 'PROCESSING PAYMENT', 'ACTIVE', 'RESERVED'])
                    ->exists();

                if($checkForPending) {
                    return response()->json([
                        'dorms' => [],
                        'isValid' => false
                    ], 200);
                }
            }

            $dorms = Dormitory::withCount('rooms')
                ->has('rooms')
                ->where([
                    'is_air_conditioned' => $request->room_type
                ])->get();

            return response()->json(['dorms' => $dorms, 'isValid' => true], 200);
        });
    }

    /**
     * Summary of get_available_supplies
     * @param Request $request
     */
    public function get_available_supplies (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $availableSupplies = DormitoryInventory::withCount([
                'stock' => fn($query) => $query->whereIn('status', ['AVAILABLE'])
            ])->with([
                'charge'
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
                for($i = 0; $i < $request->room_count; $i++) {
                    $room = new DormitoryRoom;
                    $room->dormitory_id = $request->dormitoryId;
                    $room->room_name = "R$request->dormitoryId-" . $i + 1;
                    $room->room_slot = $request->room_slot;
                    $room->is_air_conditioned = "NO";
                    $room->room_available_slot = $request->room_slot;
                    $room->save();
                }
            }

            return $request->insideJob ? true : response()->json(['message' => "You've added a dormitory room"], 201);
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
            $this_room->is_air_conditioned = $request->is_air_conditioned;
            $this_room->remarks = $request->remarks === 'null' ? NULL : $request->remarks;
            $this_room->room_status = $request->status;
            $this_room->save();

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYR->value . " ID#$this_room->id"
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
     * Summary of remove_room
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $room_id
     */
    public function remove_room (Request $request, int $room_id) {
        return TransactionUtil::transact($request, [], function() use ($request, $room_id) {
            $this_dorm = DormitoryRoom::withCount(['hasData'])->where('id', $room_id)->first();

            if($this_dorm->has_data_count > 0) {
                return response()->json(['message' => "Can't remove room. It already has connected data"], 200);
            } else {
                $this_dorm->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYR->value . " ID#$room_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory room ID#$room_id"], 200);
            }
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
                SaveAvatar::dispatch($request->filename, $filename, "dormitory/inventory", false, true, $dorm_inventory->filename);
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
                'message' => "You've " . ($isPost ? 'created' : 'updated') . " dormitory room. ID#$dorm_inventory->id",
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
                ->orderBy('status', 'ASC')
                ->get();

            return response()->json(['stocks' => $stock], 200);
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
                return response()->json(['message' => "Can't remove item. It already has connected data"], 200);
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

                return response()->json(['message' => "You've removed dormitory inventory item stock ID#$stock_id"], 200);
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
                return response()->json(['message' => "Can't remove dorm inventory. It already has connected data"], 200);
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

                return response()->json(['message' => "You've removed dormitory inventory item. OKID#$inv_id"], 200);
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

                \Log::info("$totalGuestCharge -- $guestCount");

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

            if(!\in_array($this_dorm_request->tenant_status, [DormitoryEnum::PENDING->value, DormitoryEnum::CANCELLED->value, DormitoryEnum::FOR_PAYMENT->value])) {
                return response()->json(['message' => "Can't cancel request."], 422);
            } else {
                $this_dorm_request->tenant_status = DormitoryEnum::CANCELLED->value;
                $this_dorm_request->save();

                if(!is_null($this_dorm_request->dormitory_room_id)) {
                    $dorm = DormitoryRoom::findOrFail($this_dorm_request->dormitory_room_id);

                    $dorm->room_available_slot = ($this_dorm_request->room_for_type === DormitoryEnum::COUPLE->value || $this_dorm_request->single_accommodation)
                        ? 2
                        : 1;

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
                AuditHelper::log($request->user()->id, "Cancelled a dormitory request. ID#$dormReqId");

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've cancelled dormitory request. ID#$dormReqId"], 200);
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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateService $request
     */
    public function create_or_update_service (CreateOrUpdateService $request) {
        return TransactionUtil::transact($request, ["dormitory:services:all"], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $this_service = $isPost ? new DormitoryService() : DormitoryService::findOrFail($request->documentId);
            $this_service->name = $request->name;
            $this_service->description = $request->description;
            $this_service->charge = $request->charge;
            if($request->status) $this_service->status = $request->status;
            $this_service->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYSERV : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSERV . " ID#$this_service->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'created' : 'updated') . " a dormitory service. ID# " . $this_service->id], 201);
        });
    }

    /**
     * Summary of remove_service
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $service_id
     */
    public function remove_service (Request $request, int $service_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $service_id) {
            $this_service = DormitoryService::withCount(['requestedService'])->where('id', $service_id)->first();

            if($this_service->requested_service_count > 0) {
                return response()->json(['message' => "Can't remove service. It already has connected data"], 200);
            } else {
                $this_service->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYSERV . " ID#$service_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've removed dormitory service ID#$service_id"], 200);
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
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTCKSTATUS
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated provided item stock status"], 200);
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
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSTCKLIST
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated provided item stock list"], 200);
        });
    }

    /**
     * Summary of count_dorm_reservation
     * @param Request $request
     */
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
                'total' => $get_count($reservations),
                'pending' => $get_count($reservations->clone()->where('tenant_status', DormitoryEnum::PENDING->value)),
                'paid' => $get_count($reservations->clone()->where('tenant_status', DormitoryEnum::PAID->value)),
                'processing_payment' => $get_count($reservations->clone()->where('tenant_status', DormitoryEnum::PROCESSING_PAYMENT->value)),
                'approved' => $get_count($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::APPROVED->value, DormitoryEnum::RESERVED->value])),
                'active' => $get_count($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::ACTIVE->value, DormitoryEnum::FOR_PAYMENT->value, DormitoryEnum::PAID->value, DormitoryEnum::PROCESSING_PAYMENT->value])),
                'extending' => $get_count($reservations->clone()->where('tenant_status', DormitoryEnum::EXTENDING->value)),
                'settled' => $get_count($reservations->clone()->whereIn('tenant_status', [DormitoryEnum::CANCELLED->value, DormitoryEnum::REJECTED->value, DormitoryEnum::TERMINATED->value])),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    public function request_service (CreateOrUpdateServiceReq $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_service = $request->httpMethod === "POST"
                ? new DormitoryReqService()
                : DormitoryReqService::where('id', $request->documentId)->lockForUpdate()->first();

            $descriptionHtml = $this->addDescription(
        "<div style='display: flex; align-items: center; justify-content: space-between;'>
                    <div style='font-weight: bold; color: #6c757d;'>Service Charge</div>
                    <div>₱" . number_format((float) $request->charge) . "</div>
                </div>"
            );

            $invoiceId = $request->httpMethod === "POST"
                ? new DormitoryInvoice()
                : DormitoryInvoice::findOrFail($this_service->dormitory_invoices_id);

            $invoiceId->user_id = $request->userId;
            $invoiceId->dormitory_tenant_id = $request->tenantId;
            $invoiceId->charge_id = $request->chargeId;

            if($request->httpMethod === "POST") {
                $invoiceId->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-DRINV-');
                $invoiceId->isInitial = "N";
            }

            $invoiceId->description = $descriptionHtml;
            if($request->charge <= 0 && !\in_array($request->status, ["CANCELLED", "DECLINED"])) $invoiceId->invoice_status = "PAID";
            if($request->status === "CANCELLED") {;
                $invoiceId->invoice_status = "CANCELLED";
            }

            $invoiceId->total_amount = $request->charge;
            $invoiceId->remarks = $request->remarks;
            $invoiceId->save();

            $this_service->dormitory_tenant_id = $request->tenantId;
            $this_service->dormitory_service_id = $request->service_id;
            $this_service->charge = $request->charge;
            $this_service->remarks = $request->remarks;
            $this_service->status = $request->httpMethod === "POST" ? "APPROVED" : $request->status;
            $this_service->dormitory_invoices_id = $invoiceId->id;
            $this_service->save();

            Notifications::notify($request->user()->id, $request->userId, "DORMITORY", "We have ". ($request->httpMethod === "POST" ? 'created' : 'updated') . " a dormitory service request for you.");
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

    /**
     * Summary of get_requested_service
     * @param Request $request
     */
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

    /**
     * Summary of update_requested_service
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function update_requested_service (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reqTemp = DormitoryReqService::where('id', $request->documentId)
                ->lockForUpdate()
                ->first();

            $reqTemp->status = $request->status;
            $reqTemp->save();

            if($request->status === DormitoryEnum::CANCELLED->value) {
                $invoice = DormitoryInvoice::findOrFail($reqTemp->invoice()->id);
                $invoice->invoice_status = DormitoryEnum::CANCELLED->value;
                $invoice->save();
            }

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYREQSERV . " ID#$request->documentId"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated requested service"], 200);
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
            $charge = new DormitoryInvoice();

            $descriptionHtml = $this->addDescription(
           "<div style='display: flex; align-items: center; justify-content: space-between;'>
                    <div style='color: #6c757d;'>$request->details</div>
                    <div>₱" . number_format((float) $request->charge) . "</div>
                </div>"
            );

            $charge->user_id = $request->userId;
            $charge->dormitory_tenant_id = $request->tenantId;
            $charge->dormitory_room_id = $request->roomId;
            $charge->charge_id = $request->charge;
            $charge->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class, '-DRINV-');
            $charge->total_amount = $request->amount;
            $charge->description = $descriptionHtml;
            $charge->isInitial = "N";
            $charge->remarks = $request->remarks ?? '';
            if($request->charge <= 0) $charge->status = DormitoryEnum::PAID->value;
            $charge->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory charge. ID#" . $charge->id);

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory charge. ID# " . $charge->id], 201);
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
                return response()->json(['message' => "Can't cancel charge"], 200);
            } else {
                $this_charge->invoice_status = DormitoryEnum::CANCELLED->value;
                $this_charge->save();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::DORMITORYCTRL_CANCELLED_DORMITORYCHARGE . " ID#$chargeId"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                return response()->json(['message' => "You've cancelled dormitory chargeID#$chargeId"], 200);
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
                AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYREQ . " ID#$request->documentId"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEDormitory(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've updated dormitory request. OKID#$request->documentId"], 200);
        });
    }
}
