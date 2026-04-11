<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\RemoveEquipmentStockRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveEquipmentStock extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_RA->value
        ]);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'equipmentStockId' => $this->route('equipmentStockId')
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'equipmentStockId' => ['required', 'integer', 'exists:r_a_equipment_stocks,id', new RemoveEquipmentStockRule()]
        ];
    }
}
