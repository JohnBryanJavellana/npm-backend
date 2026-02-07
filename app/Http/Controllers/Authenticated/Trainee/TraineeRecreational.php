<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recreational\RecreationalRequest;
use App\Http\Resources\Recreational\ViewRecFacilities;
use App\Http\Resources\Trainee\Recreationals\ViewRecEquipment;
use App\Http\Resources\Trainee\Recreationals\ViewRecFacilities as RecreationalsViewRecFacilities;
use App\Models\Equipment;
use App\Services\Trainee\Recreational\RecreationalService;
use Illuminate\Http\Request;

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


    public function requestEquipment(RecreationalRequest $request)
    {
        // return response()->json(["wow"], 200);

        $validated = $request->validated();
        try
        {
            return $this->recreationalService->storeRecreationalRequests($validated);
        }
        catch (\Exception $e) {
            \Log::info("requestEquipmentError", [$e]);
            return response()->json([$e], 500);
            return response()->json(["Something went wrong."], 500);
        }
    }

    public function cancelRequests(Request $request)
    {
        return;
    }

    /**
     * 
     * FACILITIES
     * create a get API for facilities together with its related equipment.
     * 
     * 
     * 
     * EQUIPMENTS
     * 
     **/
}
