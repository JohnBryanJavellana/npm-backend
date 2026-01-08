<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Services\Trainee\Credit\CreditService;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function __construct(
        public CreditService $creditService,
    )
    {}

    public function show(Request $request)
    {
        return response()->json(["data" => $this->creditService->getUserAudit($request->user()->id)], 200);
    }

    public function store($validated, $userId)
    {
        try {
            $this->creditService->storeUserAudit($validated, $userId);
        }
        catch (\Exception $e) {
            \Log::error("storeUserAudit", [$e]);
        }
    }
}
