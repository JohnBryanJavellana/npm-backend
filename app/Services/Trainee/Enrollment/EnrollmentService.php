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
        return $this->enrolledCourseModel->query()->select("id", "training_id", "bgColor", "enrolled_course_status", "created_at")
        ->with([
            "training:id,course_module_id,status,daily_hours,schedule_from,schedule_to,venue,room,schedule_preference,batch_number",
            "training.module:id,module_type_id,charge_id,name,acronym,compendium",
            "training.module.moduleType:id,name",
            "training.module.charge:id,charge_category_id,name,amount,description,service_type",
            "training.module.charge.chargeCategory:id,name"
        ])
        ->status($validated["status"])
        ->forUser($validated["userId"])
        ->get();
    }

    public function getUserTrainingById($validated)
    {
        return $this->enrolledCourseModel->query()
        ->with([
            "training:id,course_module_id,status,daily_hours,schedule_from,schedule_to,venue,room,schedule_preference,batch_number",
            "training.module:id,module_type_id,charge_id,name,acronym,compendium",
            "training.module.moduleType:id,name",
            "training.module.charge:id,charge_category_id,name,amount,description,service_type",
            "training.module.charge.chargeCategory:id,name"
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
            "ranks" => $this->rankModel->all("id", "name", "short_name", "type"),
            "licenses" => $this->licenseModel->all("id", "license", "short_name"),
            ];
        });
    }
    public function forgetCache($userId)
    {
        return;
    } 
}