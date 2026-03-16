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

    // public function attendance_record(Request $request)
    // {

    //     return TransactionUtil::transact(
    //         null,
    //         [],
    //         function () use ($request) {
    //             $validated = $request->validate([
    //                 'training_id' => 'required|exists:trainings,id',
    //                 'training_date' => 'required|date',
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

    //             $schedule = $training->module->schedules
    //                 ->where('schedule_from', $trainingDate)
    //                 ->first();

    //             if (!$schedule) {
    //                 return response()->json([
    //                     'error' => 'Training date is not valid for this training'
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

    //             $responseData = [];

    //             foreach ($validated['records'] as $record) {
    //                 $userId = $record['enrolled_course_id'];

    //                 $timeIn = isset($record['time_in']) ? Carbon::parse($record['time_in']) : now();
    //                 $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;

    //                 //! Compare time_in with schedule start_time to detect late/present 
    //                 $scheduleStart = Carbon::parse($schedule->start_time);
    //                 $scheduleEnd = Carbon::parse($schedule->end_time);

    //                 $lateLimit = $scheduleStart->copy()->addMinutes(15);
    //                 $status = $timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT';

    //                 $attendanceRecord = AttendanceRecord::updateOrCreate(
    //                     [
    //                         'attendance_id' => $attendance->id,
    //                         'enrolled_course_id' => $userId,
    //                     ],
    //                     [
    //                         'status' => $status,
    //                         'time_in' => $timeIn,
    //                         'time_out' => $timeOut,
    //                         'start_time' => $record['start_time'] ?? $scheduleStart,
    //                         'end_time' => $record['end_time'] ?? $scheduleEnd,
    //                     ]
    //                 );

    //                 $responseData[] = $attendanceRecord;
    //             }

    //             AuditHelper::log($request->user_id, "User $request->user_id have submitted attendance!");

    //             return response()->json([
    //                 'store_data' => $responseData
    //             ], 200);
    //         }

    //     );
    // }

    // public function attendance_record(Request $request)
    // {
    //     return TransactionUtil::transact(
    //         null,
    //         [],
    //         function () use ($request) {
    //             $validated = $request->validate([
    //                 'training_id'              => 'required|exists:trainings,id',
    //                 'training_date'            => 'required|date',
    //                 'start_time'               => 'nullable|date_format:H:i',
    //                 'end_time'                 => 'nullable|date_format:H:i',
    //                 'records'                  => 'required|array|min:1',
    //                 'records.*.enrolled_course_id' => 'required|exists:enrolled_courses,id',
    //                 'records.*.time_in'        => 'nullable|date',
    //                 'records.*.time_out'       => 'nullable|date',
    //                 'records.*.start_time'     => 'nullable|date',
    //                 'records.*.end_time'       => 'nullable|date',
    //             ]);

    //             $training = Training::with('module.schedules')->find($validated['training_id']);
    //             if (!$training || !$training->module) {
    //                 return response()->json([
    //                     'message' => 'Training or module not found',
    //                     'data'    => null,
    //                 ], 404);
    //             }

    //             $trainingDate = Carbon::parse($validated['training_date'])->toDateString();
    //             $schedule = $training->module->schedules
    //                 ->where('schedule_from', $trainingDate)
    //                 ->first();

    //             if (!$schedule) {
    //                 return response()->json([
    //                     'message' => 'Training date is not valid for this training',
    //                     'data'    => null,
    //                 ], 422);
    //             }

    //             $attendance = Attendance::firstOrCreate(
    //                 [
    //                     'training_id'   => $validated['training_id'],
    //                     'training_date' => $trainingDate,
    //                     'created_by' => $request->user()->id,
    //                     'start_time' => $validated['start_time'] ?? $schedule->start_time,
    //                     'end_time'   => $validated['end_time'] ?? $schedule->end_time,
    //                 ]
    //             );

    //             $records = [];
    //             $scheduleStart = Carbon::parse($schedule->start_time);
    //             $scheduleEnd   = Carbon::parse($schedule->end_time);
    //             $lateLimit     = $scheduleStart->copy()->addMinutes(15);

    //             foreach ($validated['records'] as $record) {
    //                 $timeIn  = !empty($record['time_in'])  ? Carbon::parse($record['time_in'])  : null;
    //                 $timeOut = !empty($record['time_out']) ? Carbon::parse($record['time_out']) : null;

    //                 $status = $timeIn
    //                     ? ($timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT')
    //                     : 'ABSENT';

    //                 $attendanceRecord = AttendanceRecord::updateOrCreate(
    //                     [
    //                         'attendance_id'       => $attendance->id,
    //                         'enrolled_course_id'  => $record['enrolled_course_id'],
    //                     ],
    //                     [
    //                         'status'     => $status,
    //                         'time_in'    => $timeIn,
    //                         'time_out'   => $timeOut,
    //                         'start_time' => $record['start_time'] ?? $scheduleStart,
    //                         'end_time'   => $record['end_time'] ?? $scheduleEnd,
    //                     ]
    //                 );

    //                 $records[] = $attendanceRecord;
    //             }

    //             AuditHelper::log($request->user()->id, "User {$request->user()->id} submitted attendance.");

    //             return response()->json([
    //                 'message' => 'Attendance saved successfully',
    //                 'meta'    => [
    //                     'training_id'   => $validated['training_id'],
    //                     'training_date' => $trainingDate,
    //                     'attendance_id' => $attendance->id,
    //                     'updated_count' => count($records),
    //                 ],
    //                 'data'    => $records,
    //             ], 200);
    //         }
    //     );
    // }

    public function attendance_record(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {
                //! Regex for time: accepts H:i or H:i:s ( 09:00 or 09:00:00)
                $timeRegex = '/^([01]\d|2[0-3]):([0-5]\d)(:([0-5]\d))?$/';

                $validated = $request->validate([
                    'training_id'                  => 'required|integer|exists:trainings,id',
                    'training_date'                => 'required|date',
                    'start_time'                   => ['nullable', 'regex:' . $timeRegex],
                    'end_time'                     => ['nullable', 'regex:' . $timeRegex],
                    'records'                      => 'required|array|min:1',
                    'records.*.enrolled_course_id' => 'required|integer|exists:enrolled_courses,id',
                    'records.*.time_in'            => 'nullable|date',
                    'records.*.time_out'           => 'nullable|date',
                    'records.*.start_time'         => ['nullable', 'regex:' . $timeRegex],
                    'records.*.end_time'           => ['nullable', 'regex:' . $timeRegex],
                ]);

                $training = Training::with('module.schedules')->find($validated['training_id']);
                if (!$training || !$training->module) {
                    return response()->json([
                        'message' => 'Training or module not found',
                        'data'    => null,
                    ], 404);
                }

                $trainingDate = Carbon::parse($validated['training_date'])->toDateString();
                //! Filter the loaded schedules Collection by date
                $schedule = $training->module->schedules->first(function ($s) use ($trainingDate) {
                    return Carbon::parse($s->schedule_from)->toDateString() === $trainingDate;
                });

                //! If no schedule for the date, use default times from the module (or skip strict check)
                $defaultStart = $training->module->start_time ?? '09:00:00';
                $defaultEnd   = $training->module->end_time ?? '17:00:00';

                $attendance = Attendance::firstOrCreate(
                    [
                        'training_id'   => $validated['training_id'],
                        'training_date' => $trainingDate,
                    ],
                    [
                        'created_by' => $request->user()->id,
                        'start_time' => $validated['start_time'] ?? ($schedule->start_time ?? $defaultStart),
                        'end_time'   => $validated['end_time'] ?? ($schedule->end_time ?? $defaultEnd),
                    ]
                );

                $records = [];
                $scheduleStart = $schedule ? Carbon::parse($schedule->start_time) : Carbon::parse($defaultStart);
                $scheduleEnd   = $schedule ? Carbon::parse($schedule->end_time) : Carbon::parse($defaultEnd);
                $lateLimit     = $scheduleStart->copy()->addMinutes(15);

                foreach ($validated['records'] as $record) {
                    $timeIn  = !empty($record['time_in'])  ? Carbon::parse($record['time_in'])  : null;
                    $timeOut = !empty($record['time_out']) ? Carbon::parse($record['time_out']) : null;

                    $status = $timeIn
                        ? ($timeIn->gt($lateLimit) ? 'LATE' : 'PRESENT')
                        : 'ABSENT';

                    $attendanceRecord = AttendanceRecord::updateOrCreate(
                        [
                            'attendance_id'      => $attendance->id,
                            'enrolled_course_id' => $record['enrolled_course_id'],
                        ],
                        [
                            'status'     => $status,
                            'time_in'    => $timeIn,
                            'time_out'   => $timeOut,
                            'start_time' => $record['start_time'] ?? ($validated['start_time'] ?? $scheduleStart),
                            'end_time'   => $record['end_time']   ?? ($validated['end_time']   ?? $scheduleEnd),
                        ]
                    );

                    $records[] = $attendanceRecord;
                }

                AuditHelper::log($request->user()->id, "User {$request->user()->id} submitted attendance.");

                return response()->json([
                    'message' => 'Attendance saved successfully',
                    'meta'    => [
                        'training_id'   => $validated['training_id'],
                        'training_date' => $trainingDate,
                        'attendance_id' => $attendance->id,
                        'updated_count' => count($records),
                    ],
                    'data'    => $records,
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
