<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\MainCertificate;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveMainCertificateRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_training = MainCertificate::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_training->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTCERT->value);
        }
    }
}
