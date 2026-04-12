<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateFacility extends FormRequest
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
            'photos' => $this->photos ?? [],
            'open_time'  => $this->open_time === 'null' ? null : $this->open_time,
            'close_time' => $this->close_time === 'null' ? null : $this->close_time,
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
            'name' => ['required', 'string', 'max:255'],
            'open_time' => ['nullable', 'date_format:Y-m-d H:i'],
            'close_time' => ['nullable', 'date_format:Y-m-d H:i', 'after:open_time'],
            'location' => ['required', 'string'],
            'additional_details' => ['nullable', 'string'],
            'condition_status' => ['required', 'string', 'in:GOOD CONDITION,DAMAGED'],
            'availability_status' => ['required', 'string', 'in:AVAILABLE,UNAVAILABLE'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'oldPhotosId' => ['array', 'nullable'],
            'oldPhotosId.*' => ['integer', 'exists:r_a_facility_images,id'],
            'photos' => ['required_if:httpMethod,POST', 'array', 'nullable'],
            'photos.*' => ['file'],
            'related_equipment' => ['array', 'nullable'],
            'related_equipment.*' => ['integer', 'exists:r_a_equipments,id'],
            'facilityId' => ['required_if:httpMethod,UPDATE', 'exists:r_a_facilities,id'],
        ];
    }
}
