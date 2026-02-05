<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Utils\{
    TransactionUtil,
    AuditHelper,
    GenerateTrace,
    ConvertToBase64
};
use App\Models\{
    RARequestInfo,
    RAFacility,
    RAEquipments,
    RAEquipmentStock,
    RAEquipmentImage,
    RAFacilityImage
};
use App\Http\Requests\Admin\RecreationalActivity\{
    CreateOrUpdateEquipment,
    CreateOrUpdateFacility
};

class RecreationalActivityCtrl extends Controller
{
    /**
     * Summary of ra_requests
     * @param Request $request
     */
    public function ra_requests(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $ra_requests_temp = RARequestInfo::with(['requestor']);
            $ra_requests = $request->status
                ? $ra_requests_temp->whereIn('status', $request->status)
                : $ra_requests_temp;

            $ra_requests = $ra_requests->orderBy('created_at', 'DESC')->get();
            return response()->json(['ra_requests' => $ra_requests], 200);
        });
    }

    /**
     * Summary of ra_facilities
     * @param Request $request
     */
    public function ra_facilities(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $ra_facilities_temp = RAFacility::withCount(['hasData']);
            $ra_facilities = $request->documentId
                ? $ra_facilities_temp->with(['images'])->first()
                : $ra_facilities_temp->get();

            return response()->json(['ra_facilities' => $ra_facilities], 200);
        });
    }

    /**
     * Summary of ra_create_or_update_facility
     * @param CreateOrUpdateFacility $request
     */
    public function ra_create_or_update_facility(CreateOrUpdateFacility $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $this_facility = $isPost ? new RAFacility() : RAFacility::findOrFail($documentId);
            $this_facility->name = $request->name;
            $this_facility->additional_details = $request->additionalDetails;
            $this_facility->location = $request->location;
            $this_facility->open_time = $request->openTime;
            $this_facility->close_time = $request->closeTime;
            if($request->condition_status) $this_facility->condition_status = $request->condition_status;
            if($request->availability_status) $this_facility->availability_status = $request->availability_status;
            $this_facility->save();

            if($request->photos) {
                if($documentId) RAFacilityImage::where('r_a_facility_id', $documentId)->delete();

                foreach($request->photos as $photos){
                    $image_name = Str::uuid() . '.png';
                    ConvertToBase64::generate($photos, 'image', "recreational-activity/facility/image/$image_name");

                    $photo = new RAFacilityImage();
                    $photo->r_a_facility_id = $this_facility->id;
                    $photo->filename = $image_name;
                    $photo->save();
                }
            }

            AuditHelper::log($request->user()->id, ($isPost ? 'Created' : 'Updated') . " an facility. ID#" . $this_facility->id);
            return response()->json(['message' => "Success!"], 200);
        });
    }

    /**
     * Summary of ra_remove_facility
     * @param Request $request
     */
    public function ra_remove_facility(Request $request, int $facility_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $facility_id) {
            $this_facility = RAFacility::where('id', $facility_id)->withCount([
                'hasData'
            ])->first();

            if($this_facility->has_data_count > 0) {
                return response()->json(['message' => "Can't remove facility. It already has connected data."], 409);
            } else {
                $this_facility->delete();
                AuditHelper::log($request->user()->id, "Removed an facility. ID#$facility_id");
                return response()->json(['message' => "Success!"], 200);
            }
        });
    }

    /**
     * Summary of ra_equipments
     * @param Request $request
     */
    public function ra_equipments(Request $request) {
        return TransactionUtil::transact(null, [], function() use($request) {
            $ra_equipments_temp = RAEquipments::withCount(['hasData']);
            $ra_equipments = $request->documentId
                ? $ra_equipments_temp->with(['images', 'stocks'])->first()
                : $ra_equipments_temp->get();

            return response()->json(['ra_equipments' => $ra_equipments], 200);
        });
    }

    /**
     * Summary of ra_equipment_stock
     * @param Request $request
     */
    public function ra_equipment_stock(Request $request) {
        return TransactionUtil::transact(null, [], function() use($request) {
            $ra_equipment_stock = RAEquipmentStock::withCount(['hasData'])->get();
            return response()->json(['ra_equipment_stock' => $ra_equipment_stock], 200);
        });
    }

    /**
     * Summary of ra_remove_equipment_stock
     * @param Request $request
     * @param int $equipment_stock_id
     */
    public function ra_remove_equipment_stock(Request $request, int $equipment_stock_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $equipment_stock_id) {
            $this_equipment_stock = RAEquipmentStock::where('id', $equipment_stock_id)->withCount([
                'hasData'
            ])->first();

            if($this_equipment_stock->has_data_count > 0) {
                return response()->json(['message' => "Can't remove equipment stock. It already has connected data."], 409);
            } else {
                $this_equipment_stock->delete();
                AuditHelper::log($request->user()->id, "Removed an equipment stock. ID#$equipment_stock_id");
                return response()->json(['message' => "Success!"], 200);
            }
        });
    }

    /**
     * Summary of ra_create_or_update_equipment
     * @param CreateOrUpdateEquipment $request
     */
    public function ra_create_or_update_equipment(CreateOrUpdateEquipment $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $this_equipment = $isPost ? new RAEquipments() : RAEquipments::findOrFail($documentId);
            $this_equipment->name = $request->name;
            $this_equipment->additional_details = $request->additionalDetails;
            if($request->status) $this_equipment->status = $request->status;
            $this_equipment->save();

            if($request->stock) {
                $request->merge([
                    'insideJob' => true,
                    'r_a_equipments_id' => $this_equipment->id
                ]);

                $this->ra_equipment_create_stock($request);
            }

            if($request->photos) {
                if($documentId) RAEquipmentImage::where('r_a_equipments_id', $documentId)->delete();

                foreach($request->photos as $photos){
                    $image_name = Str::uuid() . '.png';
                    ConvertToBase64::generate($photos, 'image', "recreational-activity/equipment/image/$image_name");

                    $photo = new RAEquipmentImage();
                    $photo->r_a_equipments_id = $this_equipment->id;
                    $photo->filename = $image_name;
                    $photo->save();
                }
            }

            AuditHelper::log($request->user()->id, ($isPost ? 'Created' : 'Updated') . " an equipment. ID#" . $this_equipment->id);
            return response()->json(['message' => "Success!"], 200);
        });
    }

    /**
     * Summary of ra_equipment_create_stock
     * @param Request $request
     */
    private function ra_equipment_create_stock(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $stockData = [];

            if($request->stock) {
                for ($i = 0; $i < $request->stock; $i++) {
                    $new_equipment_stock_ui = GenerateTrace::createTraceNumber(RAEquipmentStock::class, '-RAE-', 'unique_identifier', 10, 99);

                    $book_copy = new RAEquipmentStock;
                    $book_copy->unique_identifier = $new_equipment_stock_ui;
                    $book_copy->r_a_equipments_id = $request->r_a_equipments_id;
                    $book_copy->save();

                    array_push($stockData, $new_equipment_stock_ui);
                }
            }

            return $request->insideJob ? $stockData : response()->json([
                'message' => "You've added an equipment stock",
                'returnedData' => $stockData
            ], 201);
        });
    }

    /**
     * Summary of ra_remove_equipment
     * @param Request $request
     */
    public function ra_remove_equipment(Request $request, int $equipment_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $equipment_id) {
            $this_equipment = RAEquipments::where('id', $equipment_id)->withCount([
                'hasData'
            ])->first();

            if($this_equipment->has_data_count > 0) {
                return response()->json(['message' => "Can't remove equipment. It already has connected data."], 409);
            } else {
                $this_equipment->delete();
                AuditHelper::log($request->user()->id, "Removed an equipment. ID#$equipment_id");
                return response()->json(['message' => "Success!"], 200);
            }
        });
    }
}
