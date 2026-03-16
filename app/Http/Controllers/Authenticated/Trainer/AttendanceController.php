<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Enums\RequestStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\Trainer\AttendanceRecordResource;
use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, Training};
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Utils\AuditHelper;
use App\Utils\TransactionUtil;
use function Symfony\Component\String\u;

class AttendanceController extends Controller
{
    public function attendance_record(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {
                \Log::info("Attendance record request: ", $request->all());
                $validated = $request->validate([
                    'training_id' => 'required|exists:trainings,id',
                    'training_date' => 'required',
                    'start_time' => 'nullable',
                    'end_time' => 'nullable',
                    'records' => 'required|array',
                    'records.*.enrolled_course_id' => 'required|exists:enrolled_courses,id',
                    'records.*.time_in' => 'nullable|date',
                    'records.*.time_out' => 'nullable|date',

                ]);

                $training = Training::with('module.schedules')->find($validated['training_id']);

                if (!$training || !$training->module) {
                    return response()->json(['error' => 'Training or module not found'], 404);
                }

                $trainingDate = Carbon::parse($validated['training_date'])->toDateString();

                $schedule = $training->module->schedules()
                    ->whereDate('schedule_from', '<=', $trainingDate)
                    ->whereDate('schedule_to', '>=', $trainingDate)
                    ->first();

                if (! $schedule) {
                    return response()->json([
                        'error' => 'Training date is not valid for this training',
                    ], 422);
                }

                $attendance = Attendance::firstOrCreate(
                    [
                        'training_id' => $validated['training_id'],
                        'training_date' => $validated['training_date'],
                        'created_by' => $request->user()->id,
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time,
                    ],
                );
                $enrolled = EnrolledCourse::where('training_id', $validated['training_id'])
                    ->where('enrolled_course_status', 'ENROLLED')->get();


                $responseData = [];

                foreach ($enrolled as $enrolledCourse) {
                    AttendanceRecord::create(
                        [
                            "attendance_id" => $attendance->id,
                            'status' => 'ABSENT',
                            "enrolled_course_id" => $enrolledCourse->id,
                            'time_in' => null,
                            'time_out' => null,
                            'start_time' => $validated['start_time'] ?? $schedule->start_time,
                            'end_time' => $validated['end_time'] ?? $schedule->end_time,
                        ]
                    );
                }

                // === LATE DETECTION (15 minutes) + update records from input ===
                // Schedule start/end for comparison
                $scheduleStart = Carbon::parse($validated['training_date'] . ' ' . ($validated['start_time'] ?? $schedule->start_time));
                $scheduleEnd   = Carbon::parse($validated['training_date'] . ' ' . ($validated['end_time'] ?? $schedule->end_time));

                $lateLimit = $scheduleStart->copy()->addMinutes(15);

                foreach ($validated['records'] as $record) {
                    $enrolledCourseId = $record['enrolled_course_id'];

                    $timeIn  = isset($record['time_in']) ? Carbon::parse($record['time_in']) : null;
                    $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;

                    // If they have a time_in, mark PRESENT or LATE; otherwise keep ABSENT
                    if ($timeIn) {
                        $status = $timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT';
                    } else {
                        $status = 'ABSENT';
                    }

                    $attendanceRecord = AttendanceRecord::updateOrCreate(
                        [
                            'attendance_id' => $attendance->id,
                            'enrolled_course_id' => $enrolledCourseId,
                        ],
                        [
                            'status' => $status,
                            'time_in' => $timeIn,
                            'time_out' => $timeOut,
                            'start_time' => $scheduleStart->format('H:i:s'),
                            'end_time' => $scheduleEnd->format('H:i:s'),
                        ]
                    );

                    $responseData[] = $attendanceRecord;
                }

                AuditHelper::log($request->user_id, "User $request->user_id have submitted attendance!");

                return response()->json([
                    'store_data' => $responseData
                ], 200);
            }

        );
    }
    //! OLD CODE
    // public function attendance_record(Request $request)
    // {
    //     return TransactionUtil::transact(
    //         null,
    //         [],
    //         function () use ($request) {
    //             \Log::info("Attendance record request: ", $request->all());
    //             $validated = $request->validate([
    //                 'training_id' => 'required|exists:trainings,id',
    //                 'training_date' => 'required',
    //                 'start_time' => 'nullable',
    //                 'end_time' => 'nullable',
    //                 'records' => 'required|array',
    //                 'records.*.enrolled_course_id' => 'required|exists:enrolled_courses,id',
    //                 'records.*.time_in' => 'nullable|date',
    //                 'records.*.time_out' => 'nullable|date',

    //             ]);

    //             $training = Training::with('module.schedules')->find($validated['training_id']);

    //             if (!$training || !$training->module) {
    //                 return response()->json(['error' => 'Training or module not found'], 404);
    //             }

    //             $trainingDate = Carbon::parse($validated['training_date'])->toDateString();

    //             $schedule = $training->module->schedules()
    //                 ->whereDate('schedule_from', '<=', $trainingDate)
    //                 ->whereDate('schedule_to', '>=', $trainingDate)
    //                 ->first();

    //             if (! $schedule) {
    //                 return response()->json([
    //                     'error' => 'Training date is not valid for this training',
    //                 ], 422);
    //             }

    //             $attendance = Attendance::firstOrCreate(
    //                 [
    //                     'training_id' => $validated['training_id'],
    //                     'training_date' => $validated['training_date'],
    //                     'created_by' => $request->user()->id,
    //                     'start_time' => $request->start_time,
    //                     'end_time' => $request->end_time,
    //                 ],
    //             );
    //             $enrolled = EnrolledCourse::where('training_id', $validated['training_id'])
    //                 ->where('enrolled_course_status', 'ENROLLED')->get();


    //             $responseData = [];

    //             foreach ($enrolled as $enrolledCourse) {
    //                 AttendanceRecord::create(
    //                     [
    //                         "attendance_id" => $attendance->id,
    //                         'status' => 'ABSENT',
    //                         "enrolled_course_id" => $enrolledCourse->id,
    //                         'time_in' => null,
    //                         'time_out' => null,
    //                         'start_time' => $validated['start_time'] ?? $schedule->start_time,
    //                         'end_time' => $validated['end_time'] ?? $schedule->end_time,
    //                     ]
    //                 );
    //             }

    //             // foreach ($validated['records'] as $record) {
    //             //     $userId = $record['enrolled_course_id'];

    //             //     $timeIn = isset($record['time_in']) ? Carbon::parse($record['time_in']) : now();
    //             //     $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;

    //             //     //! Compare time_in with schedule start_time to detect late/present 
    //             //     $scheduleStart = Carbon::parse($schedule->start_time);
    //             //     $scheduleEnd = Carbon::parse($schedule->end_time);

    //             //     $lateLimit = $scheduleStart->copy()->addMinutes(15);
    //             //     $status = $timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT';

    //             //     $attendanceRecord = AttendanceRecord::updateOrCreate(
    //             //         [
    //             //             'attendance_id' => $attendance->id,
    //             //             'enrolled_course_id' => $userId,
    //             //         ],
    //             //         [
    //             //             'status' => $status,
    //             //             'time_in' => $timeIn,
    //             //             'time_out' => $timeOut,
    //             //             'start_time' => $record['start_time'] ?? $scheduleStart,
    //             //             'end_time' => $record['end_time'] ?? $scheduleEnd,
    //             //         ]
    //             //     );

    //             //     $responseData[] = $attendanceRecord;
    //             // }

    //             AuditHelper::log($request->user_id, "User $request->user_id have submitted attendance!");

    //             return response()->json([
    //                 'store_data' => $responseData
    //             ], 200);
    //         }

    //     );
    // }

    public function update_record(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {
                $request->validate([
                    'id' => 'required|exists:attendance_records,id',
                    'attendance' => 'required|exists:attendances,id',
                    'status' => 'required|string|in:PRESENT,LATE,ABSENT',
                    'start_time' => 'required|date',
                    'time_in' => 'nullable',
                    'time_out' => 'nullable',

                ]);


                AttendanceRecord::where('id', $id = $request->id)
                    ->where('attendance_id', $request->attendance)
                    ->where('start_time', $request->start_time)
                    ->update([

                        'status' => $request->status,
                        'start_time' => $request->start_time,
                        'time_in' => $request->time_in ?? null,
                        'time_out' => $request->time_out ?? null,

                    ]);

                AuditHelper::log($request->user_id, "User $request->user_id has updated attendance record!");

                return response()->json([

                    //! "message" => "Announcement updated successfully",
                    "update_id" => $id

                ], 200);
            }
        );
    }





    public function TraineeAttendanceRecord(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {
                return EnrolledCourse::with([
                    "trainee",
                    "traineeAttendanceRecord" => function ($query) use ($request) {
                        //! $query->whereRelation("attendance", "id", "=", $request->attendance_id);
                        $query->where(["training" => $request->training_id, "training_date" => $request->training_date]);
                    }
                ])
                    ->status([RequestStatus::ENROLLED->value])
                    ->where("training_id", $request->training_id)
                    ->get();
            }
        );
    }

    //! UpdateFunction
    public function UpdateRecordAttendance(Request $request)
    {

        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {

                $request->validate([
                    'records' => 'required|array',
                    'records.*.id' => 'required|exists:attendance_records,id',
                    'records.*.time_in' => 'nullable',
                    'records.*.time_out' => 'nullable',
                    'records.*.status' => 'nullable|string|accepted:PRESENT,LATE,ABSENT',
                ]);

                foreach ($request->records as $record) {

                    AttendanceRecord::where('id', $record['id'])->update([
                        'time_in' => $record['time_in'] ?? null,
                        'time_out' => $record['time_out'] ?? null,
                        'status' => $record['status'] ?? null
                    ]);
                }
                AuditHelper::log($request->user_id, "User $request->user_id updated attendance!");

                return response()->json([
                    'message' => 'Attendance records updated successfully',

                ], 200);
            }
        );
    }

    //! an folder ini 
    public function attendanceByGroup(Request $request)
    {
        $trainingId = $request->training_id;
        $trainingAttendaces = Attendance::with([
            "attendance_records.enrolled_course.trainee"
        ])->where('training_id', $trainingId)
            ->get();

        return AttendanceRecordResource::collection($trainingAttendaces);
    }
}
