<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitoryCharge extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userId'      => ['required', 'integer', 'exists:users,id'],
            'tenantId'    => ['required', 'integer'],
            'amount'      => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'httpMethod'  => ['required', 'string'],
            'documentId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'status' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ]
        ];
    }
}
