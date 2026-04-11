<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\CourseModule;
use App\Models\Training;

class EnrollmentModuleManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $moduleId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $moduleId) {
        CourseModule::updateOrCreate(['id' => $moduleId], $payload->only([
            'module_type_id',
            'name',
            'acronym',
            'number_of_days',
            'compendium',
            'status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTMODULE->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTMODULE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeModule
     * @param int $moduleId
     * @return array{message: string, status: int}
     */
    public function removeModule(int $moduleId) {
        CourseModule::whereKey($moduleId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTMODULE->value,
            'status' => 200
        ];
    }
}
