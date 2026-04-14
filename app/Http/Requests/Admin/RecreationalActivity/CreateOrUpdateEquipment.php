<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateEquipment extends FormRequest
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
            'oldPhotosId' => $this->oldPhotosId ?? [],
            'photos' => $this->photos ?? []
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
            'name' => ['required', 'string'],
            'additional_details' => ['nullable'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'availability_status' => ['required_if:httpMethod,UPDATE', 'in:AVAILABLE,UNAVAILABLE'],
            'photos' => ['required_if:httpMethod,POST', 'array', 'nullable'],
            'photos.*' => ['file'],
            'oldPhotosId' => ['nullable', 'array'],
            'oldPhotosId.*' => ['integer', 'exists:r_a_equipment_images,id'],
            'equipmentId' => ['required_if:httpMethod,UPDATE', 'exists:r_a_equipments,id'],
            'stock' => ['nullable', 'numeric'],
        ];
    }
}
