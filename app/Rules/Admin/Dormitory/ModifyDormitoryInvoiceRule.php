<?php

namespace App\Rules\Admin\Dormitory;

use App\Models\DormitoryInvoice;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ModifyDormitoryInvoiceRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_invoice = DormitoryInvoice::lockForUpdate()->findOrFail($value);

        if(\in_array($this_invoice->invoice_status, ["PAID", "CANCELLED"])) {
            $fail("This invoice cannot be modified because it is already $this_invoice->invoice_status.");
        }
    }
}
