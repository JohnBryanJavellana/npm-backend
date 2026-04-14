<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\Requirement;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveRequirementRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_requirement = Requirement::withCount([
            'hasData',
            'trainee_file'
        ])->lockForUpdate()->findOrFail($value);

        if($this_requirement->has_data_count > 0 || $this_requirement->trainee_file_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTREQUIREMENT->value);
        }
    }
}
