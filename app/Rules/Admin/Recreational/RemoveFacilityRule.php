<?php

namespace App\Rules\Admin\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAFacility;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveFacilityRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_facility = RAFacility::withCount([ 'hasData' ])->lockForUpdate()->findOrFail($value);

        if($this_facility->has_data_count > 0) {
            $fail(AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYFACILITY->value);
        }
    }
}
