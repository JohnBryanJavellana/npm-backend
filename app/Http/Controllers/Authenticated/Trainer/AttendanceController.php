<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;

use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, QrReaderLocation};
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{

    //!Store Data  //TimeIn
    public function attendance_record(Request $request)
    {
        $validated = $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'training_date' => 'required|date',
            'records' => 'required|array',
            'records.*.user_id' => 'required|exists:users,id',
            'records.*.status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
            'records.*.time_in' => 'nullable|date',
            // 'records.*.time_out' => 'nullable|date',
        ]);

        $responseData = [];

        $attendance = Attendance::firstOrCreate(
            [
                'training_id' => $validated['training_id'],
                'user_id' => $request->user()->id,
                'training_date' => $validated['training_date'],
            ]
        );

        foreach ($validated['records'] as $record) {
            $userId = $record['user_id'];
            $status = $record['status'] ?? 'ABSENT';
            $timeIn = Carbon::parse($record['time_in']) ?? now();
            // $timeOut = Carbon::parse($record['time_out']) ?? null;

            $attendanceRecord = AttendanceRecord::where('attendance_id', $attendance->id)
                ->where('user_id', $userId)
                ->whereDate('created_at', now()->toDateString())
                ->first();

            if ($attendanceRecord) {

                $attendanceRecord->update([
                    'status' => $status,
                    'time_in' => $timeIn,
                    // 'time_out' => $timeOut,
                ]);
            } else {

                $attendanceRecord = AttendanceRecord::create([
                    'attendance_id' => $attendance->id,
                    'user_id' => $userId,
                    'status' => $status,
                    'time_in' => $timeIn,
                    // 'time_out' => $timeOut,
                ]);
            }

            $responseData[] = $attendanceRecord;
        }

        return response()->json(['data' => $responseData], 200);
    }
    //! Time Out functipn
    public function attendance_timeOut(Request $request)
    {
        $validated = $request->validate([
            'attendance_id' => 'required|exists:attendances,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $record = AttendanceRecord::where($validated)
            ->whereDate('created_at', now())
            ->firstOrFail();

        $record->update(['time_out' => now()]);

        return response()->json($record);
    }

    public function attendanceByGroup()
    {
        $records = AttendanceRecord::with('attendance')->get();

        $grouped = $records->groupBy(function ($item) {
            return $item->attendance->training_date;
        })->map(function ($items) {
            return $items->map(function ($item) {
                return [
                    'training_id' => $item->attendance->training_id,
                    'user_id' => $item->user_id,
                    'status' => $item->status,
                    'time_in' => $item->time_in,
                    'time_out' => $item->time_out,
                ];
            });
        });
        return response()->json(['groupData' => $grouped], 200);
    }





    // public function recordAttendance(Request $request)
    // {



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
