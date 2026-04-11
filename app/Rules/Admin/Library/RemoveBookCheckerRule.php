<?php

namespace App\Rules\Admin\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\Book;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveBookCheckerRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_book = Book::withCount([
            'hasData',
            'copies'
        ])->lockForUpdate()->findOrFail($value);

        if($this_book->has_data_count > 0) {
            $fail(AdministratorReturnResponse::LIBRARYCTRL_ERR_LIBRARYBOOK->value);
        }
    }
}
