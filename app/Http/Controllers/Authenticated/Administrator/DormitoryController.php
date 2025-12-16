<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\Dormitory\{
    GetAvailableRooms
};
use Illuminate\Http\Request;
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    TransactionUtil
};
use App\Events\{BEDormitory, BEAuditTrail};
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

    public function create_or_update_dormitory (Request $request) {
        $validations = [
            'room_name' => 'required|string',
            'room_type' => 'required|string',
            'room_for_type' => 'required|string',
            'room_description' => 'required|string',
            'room_cost' => 'required|numeric'
        ];

        if($request->httpMethod === "POST") {
            $validations['room_image'] = 'required';
            $validations['room_slot'] = 'required|numeric';
            $validations['room_count'] = 'required|numeric';
        }

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_dormitory = $request->httpMethod === "POST" ? new Dormitory : Dormitory::find($request->documentId);
                $this_dormitory->user_id = $request->user()->id;
                $this_dormitory->room_name = $request->room_name;
                $this_dormitory->room_description = $request->room_description;
                $this_dormitory->room_cost = $request->room_cost;
                $this_dormitory->room_fee_type = $request->room_fee_type;
                $this_dormitory->room_type = $request->room_type;
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

                AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a dormitory room. ID#" . $this_dormitory->id);

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEAuditTrail('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've " . ($request->httpMethod == "POST" ? 'created' : 'updated') . " a dormitory room. ID# " . $this_dormitory->id], 201);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
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

    public function get_available_rooms (GetAvailableRooms $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $rooms = Cache::remember('get_available_rooms', $ttl, function () use($request) {
                return DormitoryRoom::with([
                    'roomImages'
                ])->where([
                    'room_for_type' => $request->room_for_type,
                    'room_type' => $request->room_type
                ])->where('room_available_slot', '>', 0)->get();
            });

            return response()->json(['rooms' => $rooms], 200);
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

    // public function get_recommended_room (Request $request) {
    //     $rooms = DormitoryRoom::where([
    //         'room_for_type' => $request->room_for_type,
    //         'room_type' => $request->room_type
    //     ])->where('room_available_slot', '>', 0)->get();

    //     return response()->json(['rooms' => $rooms], 200);
    // }

    // public function remove_dormitory (Request $request, int $dormitory_id) {
    //     try {
    //         DB::beginTransaction();

    //         $this_dorm = DormitoryRoom::withCount(['tenants'])->where('id', $dormitory_id)->first();
    //         if($this_dorm->tenants_count > 0) {
    //             return response()->json(['message' => "Can't remove room. It already has connected data."], 200);
    //         } else {

    //             $dormitory = DormitoryRoom::find($dormitory_id);
    //             $dormitory->delete();

    //             $new_log = new AuditTrail;
    //             $new_log->user_id = $request->user()->id;
    //             $new_log->actions = "User has removed a dormitory. ID# $dormitory_id";
    //             $new_log->save();

    //             event(new BEDormitory(''));
    //             DB::commit();
    //             return response()->json(['message' => "You've removed dormitory. ID# $dormitory_id"], 200);
    //         }
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         return response()->json(['message' => $e->getMessage()], 500);
    //     }
    // }

    // public function update_status_dormitory (Request $request){
    //     $validations = [
    //         'documentId' => 'required',
    //         'status' => 'required',
    //         'from' => 'required|date',
    //         'to' => 'required|date',
    //         'room' => 'required'
    //     ];

    //     $validator = \Validator::make($request->all(), $validations);

    //     if ($validator->fails()) {
    //         return response()->json(['message' => $validator->errors()], 400);
    //     } else {
    //         try {
    //             DB::beginTransaction();

    //             $dormitory_request = DormitoryTenant::find($request->documentId);
    //             $dormitory_request->tenant_status = $request->status;
    //             $dormitory_request->tenant_from_date = $request->from;
    //             $dormitory_request->tenant_to_date = $request->to;
    //             $dormitory_request->dormitory_room_id = $request->room;
    //             $dormitory_request->save();

    //             if($request->status === "FOR PAYMENT") {
    //                 $dormitory_invoice = new DormitoryInvoice;
    //                 $dormitory_invoice->user_id = $dormitory_request->user_id;
    //                 $dormitory_invoice->dormitory_tenant_id = $dormitory_request->id;
    //                 $dormitory_invoice->dormitory_room_id = $request->room;
    //                 $dormitory_invoice->trace_number = GenerateTrace::createTraceNumber(DormitoryInvoice::class);

    //                 $enrolled_days = [];
    //                 $trainings = EnrolledCourse::with('training_schedule')->where([
    //                     'user_id' => $dormitory_request->user_id,
    //                     'enrolled_course_status' => 'ENROLLED'
    //                 ])->get();

    //                 foreach($trainings as $t) {
    //                     // data: $t month name (if month name is not same like if
    //                     // training_schedule_from is November 30, and training_schedule_to is December 1, it should be November 30 - December 1. but if not
    //                     // it should be only November 29 - 30), $t->training_schedule_from, $t->training_schedule_to
    //                     // append to enrolled_days.
    //                 }

    //                 $dormitory_invoice->description = "";

    //                 $dormitory_invoice->save();
    //                 DormitoryExtendRequest::where('dormitory_tenant_id', $dormitory_request->id)->delete();
    //             }

    //             if(in_array($request->status, ["APPROVED", "TERMINATED"])) {
    //                 $this_room = DormitoryRoom::find($request->room);
    //                 $this_room->room_available_slot = $request->status === "APPROVED"
    //                     ? ($this_room->room_available_slot - ($dormitory_request->room_for_type === "COUPLE" ? 2 : 1))
    //                     : ($this_room->room_available_slot + ($dormitory_request->room_for_type === "COUPLE" ? 2 : 1));
    //                 $this_room->save();
    //             }

    //             AuditHelper::log($request->user()->id, "Updated a dormitory request. ID#" . $request->documentId);

    //             event(
    //                 new BEDormitory(''),
    //                 new BEAuditTrail('')
    //             );
    //             DB::commit();
    //             return response()->json(['message' => "You've updated a dormitory request. ID#" . $request->documentId], 200);
    //         } catch (\Exception $e) {
    //             DB::rollback();
    //             return response()->json(['message'=> $e->getMessage()], 400);
    //         }
    //     }
    // }

    // public function get_tenants (Request $request, int $room_id) {
    //     $tenants = DormitoryTenant::with(['tenant'])->where('id', $room_id)->get();
    //     return response()->json(['tenants' => $tenants], 200);
    // }

    // public function get_tenants_invoices (Request $request, int $tenant_id) {
    //     $tenant_invoices = DormitoryInvoice::where('dormitory_tenant_id', $tenant_id)->get();
    //     return response()->json(['tenant_invoices' => $tenant_invoices], 200);
    // }

    // public function get_all_invoices (Request $request) {
    //     $invoices = DormitoryInvoice::with('tenant')->get();
    //     return response()->json(['invoices' => $invoices], 200);
    // }
}
