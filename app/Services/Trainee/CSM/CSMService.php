<?php

namespace App\Services\Trainee\CSM;

use App\Enums\ModuleNameEnum;
use App\Enums\RequestStatus;
use App\Models\CSM;
use App\Models\DormitoryTenant;
use App\Models\BookRes;
use App\Models\EnrolledCourse;
use App\Models\RARequestInfo;
use DomainException;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isInstanceOf;

class CSMService {
    public function __construct(
        protected CSM $csmModel,
        protected EnrolledCourse $enrolledCourseModel,
        protected BookRes $bookResModel,  
        protected RARequestInfo $rARequestInfoModel, 
        protected DormitoryTenant $dormitoryTenantModel, 
    ){}

    public function checkExistingCSM($validated, $userId)
    {
        $CSM = $this->csmModel->query()
        ->forUser($userId)
        ->where('reference_id' , $validated["reference_id"])
        ->exists();

        if($CSM) {
            throw new DomainException("A CSM is already existing for this request.");
        }
    }
    public function storeCustomerSatisfactionSurvey(array $validated, int $userId)
    {
        DB::transaction(function () use ($validated, $userId) {
            $this->csmModel->create(["user_id" => $userId, ...$validated]);

            match($validated["service"]) {
                ModuleNameEnum::LIBRARY->value => $this->updateReferenceRequest($validated["reference_id"], $validated["service"], "status"),
                ModuleNameEnum::ENROLLMENT->value => $this->updateReferenceRequest($validated["reference_id"], $validated["service"], "enrolled_course_status"),
                ModuleNameEnum::DORMITORY->value => $this->updateReferenceRequest($validated["reference_id"], $validated["service"], "tenant_status"),
                ModuleNameEnum::RECREATIONAL->value => $this->updateReferenceRequest($validated["reference_id"], $validated["service"], "status"),
                default => throw new DomainException("Unable to process!")
            };
        });
    }

    public function updateReferenceRequest($referenceId, $serviceType, $column)
    {
        $serviceModel = $this->getModelAndServiceType($serviceType);
        $serviceModel->query()->whereKey($referenceId)->update([$column => RequestStatus::COMPLETED->value]);
    }

    public function getModelAndServiceType(string $serviceType)
    {
        return match ($serviceType) {
            ModuleNameEnum::LIBRARY->value => $this->bookResModel,
            ModuleNameEnum::ENROLLMENT->value => $this->enrolledCourseModel,
            ModuleNameEnum::DORMITORY->value => $this->dormitoryTenantModel,
            ModuleNameEnum::RECREATIONAL->value => $this->rARequestInfoModel,
        };
    }
}