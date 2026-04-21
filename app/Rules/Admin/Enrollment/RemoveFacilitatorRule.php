<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\TrainingFacilitator;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveFacilitatorRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_facilitator = TrainingFacilitator::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_facilitator->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTFACILITATOR->value);
        }
    }
}
