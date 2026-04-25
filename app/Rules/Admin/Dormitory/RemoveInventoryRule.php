<?php

namespace App\Rules\Admin\Dormitory;

use App\Models\DormitoryInventory;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveInventoryRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_inventory = DormitoryInventory::withCount(['borrowings'])->findOrFail($value);

        if($this_inventory->borrowings_count > 0) {
            $fail("This inventory cannot be deleted because it is linked to existing inclusion request.");
        }
    }
}
