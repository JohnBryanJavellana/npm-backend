<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateEquipmentStock extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'equipmentId' => ['required_if:httpMethod,UPDATE', 'exists:r_a_equipments,id'],
            'stockCount' => ['nullable', 'numeric'],
        ];
    }
}
