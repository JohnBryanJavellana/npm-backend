<?php

namespace App\Http\Controllers\Authenticated\Trainer\Handouts;

use App\Enums\LMS\AssessmentHandoutResponseMessage;
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
        try
        {
            $userId = $request->user()->id;
            $this->LMSHandoutService->storeHandouts($request->validated(),$userId);
            return response()->json(["message" => "Handout uploaded successfully."], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }

    }
}
