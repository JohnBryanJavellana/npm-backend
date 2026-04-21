<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Requirement;
use App\Utils\SaveFile;

class EnrollmentRequirementManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $requirementId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $requirementId) {
        $preparedData = $payload->only(['name', 'description', 'isRequired', 'isBasic', 'status']);

        if($payload->hasFile('upload_reference')) {
            $preparedData['upload_reference'] = SaveFile::save($payload->file('upload_reference'), "upload-reference");
        }

        $this_requirement = Requirement::updateOrCreate(['id' => $requirementId], $preparedData);

        if(isset($payload->requirement_specific_modules)) {
            $this_requirement->forSpecificModules()->sync($payload->requirement_specific_modules);
        }

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTREQUIREMENT->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTREQUIREMENT->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeRequirement
     * @param int $requirementId
     * @return array{message: string, status: int}
     */
    public function removeRequirement(int $requirementId) {
        Requirement::whereKey($requirementId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTREQUIREMENT->value,
            'status' => 200
        ];
    }
}
