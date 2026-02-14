<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
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
            'room_fee_type' => ['required', 'string'],
            'room_description' => ['required', 'string'],
            'room_cost' => ['required', 'numeric'],
            'room_guest_cost' => ['required', 'numeric'],
            'documentId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'room_status' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'room_image' => [ Rule::when($this->httpMethod === "POST", ['required'], ['nullable']) ],
            'room_slot' => [ Rule::when($this->httpMethod === "POST", ['required', 'numeric'], ['nullable']) ],
            'room_count' => [ Rule::when($this->httpMethod === "POST", ['required', 'numeric'], ['nullable']) ],
        ];
    }
}
