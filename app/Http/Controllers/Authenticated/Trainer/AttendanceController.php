<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Enums\RequestStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\Trainer\AttendanceRecordResource;
use App\Models\{User, Attendance, AttendanceRecord, EnrolledCourse, Training, TrainingFacilitator};
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Utils\AuditHelper;
use App\Utils\TransactionUtil;
use function Symfony\Component\String\u;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
class AttendanceController extends Controller
{
    public function attendance_record(Request $request)
    {
        return TransactionUtil::transact(
            null,
            [],
            function () use ($request) {

                \Log::info("Attendance update request: ", $request->all());
                
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

                //! === LATE DETECTION (15 minutes) + update records from input ===
                $scheduleStart = Carbon::parse($validated['training_date'] . ' ' . ($validated['start_time'] ?? $schedule->start_time));
                $scheduleEnd   = Carbon::parse($validated['training_date'] . ' ' . ($validated['end_time'] ?? $schedule->end_time));

                $lateLimit = $scheduleStart->copy()->addMinutes(15);

                foreach ($validated['records'] as $record) {
                    $enrolledCourseId = $record['enrolled_course_id'];

                    $timeIn  = isset($record['time_in']) ? Carbon::parse($record['time_in']) : null;
                    $timeOut = isset($record['time_out']) ? Carbon::parse($record['time_out']) : null;

                    //! If they have a time_in, mark PRESENT or LATE; otherwise keep ABSENT
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


    public function color_background(Request $request)
{
    \Log::info('Color update request:', $request->all());

    $validator = \Validator::make($request->all(), [
        'course_module_id' => 'required',
        'bgColor' => 'required|string',
        'user' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    try {
        DB::beginTransaction();

        $facilitator = TrainingFacilitator::where('course_module_id', $request->course_module_id)
            ->where('user_id', $request->user()->id)
            ->first();

        if (!$facilitator) {
            \Log::warning('Facilitator not found', ['course_module_id' => $request->course_module_id, 'user_id' => $request->user()->id]);
            return response()->json([
                'message' => 'Facilitator record not found'
            ], 404);
        }

        $facilitator->bgColor = $request->bgColor;
        $facilitator->save();

        DB::commit();

        return response()->json([
            'message' => 'Color updated successfully!',
            'data' => $facilitator
        ], 200);

    } catch (\Exception $e) {
        DB::rollback();
        \Log::error('Color update failed:', ['error' => $e->getMessage()]);

        return response()->json([
            'message' => 'Something went wrong.',
            'error' => $e->getMessage()
        ], 500);
    }
}
}
