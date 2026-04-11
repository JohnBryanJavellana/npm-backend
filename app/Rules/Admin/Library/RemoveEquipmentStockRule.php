<?php

namespace App\Rules\Admin\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAEquipmentStock;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RemoveEquipmentStockRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this_equipment_stock = RAEquipmentStock::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($value);

        if($this_equipment_stock->has_data_count > 0) {
            $fail(AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_ERR_RECREATIONALACTIVITYFACILITY->value);
        }
    }
}
