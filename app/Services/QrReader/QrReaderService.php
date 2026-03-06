<?php
namespace App\Services\QrReader;

use App\Models\CheckInOutLog;

class QrReaderService {
    public function __construct(
        protected CheckInOutLog $checkInOutLogModel
    ) {}

    public function getUserQrRecord($userId, $perPage, $search, $filter)
    {
        return $this->checkInOutLogModel->query()
        ->select("id","user_id","qr_reader_location_id","check_in","check_out","purpose","created_at")
        ->with([
            "initiator:id,fname,lname,mname",
            "qrLocation:id,unit_name,location,type"
        ])
        ->where("user_id", $userId)
        ->when($filter, function($fil_query) use ($filter) {
            $fil_query->whereRelation("qrLocation", "type", $filter);
        })
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
            $q->where("id", "like", "%{$search}%")
            ->orWhere("check_in", "like", "%{$search}%")
            ->orWhere("check_out", "like", "%{$search}%")
            ->orWhereHas("qrLocation", function ($sub) use ($search) {
                $sub->where(function ($qq) use ($search) {
                    $qq->where("unit_name", "like", "%{$search}%")
                        ->orWhere("location", "like", "%{$search}%")
                        ->orWhere("type", "like", "%{$search}%");
                    });
                });
            });
        })        
        ->latest("created_at")
        ->paginate($perPage ?? 10);
    } 
}