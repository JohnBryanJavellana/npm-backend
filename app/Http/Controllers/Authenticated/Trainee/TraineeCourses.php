<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
    MainCourse,
    EnrolledCourse
};

class TraineeCourses extends Controller
{
    public function get_all_courses(Request $request) {
        try {
            $courses = MainCourse::where('course_status', 'ACTIVE')->get();
            return response()->json(['courses' => $courses]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }   
    }

    public function get_trainee_courses (Request $request) {
        $myTrainings = EnrolledCourse::with([
            "training.module",
            "training.moduleType",
            "training",
            "training.training_id_fee",
            "training.training_miscellaneous_fee",
            "training.training_assessment_fee",
            "training.training_ctc_fee",
            "training_schedule",
            "training.training_requirement",
            "training.training_requirement.requirement",
        ])
        ->with(["trainee_requirement"])
        ->where('user_id', $request->user()->id)
        ->whereIn('enrolled_course_status', ['ENROLLED','COMPLETED'])
        ->get();

        return response()->json(['myTrainings' => $myTrainings]);
    }
}
