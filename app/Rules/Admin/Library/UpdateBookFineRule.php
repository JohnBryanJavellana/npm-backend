<?php

namespace App\Rules\Admin\Library;

use App\Enums\Administrator\CashierEnum;
use App\Models\LibraryInvoice;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpdateBookFineRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_invoice = LibraryInvoice::first($value);

        if($this_invoice && !\in_array($this_invoice->invoice_status, [CashierEnum::PENDING->value])) {
            $fail("Invoice is already $this_invoice->invoice_status.");
        }
    }
}
