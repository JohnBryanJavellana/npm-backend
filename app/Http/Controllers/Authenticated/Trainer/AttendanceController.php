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

    public function recordAttendance(Request $request)
    {
        $validated = $request->validate([
            'attendance_id' => 'required|exists:attendances,id',
            'training_id' => 'required|exists:trainings,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
        ]);

        $status = $validated['status'] ?? 'ABSENT';
        $today = now();

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
}
