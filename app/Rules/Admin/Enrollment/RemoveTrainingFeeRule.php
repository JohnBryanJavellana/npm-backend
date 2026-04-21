<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\CourseModuleFee;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveTrainingFeeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_fee = CourseModuleFee::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_fee->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTTRAININGFEE->value);
        }
    }
}
