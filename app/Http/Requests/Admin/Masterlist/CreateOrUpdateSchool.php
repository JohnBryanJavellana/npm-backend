<?php

namespace App\Http\Requests\Admin\Masterlist;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateSchool extends FormRequest
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
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'httpMethod' => ['required'],
            'documentId' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])],
            'status' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])]
        ];
    }
}
