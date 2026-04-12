<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\ModuleType;
use App\Utils\DocumentExistenceChecker;

class EnrollmentModuleTypeManager
{
    public function __construct(
        public DocumentExistenceChecker $documentExistenceChecker
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $moduleTypeId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $moduleTypeId) {
        $isModuleTypeExists = $this->documentExistenceChecker->checkForExistence(ModuleType::class, ['name' => $payload->name], $moduleTypeId);

        if($isModuleTypeExists) {
            return ['message' => "Module type already exist.", 'status' => 409];
        }

        ModuleType::updateOrCreate(['id' => $moduleTypeId], $payload->only([
            'name',
            'status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTMODULETYPE->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTMODULETYPE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeModuleType
     * @param int $moduleTypeId
     * @return array{message: string, status: int}
     */
    public function removeModuleType(int $moduleTypeId) {
        ModuleType::whereKey($moduleTypeId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTMODULETYPE->value,
            'status' => 200
        ];
    }
}
