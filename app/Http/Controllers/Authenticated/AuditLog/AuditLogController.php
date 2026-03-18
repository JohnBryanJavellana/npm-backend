<?php

namespace App\Http\Controllers\Authenticated\AuditLog;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuditLog\PaginationAuditViewRequest;
use App\Http\Resources\AuditLog\AuditLogResource;
use App\Models\AuditTrail;

class AuditLogController extends Controller
{
   public function getUserActivities(PaginationAuditViewRequest $request)
    {
    $validated = $request->validated();
    $perPage = $validated["per_page"] ?? 10;
    $search = $validated["search"] ?? null;
    // $filter = $validated["filter"] ?? null;
    $logs = AuditTrail::query()
        ->select("id","actions", "created_at")
        ->forUser($request->user()->id)
        // ->with("user:id,fname,lname,mname")
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where("actions", "like", "%{$search}%")
                ->orWhereDate("created_at","like", "{$search}");
                //   ->orWhere("user_id", "like", "%{$search}%")
                //   ->orWhereHas("user", function ($sub) use ($search) {
                //         $sub->where("fname", "like", "%{$search}%")
                //             ->orWhere("lname", "like", "%{$search}%")
                //             ->orWhere("mname", "like", "%{$search}%");
            });
        })

        // ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
        //     $query->whereBetween("created_at", [$dateFrom, $dateTo]);
        // })

        // ->when($dateFrom && !$dateTo, function ($query) use ($dateFrom) {
        //     $query->whereDate("created_at", ">=", $dateFrom);
        // })

        // ->when(!$dateFrom && $dateTo, function ($query) use ($dateTo) {
        //     $query->whereDate("created_at", "<=", $dateTo);
        // })

        ->latest("created_at")
        ->paginate($perPage ?? 10);

        return AuditLogResource::collection($logs);
    }
}
