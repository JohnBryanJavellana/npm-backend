<?php

namespace App\Services\Trainee\Enrollment;

use App\Enums\RequestStatus;
use App\Models\{EnrolledCourse, Rank, License, Training};
use DomainException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class EnrollmentService {

    public $notAllowedStatuses = [
        RequestStatus::ENROLLED,
        RequestStatus::COMPLETED,
        RequestStatus::CANCELLED,
        RequestStatus::DECLINED,
        RequestStatus::IR,
        RequestStatus::CSFB,
        RequestStatus::PAID,
        RequestStatus::PROCESSING_PAYMENT
    ];

    public function __construct(
        protected EnrolledCourse $enrolledCourseModel,
        protected Training $trainingModel,
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

    public function validateTraining($training)
    {

        if($training->schedule_slot <= 0) {
            throw new DomainException("There is no remaining slot for this training schedule.");
        }

        $specificReqCount = $training->module()->hasData()->count();
    }

    public function storeEnrollmentRequest($validated)
    {
        $training = $this->trainingModel->query()
        ->whereKey($validated["training_id"])
        ->active()
        ->lockForUpdate()
        ->findOrFail(["id", "schedule_slot"]);

        $this->validateTraining($training);

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

    public function prepareDataForCancellation($record)
    {
        if(!$record) {
            throw new DomainException("Enrollment request not found.");
        }

        if(in_array($record->enrolled_course_status, $this->notAllowedStatuses)) {
            throw new DomainException("Cancellation is no longer available for this request.");
        }
    }

    public function cancelEnrollmentRequest($validated)
    {
        DB::transaction(function() use ($validated){
            $record = $this->enrolledCourseModel->query()
                ->forUser($validated["user_id"])
                ->whereKey($validated["enrolled_course_id"])
                ->lockForUpdate()
                ->first();

            $this->prepareDataForCancellation($record);

            $record->update([
                "enrolled_course_status" => RequestStatus::CANCELLED
            ]);
        });
    }

    public function forgetCache($userId)
    {
        return;
    }
}