<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\License;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveLicenseRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_license = License::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_license->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTLICENSE->value);
        }
    }
}
