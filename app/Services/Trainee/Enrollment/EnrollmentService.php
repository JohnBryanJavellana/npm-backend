<?php 

namespace App\Services\Trainee\Enrollment;

use App\Models\EnrolledCourse;

class EnrollmentService {
    public function __construct(
        protected EnrolledCourse $enrolledCourseModel
    )
    {}


    public function getUserTrainings($validated)
    {
        return $this->enrolledCourseModel->query()
        ->with([
            "training.module.moduleType",
            "training.module.charge.chargeCategory"
        ])
        ->status($validated["status"])
        ->forUser($validated["userId"])
        ->get();
    }
}