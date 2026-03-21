<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitoryRoom extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-DORMITORY']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'room_name' => ['required', 'string'],
            'room_slot' => ['required', 'numeric', 'min:0'],
            'dormitory' => ['required', 'string', 'in:OFFICERS,RATINGS'],
            'room_type' => ['required', 'string', 'in:AIRCON,NON-AIRCON'],
            'guest_gender' => ['required', 'string', 'in:MALE,FEMALE'],
            'wing' => ['required', 'string', 'in:A,B,C,D'],
            'floor' => ['required', 'numeric', 'min:1'],
            'room_cost' => ['required', 'numeric'],
            'guest_cost' => ['required', 'numeric'],
            'data_room_image' => ['sometimes', 'array'],
            'room_image' => ['sometimes', 'array'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'documentId' => [Rule::when($this->httpMethod === "UPDATE", ['required', 'exists:dormitory_rooms,id'], ['nullable'])],
        ];
    }
}
