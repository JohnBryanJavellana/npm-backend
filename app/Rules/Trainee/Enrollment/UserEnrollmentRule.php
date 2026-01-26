<?php

namespace App\Rules\Trainee\Enrollment;

use App\Enums\RequestStatus;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\{EnrolledCourse, Training, User};

class UserEnrollmentRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function __construct(protected ?User $user) { }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $statuses = [
            RequestStatus::CANCELLED->value,
            RequestStatus::DECLINED->value,
            RequestStatus::COMPLETED->value,
            RequestStatus::CSFB->value,
            RequestStatus::IR->value,
        ];

        $existingRequest = EnrolledCourse::forUser($this->user->id)
            ->where('training_id', $value)
            ->whereNotIn('enrolled_course_status', $statuses)
            ->exists();

        if ($existingRequest) {
            $fail("Training request is already existing in your list!");
        }

        $availableSlots = Training::findOrFail($value)
            ->value("schedule_slot");

        if($availableSlots <= 0) {
            $fail("There is no remaining slot for this training schedule.");
        }

    }
}
