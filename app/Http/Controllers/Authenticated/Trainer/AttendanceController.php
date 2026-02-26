<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;

use App\Models\{User, Attendance, AttendanceRecord, QrReaderLocation};
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
/*************  ✨ Windsurf Command ⭐  *************/
/**
 * Returns all attendance records.
 *
 * @return \Illuminate\Database\Eloquent\Collection
 */
/*******  1ea9a542-a8a0-4d6e-897d-2eeaf4f86ff9  *******/
    public function test()
    {
        return Attendance::all();
    }


    public function scanQr(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'training_id' => 'required'
        ]);
        $user = User::where('student_id', $request->user_id)
            ->where('role', 'TRAINEE')
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid QR Code'
            ], 404);
        }
        $attendance = Attendance::where('training_id', $request->training_id)
            ->whereDate('training_date', now()->toDateString())
            ->first();
        if (!$attendance) {
            return response()->json([
                'message' => 'No training scheduled today'
            ], 404);
        }

        $record = AttendanceRecord::where('attendance_id', $attendance->id)
            ->where('user_id', $user->id)
            ->first();

        if (!$record) {
            AttendanceRecord::create([
                'attendance_id' => $attendance->id,
                'user_id' => $user->id,
                'status' => 'PRESENT',
                'time_in' => now(),
            ]);

            return response()->json([
                'message' => 'Time In recorded',
                'type' => 'TIME_IN'
            ]);
        }

        if (!$record->time_out) {
            $record->update([
                'time_out' => now()
            ]);

            return response()->json([
                'message' => 'Time Out recorded',
                'type' => 'TIME_OUT'
            ]);
        }

        return response()->json([
            'message' => 'Attendance already completed today'
        ], 400);
    }

    public function attendance_list_trainee(Request $request)
    {
        try {
            $record = User::with([
                'module.attendances',
                'module.attendance_records'
            ])
                ->where('id', $request->user_id)
                ->get();

            return response()->json([
                "trainee" => $record,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "message" => "Server Error",
                "error" => $e->getMessage()
            ], 500);
        }
    }
}
