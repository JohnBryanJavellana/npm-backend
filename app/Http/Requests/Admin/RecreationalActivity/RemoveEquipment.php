<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\RemoveEquipmentStockRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveEquipment extends FormRequest
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
            'equipmentId' => $this->route('equipmentId')
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
            'equipmentId' => ['required', 'integer', 'exists:r_a_equipments,id', new RemoveEquipmentStockRule()]
        ];
    }
}
