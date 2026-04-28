<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Sponsor;
use App\Models\Voucher;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveSponsorRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_sponsor = Sponsor::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_sponsor->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTSPONSOR->value);
        }
    }
}
