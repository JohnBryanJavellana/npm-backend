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
use Illuminate\Validation\Rule;

class AttendanceController extends Controller
{
    public function attendance_record(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {

            $validated = $request->validate([
                'training_id' => 'required|exists:trainings,id',
                'training_date' => 'required|date',
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

            if (!$schedule) {
                return response()->json([
                    'error' => 'Training date is not valid for this training',
                ], 422);
            }

            $attendance = Attendance::firstOrCreate(
                [
                    'training_id' => $validated['training_id'],
                    'training_date' => $validated['training_date'],
                ],
                [
                    'created_by' => $request->user()->id,
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                ]
            );

            $enrolled = EnrolledCourse::where('training_id', $validated['training_id'])
                ->where('enrolled_course_status', 'ENROLLED')
                ->get();

            $responseData = [];


            foreach ($enrolled as $enrolledCourse) {
                AttendanceRecord::firstOrCreate(
                    [
                        "attendance_id" => $attendance->id,
                        "enrolled_course_id" => $enrolledCourse->id,
                    ],
                    [
                        'status' => 'ABSENT',
                        'time_in' => null,
                        'time_out' => null,
                        'start_time' => $validated['start_time'] ?? $schedule->start_time,
                        'end_time' => $validated['end_time'] ?? $schedule->end_time,
                    ]
                );
            }

            $effectiveStartTime = $validated['start_time'] ?? $schedule->start_time;
            $effectiveEndTime   = $validated['end_time'] ?? $schedule->end_time;

            $scheduleStart = Carbon::parse($trainingDate . ' ' . $effectiveStartTime);
            $scheduleEnd   = Carbon::parse($trainingDate . ' ' . $effectiveEndTime);

            $lateLimit = $scheduleStart->copy()->addMinutes(15);

            foreach ($validated['records'] as $record) {
                $enrolledCourseId = $record['enrolled_course_id'];

                $timeIn  = !empty($record['time_in']) ? Carbon::parse($record['time_in']) : null;
                $timeOut = !empty($record['time_out']) ? Carbon::parse($record['time_out']) : null;

                $status = 'ABSENT';
                if ($timeIn) {

                    $status = $timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT';
                }

                $attendanceRecord = AttendanceRecord::updateOrCreate(
                    [
                        'attendance_id' => $attendance->id,
                        'enrolled_course_id' => $enrolledCourseId,
                    ],
                    [
                        'status' => $status,
                        'time_in' => $timeIn ? $timeIn->toDateTimeString() : null,
                        'time_out' => $timeOut ? $timeOut->toDateTimeString() : null,
                        'start_time' => $scheduleStart->format('H:i:s'),
                        'end_time' => $scheduleEnd->format('H:i:s'),
                    ]
                );

                $responseData[] = $attendanceRecord;
            }

            AuditHelper::log($request->user()->id, "User {$request->user()->id} have submitted attendance!");

            return response()->json([
                'store_data' => $responseData,
                'late_limit' => $lateLimit->toDateTimeString(),
            ], 200);
        });
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
    //             // $userId = $record['enrolled_course_id'];

    //             // $timeIn = isset($record['time_in']) ? Carbon::parse($record['time_in']) : now();
    //             // $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;

    //             // //! Compare time_in with schedule start_time to detect late/present
    //             // $scheduleStart = Carbon::parse($schedule->start_time);
    //             // $scheduleEnd = Carbon::parse($schedule->end_time);

    //             // $lateLimit = $scheduleStart->copy()->addMinutes(15);
    //             // $status = $timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT';

    //             // $attendanceRecord = AttendanceRecord::updateOrCreate(
    //             // [
    //             // 'attendance_id' => $attendance->id,
    //             // 'enrolled_course_id' => $userId,
    //             // ],
    //             // [
    //             // 'status' => $status,
    //             // 'time_in' => $timeIn,
    //             // 'time_out' => $timeOut,
    //             // 'start_time' => $record['start_time'] ?? $scheduleStart,
    //             // 'end_time' => $record['end_time'] ?? $scheduleEnd,
    //             // ]
    //             // );

    //             // $responseData[] = $attendanceRecord;
    //             // }

    //             AuditHelper::log($request->user_id, "User $request->user_id have submitted attendance!");

    //             return response()->json([
    //                 'store_data' => $responseData
    //             ], 200);
    //         }

    //     );
    // }


    public function update_attendance_record(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {

            \Log::info('Attendance update request:', $request->all());

            $validated = $request->validate([
                'records' => ['required', 'array', 'min:1'],
                'records.*.attendance_record_id' => ['required', 'integer', 'exists:attendance_records,id'],
                'attendance_id' => ['required', 'integer', 'exists:attendances,id'],
                'records.*.status' => ['required', 'string', Rule::in(['PRESENT', 'LATE', 'ABSENT'])],
                'records.*.enrolled_course_id' => ['nullable', 'integer'],
                'records.*.time_in' => ['nullable'],
                'records.*.time_out' => ['nullable'],
            ]);

            $updatedIds = [];

            foreach ($validated['records'] as $row) {
                $updated = AttendanceRecord::query()
                    ->where('id', $row['attendance_record_id'])
                    ->update([
                        'status' => $row['status'],
                        'time_in' => $row['time_in'] ?? null,
                        'time_out' => $row['time_out'] ?? null,
                    ]);

                if ($updated) {
                    $updatedIds[] = $row['attendance_record_id'];
                }
            }

            $actorId = optional($request->user())->id;
            if ($actorId) {
                AuditHelper::log(
                    $actorId,
                    "User {$actorId} updated attendance record IDs: " . implode(',', $updatedIds)
                );
            }

            return response()->json([
                'updated_count' => count($updatedIds),
                'updated_ids' => $updatedIds,
            ], 200);
        });
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


    //! an folder ini
    public function attendanceByGroup(Request $request)
    {
        $trainingId = $request->training_id;
        $trainingAttendaces = Attendance::with([
            "attendance_records.enrolled_course.trainee"
        ])
            ->where('training_id', $trainingId)
            ->get();

        return AttendanceRecordResource::collection($trainingAttendaces);
    }
    // public function getAttendanceRecord(Request $request)
    // {
    // $attendanceId = $request->attendance_id;

    // $attendanceRecord = AttendanceRecord::where('attendance_id', $attendanceId)
    // ->with('enrolled_course.trainee')
    // ->get();

    // return response()->json([
    // 'data' => AttendanceRecordResource::collection($attendanceRecord),
    // ], 200);
    // }

}
