<?php

namespace App\Rules\Admin\Enrollment;

use App\Enums\AdministratorReturnResponse;
use App\Models\MainCourse;
use App\Models\MainSchool;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveMainCourseRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_school = MainCourse::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_school->has_data_count > 0) {
            $fail(AdministratorReturnResponse::ENROLLMENTCTRL_ERR_ENROLLMENTCOURSE->value);
        }
    }
}
