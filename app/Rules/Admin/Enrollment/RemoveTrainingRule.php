<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Training;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveTrainingRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_training = Training::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_training->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTSCHED->value);
        }
    }
}
