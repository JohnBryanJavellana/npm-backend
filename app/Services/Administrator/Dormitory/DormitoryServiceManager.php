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
        // For creation, generate a new trace number. For update, find by ID.
        $this_service = DormitoryService::updateOrCreate(
            ['id' => $payload->documentId],
            $payload->only(['name', 'description', 'charge', 'status'])
        );

        // Log the appropriate audit action based on whether it's a creation or update.
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
     * @param mixed $request
     * @param int $serviceId
     * @return array{message: string, status: int}
     */
    public function removeService(int $currentUserId, int $serviceId) {
        // Lock the service record for update and check if there are any associated requested services.
        $this_service = DormitoryService::withCount([
            'requestedService'
        ])->lockForUpdate()->findOrFail($serviceId);

        // If there are no associated requested services, delete the service and log the action.
        // Otherwise, return a conflict response.
        if($this_service->requested_service_count <= 0) {
            $this_service->delete();
            AuditHelper::log( $currentUserId, AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYSERVICE->value . " ID#$serviceId");

            // Return a success response indicating the service was removed.
            return [
                'message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYSERVICE->value,
                'status' => 200
            ];
        }

        // Return a conflict response indicating that the service cannot be removed due to existing associations.
        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYSERVICE->value,
            'status' => 409
        ];
    }
}
