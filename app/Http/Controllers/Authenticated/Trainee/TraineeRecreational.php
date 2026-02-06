<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Recreationals\ViewRecEquipment;
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
            return response()->json([$e], 500);
            return response()->json(["Something went wrong."], 500);
        }
    }


    public function requestEquipments(Request $request)
    {
        
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
