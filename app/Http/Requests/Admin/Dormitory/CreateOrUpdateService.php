<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateService extends FormRequest
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
            'name' => ['required'],
            'charge' => ['required'],
            'httpMethod' => ['required'],
            'status' => ['required', 'in:AVAILABLE,UNAVAILABLE'],
            'documentId' => ['required_if:httpMethod,UPDATE', 'exists:dormitory_services,id'],
        ];
    }
}
