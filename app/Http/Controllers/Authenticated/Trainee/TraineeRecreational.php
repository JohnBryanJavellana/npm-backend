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
    public function viewEquipments(Request $request)
    {
        return ViewRecEquipment::collection($this->recreationalService->getEquipments());
    }

    public function requestEquipments(Request $request)
    {
        
    }
}
