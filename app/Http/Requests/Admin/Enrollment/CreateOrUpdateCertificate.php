<?php

namespace App\Http\Requests\Admin\Enrollment;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCertificate extends FormRequest
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
            'module' => ['required'],
            'name' => ['required', 'string'],
            'header' => ['required', 'string'],
            'header_1' => ['required', 'string'],
            'header_2' => ['required', 'string'],
            'body' => ['required', 'string'],
            'httpMethod' => ['required'],
            'documentId' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])]
        ];
    }
}
