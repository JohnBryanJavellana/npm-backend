<?php

namespace App\Http\Requests\Admin\Library;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateBookRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'entry' => ['required', 'numeric'],
            'isbn' => ['nullable', 'required'],
            'author' => ['nullable', 'string'],
            'editor' => ['nullable', 'string'],
            'publisher' => ['nullable', 'string'],
            'type' => ['nullable', 'string'],
            'pages' => ['nullable', 'string'],
            'call_number' => ['nullable', 'string'],
            'file_location' => ['nullable', 'string'],
            'publication_year' => ['nullable', 'string'],
            'price' => ['nullable', 'numeric'],
            'pdf_file' => ['nullable', 'string'],
            'copies' => ['nullable', 'string'],

            'httpMethod' => ['required'],
            'catalogId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'photo' => [ Rule::when($this->httpMethod === "POST", ['required'], ['nullable']) ],
        ];
    }
}
