<?php
namespace App\Services\QrReader;

use App\Models\CheckInOutLog;

class QrReaderService {
    public function __construct(
        protected CheckInOutLog $checkInOutLogModel
    ) {}

    public function getUserQrRecord($userId, $perPage)
    {
        return $this->checkInOutLogModel->query()
        ->select("id","user_id","qr_reader_location_id","check_in","check_out","purpose")
        ->with([
            "initiator:id,fname,lname,mname",
            "qrLocation:id,unit_name,location,type"
        ])
        ->where("user_id", $userId)
        ->paginate(3);
    }
}