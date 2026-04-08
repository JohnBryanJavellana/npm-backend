<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\AdministratorReturnResponse;
use App\Models\DormitoryService;
use App\Utils\AuditHelper;
use App\Enums\AdministratorAuditActions;
use App\Utils\TransactionUtil;

class DormitoryServiceManager
{
    /**
     * Summary of createOrUpdate
     * @param mixed $payload
     * @param mixed $isPost
     * @return DormitoryService|\Illuminate\Database\Eloquent\Model
     */
    public function createOrUpdate(object $payload, bool $isPost) {
        $this_service = DormitoryService::updateOrCreate(
            ['id' => $payload->documentId],
            $payload->only(['name', 'description', 'charge', 'status'])
        );

        AuditHelper::log(
            $payload->user()->id,
            $isPost
                ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORYSERVICE->value
                : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORYSERVICE->value . " ID#{$this_service->id}"
        );

        return $this_service;
    }

    /**
     * Summary of removeService
     * @param int $currentUserId
     * @param int $serviceId
     * @return array{message: string, status: int}
     */
    public function removeService(int $currentUserId, int $serviceId) {
        $this_service = DormitoryService::withCount([
            'requestedService'
        ])->lockForUpdate()->findOrFail($serviceId);

        if($this_service->requested_service_count <= 0) {
            $this_service->delete();
            AuditHelper::log( $currentUserId, AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYSERVICE->value . " ID#$serviceId");

            return [
                'message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYSERVICE->value,
                'status' => 200
            ];
        }

        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYSERVICE->value,
            'status' => 409
        ];
    }
}
