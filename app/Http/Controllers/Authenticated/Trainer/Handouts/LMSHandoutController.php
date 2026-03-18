<?php

namespace App\Http\Controllers\Authenticated\Trainer\Handouts;

use App\Services\Trainer\LMS\TrainerHandout\LMSHandoutService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\LMS\Handout\storeHandoutsRequest;
use Illuminate\Http\Request;

class LMSHandoutController extends Controller
{
    public function __construct(
        protected LMSHandoutService $LMSHandoutService
    ) {}

    public function viewByCourseModule(Request $request)
    {
        try
        {
            // return $this->LMSHandoutService->storeHandouts();
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function store(storeHandoutsRequest $request)
    {
        $this->LMSHandoutService->storeHandouts($request->validated());
        return;
    }
}
