<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Enums\RequestStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\Trainer\AttendanceRecordResource;
use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, Training};
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
    public function attendance_record(Request $request)
    {
        $validated = $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'training_date' => 'required|date',
            'records' => 'required|array',
            'records.*.user_id' => 'required|exists:users,id',
            'records.*.status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
            'records.*.time_in' => 'nullable|date',
            'records.*.time_out' => 'nullable|date',
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
            $timeOut = Carbon::parse($record['time_out']) ?? null;

            $attendanceRecord = AttendanceRecord::where('attendance_id', $attendance->id)
                ->where('user_id', $userId)
                ->whereDate('created_at', now()->toDateString())
                ->first();

            if ($attendanceRecord) {

                $attendanceRecord->update([
                    'status' => $status,
                    'time_in' => $timeIn,
                    'time_out' => $timeOut,
                ]);
            } else {

                $attendanceRecord = AttendanceRecord::create([
                    'attendance_id' => $attendance->id,
                    'user_id' => $userId,
                    'status' => $status,
                    'time_in' => $timeIn,
                    'time_out' => $timeOut,
                ]);
            }

            $responseData[] = $attendanceRecord;
        }

        return response()->json(['data' => $responseData], 200);
    }

    // public function attendance_record(Request $request)
    // {
    //     $validated = $request->validate([
    //         'training_id' => 'required|exists:trainings,id',
    //         'training_date' => 'required|date',
    //         'records' => 'required|array',
    //         'records.*.enrolled_course_id' => 'required|exists:users,id',
    //         'records.*.status' => 'nullable|string|in:PRESENT,ABSENT,LATE',
    //         'records.*.time_in' => 'nullable|date',
    //         'records.*.time_out' => 'nullable|date',
    //         'records.*.start_time' => 'nullable|time',
    //         'records.*.end_time' => 'nullable|time',
    //     ]);

    //     $training = Training::with('module.schedules')->find($validated['training_id']);

    //     if (!$training) {
    //         return response()->json(['error' => 'Training not found'], 404);
    //     }
    //     $schedule = $training->module->schedules
    //         ->where('schedule_from', Carbon::parse($validated['training_date'])->toDateString())
    //         ->first();
    //     if (!$schedule) {
    //         return response()->json([
    //             'error' => 'Training date is not valid for this training'
    //         ], 422);
    //     }
    //     $attendance = Attendance::firstOrCreate([
    //         'training_id' => $validated['training_id'],
    //         'training_date' => $validated['training_date'],
    //     ]);

    //     $responseData = [];

    //     foreach ($validated['records'] as $record) {
    //         $userId = $record['enrolled_course_id'];
    //         $timeIn = isset($record['time_in']) ? Carbon::parse($record['time_in']) : now();
    //         $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;
    //         $scheduleStart = Carbon::parse($schedule->start_time);
    //         $scheduleEnd = Carbon::parse($schedule->end_time);

    //         //! Validate time_in
    //         if ($timeIn->lt($scheduleStart) || $timeIn->gt($scheduleEnd)) {
    //             return response()->json([
    //                 'error' => 'Time in must be within the training schedule'
    //             ], 422);
    //         }

    //         //! 15 minute late rule
    //         $lateLimit = $scheduleStart->copy()->addMinutes(15);

    //         if ($timeIn->gt($lateLimit)) {
    //             $status = 'LATE';
    //         } else {
    //             $status = 'PRESENT';
    //         }

    //         $attendanceRecord = AttendanceRecord::updateOrCreate(
    //             [
    //                 'attendance_id' => $attendance->id,
    //                 'enrolled_course_id' => $userId,
    //             ],
    //             [
    //                 'status' => $status,
    //                 'time_in' => $timeIn,
    //                 'time_out' => $timeOut,
    //             ]
    //         );

    //         $responseData[] = $attendanceRecord;
    //     }

    //     return response()->json([
    //         'store_data' => $responseData
    //     ], 200);
    // }

    public function getTraineeDetails(Request $request)
    {
        try {
            $list = EnrolledCourse::where('training_id', $request->trainingId)
                ->with(['trainee',])
                ->where('enrolled_course_status', 'ENROLLED')
                ->get();

            return response()->json(["data" => $list], 200);
        } catch (\Exception $e) {
            return response()->json(["message" => "Server Error", "error" => $e->getMessage()], 500);
        }
    }


    public function TraineeAttendanceRecord(Request $request)
    {
        return EnrolledCourse::with([
            "trainee",
            "traineeAttendanceRecord" => function ($query) use ($request) {
                // $query->whereRelation("attendance", "id", "=", $request->attendance_id);
                $query->where(["training" => $request->training_id, "training_date" => $request->training_date]);
            }
        ])
            ->status([RequestStatus::ENROLLED->value])
            ->where("training_id", $request->training_id)
            ->get();
    }

    //! Time Out function
    // public function attendance_timeOut(Request $request)
    // {
    //     $validated = $request->validate([
    //         'attendance_id' => 'required|exists:attendances,id',
    //         'user_id' => 'required|exists:users,id',
    //     ]);

    //     $record = AttendanceRecord::where($validated)
    //         ->whereDate('created_at', now())
    //         ->firstOrFail();

    //     $record->update(['time_out' => now()]);

    //     return response()->json($record);
    // }

    public function attendanceByGroup(Request $request)
    {

        $trainingId = $request->training_id;
        $trainingAttendaces = Attendance::with([
            "attendance_records.user"
        ])->where('training_id', $trainingId)
            ->get();

        // $records = AttendanceRecord::with(['attendance', 'user'])->get();

        // $grouped = $records->groupBy(function ($item) {
        //     return $item->attendance->training_date ?? 'No Date';
        // })->map(function ($items) {
        //     return $items->map(function ($item) {
        //         return [
        //             'training_id'  => $item->attendance->training_id ?? null,
        //             'id'           => $item->id,
        //             'user'      => $item->user,
        //             'user_name'    => $item->user->name ?? null,
        //             'attendance_id' => $item->attendance_id,
        //             'status'       => $item->status,
        //             'time_in'      => $item->time_in,
        //             'time_out'     => $item->time_out,
        //         ];
        //     });
        // });

        return AttendanceRecordResource::collection($trainingAttendaces);
    }




    public function testtest()
    {
        $records = AttendanceRecord::with(['attendance', 'user'])->get();

        $grouped = $records->groupBy(function ($item) {
            return $item->attendance->training_date ?? 'No Date';
        })->map(function ($items) {
            return $items->map(function ($item) {
                return [
                    'training_id'  => $item->attendance->training_id ?? null,
                    'id'           => $item->id,
                    'user'      => $item->user,
                    'module'      => $item->module,
                    'user_name'    => $item->user->name ?? null,
                    'attendance_id' => $item->attendance_id,
                    'status'       => $item->status,
                    'time_in'      => $item->time_in,
                    'time_out'     => $item->time_out,
                ];
            });
        });

        return response()->json([
            'groupData' => $grouped
        ], 200);
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
