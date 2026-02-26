<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitoryCharge extends FormRequest
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
            'userId' => ['required'],
            'tenantId' => ['required'],
            'amount' => ['required', 'numeric'],
            'details' => ['required', 'string'],
            'httpMethod' => ['required'],
            'documentId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'status' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ]
        ];
    }
}
