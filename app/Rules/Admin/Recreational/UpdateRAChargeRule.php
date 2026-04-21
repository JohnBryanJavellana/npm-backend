<?php

namespace App\Rules\Admin\Recreational;

use App\Enums\Administrator\RAEnum;
use App\Models\RAInvoices;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpdateRAChargeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_ra_invoice = RAInvoices::lockForUpdate()->whereKey($value)->first();

        if ($this_ra_invoice && \in_array($this_ra_invoice->invoice_status, [
            RAEnum::CANCELLED->value,
            RAEnum::PAID->value
        ])) {
            $fail("We're sorry. You can't update this charge for the moment.");
        }
    }
}
