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
            'genre' => ['required', 'numeric'],
            'isbn' => ['required'],
            'author' => ['required', 'string'],
            'editor' => ['required', 'string'],
            'publisher' => ['required', 'string'],
            'type' => ['required', 'string'],
            'pages' => ['required', 'string'],
            'call_number' => ['required', 'string'],
            'file_location' => ['required', 'string'],
            'publication_year' => ['required', 'string'],
            'price' => ['required', 'numeric'],

            'httpMethod' => ['required'],
            'catalogId' => [ Rule::when($this->httpMethod === "UPDATE", ['required'], ['nullable']) ],
            'photo' => [ Rule::when($this->httpMethod === 'POST', ['required'], ['nullable']) ],
            'copies' => [ Rule::when($this->copies, ['required', 'numeric', 'min:1'], ['nullable']) ],
            'pdfCopy' => [ Rule::when($this->httpMethod === 'POST' && $this->copies <= 0, ['required'], ['nullable']) ],
        ];
    }
}
