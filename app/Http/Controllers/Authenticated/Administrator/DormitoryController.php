<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\Dormitory\{
    GetAvailableDorms,
    CreateOrUpdateDormitory,
    CreateOrUpdateRequest
};
use Illuminate\Http\Request;
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    TransactionUtil
};
use App\Events\{BEDormitory, BEAuditTrail};
use App\Jobs\SaveAvatar;
use App\Models\{
    Dormitory,
    DormitoryRoom,
    DormitoryTenant,
    DormitoryRoomImage,
};

class DormitoryController extends Controller
{
    public function dormitories (Request $request) {
        $dormitories = Dormitory::withCount(['rooms' => function ($query) {
            $query->where("room_status", "AVAILABLE");
        }])->get();
        return response()->json(['dormitories' => $dormitories], 200);
    }

    public function get_dormitory_rooms (Request $request, int $room_id) {
        $rooms = DormitoryRoom::withCount('hasData')
            ->where('dormitory_id', $room_id)
            ->get();

        return response()->json(['rooms' => $rooms], 200);
    }

    public function create_or_update_dormitory (CreateOrUpdateDormitory $request) {
        return TransactionUtil::transact($request, function() use ($request) {
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

    public function create_dormitory_rooms (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
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

    public function get_available_dorms (GetAvailableDorms $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $dorms = Dormitory::withCount('rooms')
            ->where([
                'room_for_type' => $request->room_for_type,
                'is_air_conditioned' => $request->room_type
            ])->get();

            return response()->json(['dorms' => $dorms], 200);
        });
    }

    public function get_available_rooms(Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $dorms = DormitoryRoom::where('dormitory_id', $request->dormId)
                ->orderBy('room_available_slot', 'DESC')
                ->get();

            return response()->json(['rooms' => $dorms], 200);
        });
    }

    public function create_or_update_request (CreateOrUpdateRequest $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_dormitory_request = $request->httpMethod === "POST"
                ? new DormitoryTenant
                : DormitoryTenant::find($request->documentId);

            $this_dormitory_request->dormitory_room_id = $request->roomId;
            $this_dormitory_request->user_id = $request->userId;
            $this_dormitory_request->room_for_type = $request->forType;
            $this_dormitory_request->single_occupancy = $request->single_occupancy;
            $this_dormitory_request->is_air_conditioned = $request->isAirConditioned;
            $this_dormitory_request->purpose = $request->purpose;
            $this_dormitory_request->process_type = $request->processType;
            $this_dormitory_request->tenant_from_date = $request->fromDate;
            $this_dormitory_request->tenant_to_date = $request->toDate;

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
        $dormitory = Dormitory::with(['room_images'])
            ->withCount(['rooms' => function ($query) {
                $query->where("room_status", "AVAILABLE");
            }])->where('id', $room_id)->get();

        return response()->json(['dormitory' => $dormitory], 200);
    }

    public function remove_room (Request $request, int $room_id) {
        try {
            DB::beginTransaction();

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

                DB::commit();
                return response()->json(['message' => "You've removed dormitory room. ID#$room_id"], 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function get_all_requests (Request $request) {
        $room_requests = DormitoryTenant::with([
            'trainee.additional_trainee_info',
            'trainee.additional_trainee_info.general_info',
            'trainee.additional_trainee_info.contact',
            'trainee.additional_trainee_info.trainee_registration_file',
            'trainee.additional_trainee_info.educational_attainment.main_course',
            'trainee.additional_trainee_info.educational_attainment.main_school',
            'trainee.additional_trainee_info.latest_shipboard_attainment',
            'trainee.latest_trainee_enrolled_courses.training_schedule',
            'dormitory_room',
            'extendRequest'
        ])->whereIn('tenant_status', $request->tenantStatus)->orderBy('created_at', 'DESC')->get();

        return response()->json(['room_requests' => $room_requests], 200);
    }
}
