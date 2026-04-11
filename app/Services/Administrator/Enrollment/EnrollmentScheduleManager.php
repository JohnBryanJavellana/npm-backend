<?php

namespace App\Services\Administrator\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Training;

class EnrollmentScheduleManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $scheduleId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $scheduleId) {
        Training::updateOrCreate(['id' => $scheduleId], $payload->only([
            'course_module_id',
            'schedule_from',
            'schedule_to',
            'schedule_slot',
            'venue',
            'room',
            'batch_number',
            'schedule_preference',
            'daily_hours',
            'status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::ENROLLMENTCTRL_CREATED_ENROLLMENTSCHED->value
                : AdministratorReturnResponse::ENROLLMENTCTRL_UPDATED_ENROLLMENTSCHED->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeSchedule
     * @param int $scheduleId
     * @return array{message: string, status: int}
     */
    public function removeSchedule(int $scheduleId) {
        Training::whereKey($scheduleId)->delete();
        return [
            'message' => AdministratorReturnResponse::ENROLLMENTCTRL_REMOVED_ENROLLMENTSCHED->value,
            'status' => 200
        ];
    }
}
