<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trainee\Enrollment\CourseModuleResource;
use App\Models\{EnrolledCourse, Training, AttendanceRecord};
use App\Services\Trainer\Enrollment\TrainerEnrollmentService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TrainerEnrollmentController extends Controller
{
    public function __construct(
        protected TrainerEnrollmentService $trainerEnrollmentService,
    ) {}

    public function viewAllTrainingsAndFacilitators(Request $request)
    {
        return $this->trainerEnrollmentService->getAllTrainingsAndFacilitators();
    }

    public function viewAllTrainee(Request $request, $training)
    {
        try {
            return $this->trainerEnrollmentService->getTrainees($training);
        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }

    public function view(Request $request)
    {
        try {
            return CourseModuleResource::collection($this->trainerEnrollmentService->getDataFacilitator());
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function viewTrainingSchedules(Request $request, $course)
    {
        try {
            return response()->json(["data" => $this->trainerEnrollmentService->getTrainingSchedules($course)], 200);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    // ! Tigaman
    public function getCourseDetails(Request $request)
    {

        $record = Training::with([
            "module:id,module_type_id,name,compendium,acronym",
            "module.moduleType",
            "module.trainingFees:id,course_module_id,charge_category_id,name,amount",
            "module.trainingFees.category:id,name",
            "module.specific_requirements",
            "module.schedules",

        ])
            ->where('id', $request->trainingId)
            ->get();

        return response()->json([
            "training" => $record,
        ], 200);
    }

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

    // public function recordAttendance(Request $request)
    // {
    //     $validated = $request->validate([
    //         'attendance_id' => 'required|exists:attendances,id',
    //         'user_id' => 'required|exists:users,id',
    //         'status' => 'required|string|in:PRESENT,ABSENT,LATE',
    //     ]);

    //     $today = now()->toDateString();

    //     $attendanceRecord = AttendanceRecord::where('attendance_id', $validated['attendance_id'])
    //         ->where('user_id', $validated['user_id'])
    //         ->whereDate('created_at', $today)
    //         ->first();

    //     if ($attendanceRecord) {
    //         $attendanceRecord->update([
    //             'status' => $validated['status'],
    //             'time_in' => now(),
    //         ]);
    //     } else {
    //         $attendanceRecord = AttendanceRecord::create([
    //             'attendance_id' => $validated['attendance_id'],
    //             'user_id' => $validated['user_id'],
    //             'status' => $validated['status'],
    //             'time_in' => now(),
    //         ]);
    //     }

    //     return response()->json([
    //         'message' => 'Attendance recorded successfully',
    //         'data' => $attendanceRecord
    //     ], 200);
    // }
}
