<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;

use App\Models\{User, Attendance, TransactionUtil, QrReaderLocation};
use Illuminate\Http\Request;
use App\Models\QrReaderEnum;
use App\Models\UserAssignedQrLocation;

use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
    public function test()
    {
        return Attendance::all();
    }

    // public function qrReader(Request $request)
    // {
    //     return User::transact(null, [], function () {
    //         $locations = QRReaderLocation::all();
    //         return response()->json(['locations' => $locations], 200);
    //     });
    // }

    // private function supplyDateTime($dateToday, $checkInOrOut, $model, $column)
    // {
    //     if (\in_array($checkInOrOut, [UserAssignedQrLocation::TIME_IN->value, UserAssignedQrLocation::TIME_OUT->value])) {
    //         return $model->{$column} = $dateToday;
    //     } else {
    //         return response()->json(['message' => "We are sorry. It seems that the data provided is not valid."], 409);
    //     }
    // }


    // public function get_log_in_out_records(Request $request)
    // {
    //     return TransactionUtil::transact(null, [], function () use ($request) {
    //         $userRole = $request->user()->role;

    //         if ($userRole !== UserRoleEnum::SUPERADMIN->value && $request->type) {
    //             $check = UserAssignedQrLocation::where('user_id', $request->user()->id)
    //                 ->with('qrLocation')
    //                 ->first();

    //             if ($check->qrLocation->whereNotIn('type', $request->type)) {
    //                 return response()->json(['message' => "We are sorry. You do not have enough permission to view records for " . implode(', ', $request->type)], 409);
    //             }
    //         }

    //         $records_temp = CheckInOutLog::with([
    //             'initiator',
    //             'qrLocation'
    //         ])->orderBy('created_at', 'DESC');

    //         $records = $request->type
    //             ? $records_temp->whereHas('qrLocation', function($query) use($request) {
    //                 $query->whereIn('type', $request->type);
    //             })->get()
    //             : $records_temp->get();

    //         return response()->json(['records' => $records], 200);
    //     });
    // }

    public function trainee_attendance(Request $request)
    {



        //     $sessions = Training::all();

        //     $data = [];

        //     foreach ($sessions as $session) {


        //         $totalTrainees = User::where('role', 'TRAINEE')
        //             ->where('training_id', $session->id)
        //             ->count();


        //         $presentCount = EnrolledCourse::where('training_id', $session->id)
        //             ->whereNotNull('check_in')
        //             ->count();

        //         $absentCount = $totalTrainees - $presentCount;

        //         $attendanceRate = $totalTrainees > 0
        //             ? round(($presentCount / $totalTrainees) * 100, 2)
        //             : 0;

        //         $data[] = [
        //             "session_id" => $session->id,
        //             "date" => $session->date,
        //             "total_trainees" => $totalTrainees,
        //             "present_count" => $presentCount,
        //             "absent_count" => $absentCount,
        //             "attendance_rate" => $attendanceRate,
        //         ];
        //     }

        //     return response()->json($data, 200);
    }
}
