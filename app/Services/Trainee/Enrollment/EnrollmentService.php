<?php 

namespace App\Services\Trainee\Enrollment;

use App\Models\{EnrolledCourse, Rank, License};
use Illuminate\Support\Facades\Cache;

class EnrollmentService {
    public function __construct(
        protected EnrolledCourse $enrolledCourseModel,
        protected Rank $rankModel,
        protected License $licenseModel
    ) {}


    public function getUserTrainings($validated)
    {
        return $this->enrolledCourseModel->query()
        ->with([
            "training.module.moduleType",
            "training.module.charge.chargeCategory"
        ])
        // ->status($validated["status"])
        ->forUser($validated["userId"])
        ->get();
    }

    public function getUserTrainingById($validated)
    {
        return $this->enrolledCourseModel->query()
        ->with([
            "training.module.moduleType",
            "training.module.charge.chargeCategory"
        ])
        ->whereKey($validated["courseId"])
        ->where("user_id", $validated["userId"])
        ->get();
    }
    public function getRankLicense()
    {
        $cacheKey = "rank:license:all";
        return Cache::remember($cacheKey, 3600, function() {
            return [
            "ranks" => $this->rankModel->all(),
            "licenses" => $this->licenseModel->all(),
            ];
        });
    }
    public function forgetCache($userId)
    {
        return;
    } 
}