<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BENotification;
use App\Events\BERecreational;
use App\Http\Controllers\Controller;
use App\Http\Requests\Recreational\CancelRecRequest;
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
use App\Utils\AuditHelper;
use App\Utils\Notifications;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TraineeRecreational extends Controller
{
    public function __construct(
        protected RecreationalService $recreationalService
    ){}

    public function viewRecRequestCount(Request $request)
    {
        return $this->recreationalService->getRecRequestCount($request->user()->id);
    }

    /**
     * Summary of viewEquipment
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
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

    /**
     * Summary of viewFacilities
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
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

    /**
     * Summary of getUserRecRequest
     * @param ViewUserRecRecord $request
     * @return \Illuminate\Http\JsonResponse
     */
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
                        'equipment_request.updatedByWhom',
                        'equipment_request.equipment.images',
                        'facility_request',
                        'facility_request.updatedByWhom',
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
     * Summary of getRecreationalRequest
     * @param ViewRecreationalRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Summary of cancelUnitsRequest
     * @param CancelRecRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function cancelUnitsRequest(CancelRecRequest $request)
    {
        $validated = $request->validated();
        try
        {
            $this->recreationalService->cancelRequests($validated);
            // AuditHelper::log($validated["user_id"], "User {$validated["user_id"]} has cancelled a recreational request.");
            // Notifications::notify($validated["user_id"], null, 'RECREATIONAL', 'has cancelled a recreational request.');

            return response()->json(["message" => "Success! Unit has been successfully cancelled."], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Request not found"], 404);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    /**
     * Summary of requestEquipment
     * @param RecreationalRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function requestEquipment(RecreationalRequest $request)
    {

        $validated = $request->validated();
        try
        {
            $this->recreationalService->storeRecreationalRequests($validated);


            AuditHelper::log($validated["user_id"], "User {$validated["user_id"]} has sent a recreational request.");
            Notifications::notify($validated["user_id"], null, 'RECREATIONAL', 'has sent a recreational request.');

            if(env("USE_EVENT")) {
                try
                {
                    event (
                        new BERecreational(''),
                    );
                }
                catch (\Exception $e) {

                }                
            }
            return response()->json(["message" => "Successfully sent a recreational request."], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (ModelNotFoundException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("requestEquipmentError", [$e]);
            return response()->json(["message" => "Something went wrong."], 500);
        }
    }

    public function checkUniqueIdentifier(Request $request)
    {
        \Log::info("messagecheckUniqueIdentifier", [$request->all()]);
        try
        {
            $exists = $this->recreationalService->isUniqueIdenfierExistV1($request);
            return response()->json(["data" => $exists], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 422);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}
