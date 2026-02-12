<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recreational\RecreationalRequest;
use App\Http\Requests\Recreational\ViewRecreationalRequest;
use App\Http\Requests\Recreational\ViewUserRecRecord;
use App\Http\Resources\Recreational\ViewRecFacilities;
use App\Http\Resources\Trainee\Recreationals\ViewRecEquipment;
use App\Http\Resources\Trainee\Recreationals\ViewRecFacilities as RecreationalsViewRecFacilities;
use App\Models\Equipment;
use App\Models\RAEquipmentRequest;
use App\Models\RAEquipmentStock;
use App\Models\RAFacility;
use App\Models\RAFacilityRequest;
use App\Services\Trainee\Recreational\RecreationalService;
use Illuminate\Http\Request;

use App\Utils\TransactionUtil;
use App\Models\RARequestInfo;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TraineeRecreational extends Controller
{

    public function __construct(
        protected RecreationalService $recreationalService
    ){}
    public function viewEquipment(Request $request)
    {
        try
        {
            return ViewRecEquipment::collection($this->recreationalService->getEquipments());
        }
        catch (\Exception $e) {
            \Log::info("viewEquipmentError", [$e]);
            return response()->json([$e], 500);
            return response()->json(["Something went wrong."], 500);
        }
    }

    public function viewFacilities(Request $request)
    {
        try
        {
            return RecreationalsViewRecFacilities::collection($this->recreationalService->getFacilities());
        }
        catch (\Exception $e) {
            return response()->json([$e], 500);
        }
    }

    public function getUserRecRequest(ViewUserRecRecord $request)
    {
        $validated = $request->validated();
        $validated["userId"] = $request->user()->id ?? 202600001;
        \Log::info("validated", $validated);
        try
        {
            \Log::info("data", [$validated]);

            $data = $this->recreationalService->getUserRecRecord($validated);

            return response()->json(["data" => $data], 200);
        }
        catch (\Exception $e) {
            \Log::error("error_data", [$validated]);

            return response()->json(["message" => $e], 500);
        }
    }

    /**
     * Summary of get_recreational_request
     * fetching trainee records
     * @param Request $request
     */
    public function get_recreational_request(Request $request) {
        return TransactionUtil::transact(null, [], function() use($request) {
            $userId = $request->user()->id;
            $recRequests_temp = RARequestInfo::where('user_id', $userId)->orderBy('created_at', 'DESC');

            $recRequests = $request->status
                ? $recRequests_temp->whereIn('status', $request->status)
                : $recRequests_temp;

            $recRequests = $request->traceNumber
                ?  $recRequests->where('trace_number', $request->traceNumber)
                    ->with([
                        'equipment_request',
                        'equipment_request.equipment.images',
                        'facility_request',
                        'facility_request.facility.images',
                        'csm'
                        ])
                    ->get()
                    ->map(function($request) {
                        $grouped = $request->equipment_request->groupBy('r_a_equipments_id');

                        $request->grouped_equipment = $grouped->map(function($items) {
                            $first = $items->first();
                            $first->requested_qty = $items->count();
                            $first->requested_issued_qty = $items->whereNotNull('r_a_equipment_stock_id')->count();
                            return $first;
                        })->values();

                        return $request;
                    })
                    ->first()
                : $recRequests->get();

            return response()->json(['recRequests' => $recRequests], 200);
        });
    }

    /**
     * Summary of get_requested_equipments
     * @param Request $request
     */
    public function get_requested_equipments(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $raEquipmentRequests = RAEquipmentRequest::where([
                'r_a_request_info_id' => $request->rARequestInfoId,
                'r_a_equipments_id' => $request->rAEquipmentsId
            ])->with([
                'equipment_stock',
                'equipment.images'
            ])->get();

            return response()->json(['raEquipmentRequests' => $raEquipmentRequests], 200);
        });
    }

    public function getRecreationalRequest(ViewRecreationalRequest $request)
    {   
        $validated = $request->validated();
        try
        {
            $result = match ($validated["type"] ) {
                "EQUIPMENT" =>  $this->recreationalService->getEquipmentRequests($validated),
                "FACILITY" =>  $this->recreationalService->getFacilityRequests($validated)
            };
            return response()->json(['raEquipmentRequests' => $result], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function cancel_requested_units(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            \Log::info("deleteShit", [$request->all()]);
            $model = match ($request->documentType) {
                'EQUIPMENT'  => RAEquipmentRequest::class,
                'FACILITY' => RAFacilityRequest::class,
                default    => throw new \Exception("Invalid document type")
            };

            $thisRequest = $model::findOrFail($request->documentId);

            if(\in_array($thisRequest->status, ["CANCELLED", "RECEIVED"])) {
                return response()->json(['message' => "Cant cancel unit. It is already " . $thisRequest->status], 409);   
            } else {
                $thisRequest->status = "CANCELLED";
                $thisRequest->save();

                if($model instanceof RAEquipmentRequest) {
                    $mainStock = RAEquipmentStock::findOrFail($thisRequest->r_a_equipment_stock_id);
                    $mainStock->availability_status = "AVAILABLE";
                    $mainStock->save();   
                } else { 
                    $mainFacility = RAFacility::findOrFail($thisRequest->r_a_facility_id);
                    $mainFacility->availability_status = "AVAILABLE";
                    $mainFacility->save(); 
                }

                return response()->json(['message' => "Success! Unit has been cancelled."], 200); 
            }
        });
    }

    public function requestEquipment(RecreationalRequest $request)
    {

        $validated = $request->validated();
        try
        {
            $this->recreationalService->storeRecreationalRequests($validated);

            
            return response()->json(["message" => "Successfully sent a recreational request."], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Facility/Equipment unavailable"], 404);
        }
        catch (\Exception $e) {
            \Log::info("requestEquipmentError", [$e]);
            return response()->json(["message" => "Something went wrong."], 500);
        }
    }
}
