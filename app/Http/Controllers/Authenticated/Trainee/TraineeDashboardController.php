<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Dashboard\TraineeInvoiceResource;
use App\Http\Resources\Trainee\Dashboard\TraineeSchedulesResource;
use App\Models\User;
use App\Services\Trainee\Dashboard\TraineeDashboardService;
use Illuminate\Http\Request;

class TraineeDashboardController extends Controller
{
    public function __construct(
        protected TraineeDashboardService $traineeDashboardService
    )
    {}

    public function viewCalendarSchedules(Request $request)
    {
        try
        {
            $userId = $request->user()->id;
            $data = $this->traineeDashboardService->getCalendarSchedules($userId);
            return $data;
        }
        catch (\Exception $e) {
            \Log::error("viewCalendarSchedulesError", [$e->getMessage()]);
        }
    }

    public function viewAllInvoices(Request $request)
    {
        try
        {
            $userId = $request->user()->id;
            return new TraineeInvoiceResource($this->traineeDashboardService->getUserInvoices($userId));
        }
        catch (\Exception $e) {
            \Log::error("viewAllInvoicesError", [$e->getMessage()]);
            return response()->json([$e->getMessage()], 500);
        }
    }
}
