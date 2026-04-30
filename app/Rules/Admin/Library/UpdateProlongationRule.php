<?php

namespace App\Rules\Admin\Library;

use App\Enums\Administrator\CashierEnum;
use App\Enums\Administrator\LibraryEnum;
use App\Models\BookExtensionRequest;
use App\Models\BookReservation;
use App\Models\LibraryInvoice;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpdateProlongationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_prolongation_request = BookExtensionRequest::find($value);

        if ($this_prolongation_request && !\in_array($this_prolongation_request->status, [LibraryEnum::PENDING->value])) {
            $fail("Can't update prolongation request right now.");
        }
    }
}
