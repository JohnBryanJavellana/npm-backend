<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Utils\{
    TransactionUtil
};
use Carbon\Carbon;
use App\Http\Requests\Admin\QrReader\{
    CheckInOut
};
use App\Enums\UserRoleEnum;
use App\Enums\Administrator\{
    QrReaderEnum
};
use App\Models\{
    CheckInOutLog,
    QrReaderLocation,
    UserAssignedQrLocation,
    User
};

class QRReaderCheckInOutCtrl extends Controller
{
    /**
     * Summary of qrReader
     * @param Request $request
     */
    public function qrReader(Request $request)
    {
        return TransactionUtil::transact(null, [], function () {
            $locations = QRReaderLocation::all();
            return response()->json(['locations' => $locations], 200);
        });
    }

    /**
     * Summary of supplyDateTime
     * @param mixed $dateToday
     * @param mixed $checkInOrOut
     * @param mixed $model
     * @param mixed $column
     */
    private function supplyDateTime($dateToday, $checkInOrOut, $model, $column)
    {
        if (\in_array($checkInOrOut, [QrReaderEnum::CHECK_IN->value, QrReaderEnum::CHECK_OUT->value])) {
            return $model->{$column} = $dateToday;
        } else {
            return response()->json(['message' => "We are sorry. It seems that the data provided is not valid."], 409);
        }
    }

    /**
     * Summary of get_log_in_out_records
     * @param Request $request
     */
    public function get_log_in_out_records(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $userRole = $request->user()->role;
            $query = $request->q;
            $pageCounter = $request->pageCounter ?? 10;
            $type = $request->type;

            if ($userRole !== UserRoleEnum::SUPERADMIN->value && $request->type) {
                $check = UserAssignedQrLocation::where('user_id', $request->user()->id)
                    ->with('qrLocation')
                    ->first();

                if ($check->qrLocation->whereNotIn('type', $request->type)) {
                    return response()->json(['message' => "We are sorry. You do not have enough permission to view records for " . implode(', ', $request->type)], 409);
                }
            }

            $records_temp = CheckInOutLog::when($query, function($search) use ($query) {
                $search->where('purpose', 'LIKE', "%{$query}%")
                    ->orWhereRaw("DATE_FORMAT(check_in, '%M %e, %Y') LIKE ?", ["%{$query}%"])
                    ->orWhereRaw("DATE_FORMAT(check_out, '%M %e, %Y') LIKE ?", ["%{$query}%"])
                    ->whereHas('initiator', function($q2) use ($query) {
                        $q2->where('id', 'LIKE', "%{$query}%")
                            ->orWhere('fname', 'LIKE', "%{$query}%")
                            ->orWhere('mname', 'LIKE', "%{$query}%")
                            ->orWhere('lname', 'LIKE', "%{$query}%")
                            ->orWhere('suffix', 'LIKE', "%{$query}%");
                    });
            })->with([
                'initiator',
                'qrLocation'
            ])->orderBy('created_at', 'DESC');

            $records = $records_temp->when($type, function($query) use ($type) {
                $query->whereHas('qrLocation', fn($query1) => $query1->whereIn('type', $type));
            })->paginate($pageCounter);

            return response()->json(['records' => $records], 200);
        });
    }

    /**
     * Summary of check_in_out
     * @param CheckInOut $request
     */
    public function check_in_out(CheckInOut $request)
    {
        return TransactionUtil::transact($request, [], function () use ($request) {
            $dateToday = Carbon::now();
            $userId = $request->userId;
            $qrLocation = $request->qrLocation;
            $checkInOrOut = $request->checkInOrOut;

            $checkForUpdate = CheckInOutLog::where([
                'user_id' => $userId,
                'qr_reader_location_id' => $qrLocation,
            ])->whereDate('created_at', $dateToday->format('Y-m-d'));

            $record = $checkForUpdate->exists() ? $checkForUpdate->first() : new CheckInOutLog();
            $record->user_id = $userId;
            $record->qr_reader_location_id = $qrLocation;
            $this->supplyDateTime($dateToday, $checkInOrOut, $record, strtolower($checkInOrOut));
            $record->save();

            return response()->json(['message' => "Success!"], 200);
        });
    }
}
