<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\CourseModule;
use App\Models\ModuleType;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveModuleTypeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_module_type = ModuleType::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_module_type->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTMODULETYPE->value);
        }
    }
}
