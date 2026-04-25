<?php

namespace App\Rules\Admin\Dormitory;

use App\Models\DormitoryInventoryItem;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveInventoryStockRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_inventory_stock = DormitoryInventoryItem::withCount(['borrowed'])->findOrFail($value);

        if($this_inventory_stock->borrowed_count > 0) {
            $fail("This inventory stock cannot be deleted because it is linked to existing inclusion request.");
        }
    }
}
