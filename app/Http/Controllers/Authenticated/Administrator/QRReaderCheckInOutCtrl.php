<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
     * Summary of get_log_in_out_records
     * @param Request $request
     */
    public function get_log_in_out_records(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            $userRole = $request->user()->role;

            if ($userRole !== UserRoleEnum::SUPERADMIN->value && $request->type) {
                $check = UserAssignedQrLocation::where('user_id', $request->user()->id)
                    ->with('qrLocation')
                    ->first();

                if ($check->qrLocation->whereIn('type', $request->type)) {
                    return response()->json(['message' => "We are sorry. You do not have enough permission to view records for " . implode(', ', $request->type)], 409);
                }
            }

            $records_temp = CheckInOutLog::with([
                'initiator',
                'qrLocation'
            ])->orderBy('created_at', 'DESC');

            $records = $request->type
                ? $records_temp->qrLocation()->whereIn('type', $request->type)->get()
                : $records_temp->get();

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

            $checkUserExistence = User::find($userId);

            if(!$checkUserExistence) {
                return response()->json(['message' => "We are sorry. We noticed that the user ($userId) is not yet in our user list."], 409);
            }

            $checkForUpdate = CheckInOutLog::where([
                'userId' => $userId,
                'qr_reader_location_id' => $qrLocation,
                'created_at' => $dateToday
            ]);

            if ($checkForUpdate->exists()) {
                $updateRecord = $checkForUpdate->first();
                $this->supplyDateTime($dateToday, $checkInOrOut, $updateRecord, strtolower($checkInOrOut));
                $updateRecord->save();
            } else {
                $newRecord = new CheckInOutLog();
                $newRecord->user_id = $userId;
                $newRecord->qr_reader_location_id = $qrLocation;
                $this->supplyDateTime($dateToday, $checkInOrOut, $newRecord, strtolower($checkInOrOut));
                $newRecord->save();
            }

            return response()->json(['message' => "Success!"], 200);
        });
    }

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
            $model->{$column} = $dateToday;
        } else {
            return response()->json(['message' => "We are sorry. It seems that the data provided is not valid."], 409);
        }
    }
}
