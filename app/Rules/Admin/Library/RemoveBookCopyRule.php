<?php

namespace App\Rules\Admin\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\BookCopy;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveBookCopyRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_book_entry = BookCopy::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_book_entry->has_data_count > 0) {
            $fail(AdministratorReturnResponse::LIBRARYCTRL_ERR_LIBRARYBOOKCOPY->value);
        }
    }
}
