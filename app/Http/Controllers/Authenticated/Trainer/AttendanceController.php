<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;

use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, QrReaderLocation};
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
    // public function test()
    // {
    //     return Attendance::all();
    // }

    public function CreateAttendance(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'user_id' => 'required|exists:users,id',
        ]);


        $today = now()->toDateString();


        $attendance = Attendance::where('training_id', $validated['training_id'])
            ->where('user_id', $validated['user_id'])
            ->whereDate('created_at', $today)
            ->first();

        if (!$attendance) {
            $attendance = Attendance::create([
                'training_id' => $validated['training_id'],
                'user_id' => $validated['user_id'],
                'training_date' => now(),
            ]);
        }

        return response()->json(['data' => $attendance], 200);
    }

    public function attendance_record(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
        ]);

        $attendanceRecord = AttendanceRecord::where('attendance_id', $validated['attendance_id'])
            ->where('user_id', $validated['user_id'])
            ->whereDate('created_at', $today)
            ->first();

        if ($attendanceRecord) {
            $attendanceRecord->update([
                'status' => $status,
                'time_in' => now(),
            ]);
        } else {
            $attendanceRecord = AttendanceRecord::create([
                'attendance_id' => $validated['attendance_id'],
                'user_id' => $validated['user_id'],
                'status' => $status,
                'time_in' => now(),
            ]);
        }

        return response()->json(['data' => $attendanceRecord], 200);
    }


    public function recordAttendanceByDate(Request $request)
    {
        $request->validate([
            'date' => 'not_required|date',
        ]);

        $records = AttendanceRecord::whereDate('created_at', $request->date)->get();

        return response()->json(['record' => $records], 200);
    }


    public function test()
    {
        return Attendance::all();
    }


    // public function recordAttendance(Request $request)
    // {
    //     // dd($request->all());


    //     $validated = $request->validate([

    //         'training_id' => 'required|exists:trainings,id',
    //         'user_id' => 'required|exists:users,id',
    //         'status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
    //     ]);

    //     $status = $validated['status'] ?? 'ABSENT';
    //     $today = now()->toDateString();


    //     $attendance = Attendance::where('training_id', $validated['training_id'])
    //         ->where('user_id', $validated['user_id'])
    //         ->whereDate('training_date', $today)
    //         ->first();

    //     if (!$attendance) {
    //         $attendance = Attendance::create([
    //             'training_id' => $validated['training_id'],
    //             'user_id' => $validated['user_id'],
    //             'training_date' => $today,
    //         ]);
    //     }



    //     $attendanceRecord = AttendanceRecord::where('attendance_id', $attendance->id)
    //         ->where('user_id', $validated['user_id'])
    //         ->whereDate('created_at', $today)
    //         ->first();

    //     if ($attendanceRecord) {
    //         $attendanceRecord->update([
    //             'status' => $status,
    //             'time_in' => now(),
    //         ]);
    //     } else {
    //         $attendanceRecord = AttendanceRecord::create([
    //             'attendance_id' => $attendance->id,
    //             'user_id' => $validated['user_id'],
    //             'status' => $status,
    //             'time_in' => now(),
    //         ]);
    //     }

    //     return response()->json(['data' => $attendanceRecord], 200);
    // }
}
