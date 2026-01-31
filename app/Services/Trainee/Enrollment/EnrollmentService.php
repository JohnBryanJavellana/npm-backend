<?php

namespace App\Services\Trainee\Enrollment;

use App\Enums\RequestStatus;
use App\Http\Resources\TrainingListResource;
use App\Models\{EnrolledCourse, Rank, License, Requirement, Training};
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
        protected License $licenseModel,
        protected Requirement $requirementModel,
    ) {}

    /**
     * Summary of getUserTrainings
     * @param mixed $validated
     */
    public function getUserTrainings($validated)
    {
        return $this->enrolledCourseModel->query()->select("id", "training_id", "bgColor", "enrolled_course_status", "created_at")
        ->with([
            "training:id,course_module_id,status,daily_hours,schedule_from,schedule_to,venue,room,schedule_preference,batch_number",
            "training.module:id,module_type_id,name,acronym,compendium",
            "training.module.moduleType:id,name",
        ])
        ->status($validated["status"])
        ->forUser($validated["userId"])
        ->get();
    }

    public function getUserTrainingById($validated)
    {
        $enrolled = $this->enrolledCourseModel->query()
        ->with([
            "training:id,course_module_id,status,daily_hours,schedule_from,schedule_to,venue,room,schedule_preference,batch_number",
            "training.module:id,module_type_id,name,acronym,compendium",
            "training.module.moduleType:id,name",

            "training.module.trainingFees" => fn($q) => $q->select(["id","course_module_id","charge_category_id","name","amount"])->latest(),
            "training.module.trainingFees.category:id,name",

            "training.module.facilitator:id,course_module_id,user_id,role",
            "training.module.facilitator.facilitator:id,fname,mname,lname,email",
            "invoice"
        ])
        ->whereKey($validated["courseId"])
        ->where("user_id", $validated["user_id"])
        ->firstOrFail();
        
        $data = $this->getModuleRequirements($validated, $enrolled?->training?->course_module_id);
        $enrolled->requirements = $data;
        return $enrolled;
    }

    protected function getModuleRequirements($validated, $module_id)
    {
        $userId = $validated["userId"];
        $en_course_id = $validated["courseId"];

        $requirement = $this->requirementModel->query()
        ->with([
            "trainee_file" => function ($query) use ($userId) {
                $query->whereRelation("additional_info", "user_id", $userId);
            },
            "uploaded_specific_requirement" => function ($query) use ($en_course_id, $userId) {
                $query->where('enrolled_course_id', $en_course_id, )
                    ->whereRelation('enrolled_course', 'user_id', '=', $userId)
                    ->latest();
                }
        ])
         ->where(function($query) use ($module_id) {
                $query->whereRelation('forModules', 'course_module_id', '=', $module_id)
                    ->orWhere("isBasic", "YES");
        })
        ->get();

        return TrainingListResource::collection($requirement);
    }

    public function validateTraining($training, $validated, $addtional_info_id)
    {
        if($training->schedule_slot <= 0) {
            throw new DomainException("There is no remaining slot for this training schedule.");
        }

        $userBasicReq = $this->requirementModel->query()->userCountReq($addtional_info_id)->active()->basic()->count();
        $TotalRequirements = $this->requirementModel->query()->eachModuleRequirements($training->course_module_id)->count();

        // if(count($validated["file_upload"]) < $totalReq) {
        //     throw new DomainException("Incomplete Requirements, Try again bitch!");
        // }
    }

    public function storeEnrollmentRequest($validated)
    {
        $training = $this->trainingModel->query()
        ->whereKey($validated["training_id"])
        ->active()
        ->lockForUpdate()
        ->firstOrFail(["id", "schedule_slot"]);

        // $this->validateTraining($training, $validated);

    }

    public function storeBasic()
    {
        return;
    }

    public function storeSpecific()
    {
        return;
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