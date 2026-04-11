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
use Illuminate\Auth\Events\Validated;

use function Symfony\Component\String\u;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function attendance_record(Request $request)
    {
        return TransactionUtil::transact(null, [], function () use ($request) {
            \Log::info("Attendance record request: ", $request->all());

            $validated = $request->validate([
                'training_id' => 'required|exists:trainings,id',
                'training_date' => 'required|date',
                'start_time' => 'nullable',
                'end_time' => 'nullable',
                'records' => 'required|array',
                // 'records.*.profile_picture' => 'required|string',
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


    public function color_background(Request $request)
    {
        \Log::info('REQUEST DATA', $request->all());

        $validator = \Validator::make($request->all(), [
            'course_module_id' => 'required|exists:course_modules,id',
            'bgColor' => 'required|string',
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
