<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;

use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, QrReaderLocation};
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
    public function test()
    {
        return Attendance::all();
    }

    public function attendance_list_trainee()
    {
        $trainees = User::where('role', 'TRAINEE')
            ->with('attendance_records.attendance')
            ->where('enrolled_course_status', 'ENROLLED')
            ->get();

        return response()->json([
            "trainees_list" => $trainees,
        ], 200);
    }


}
