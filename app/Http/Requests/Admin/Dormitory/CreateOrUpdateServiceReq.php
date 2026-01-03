<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateServiceReq extends FormRequest
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
            'user_id' => ['required'],
            'service_id' => ['required'],
            'charge' => ['required'],
            'httpMethod' => ['required'],
            'remarks' => [ Rule::when($this->status === "DECLINED", ['required'], ['nullable']) ],
            'documentId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ]
        ];
    }
}
