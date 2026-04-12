<?php

namespace App\Http\Requests\Admin\Library;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_LIBRARY->value
        ]);
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
            'book_genre_id' => ['required', 'numeric', 'exists:book_genres,id'],
            'isbn' => ['nullable', 'required'],
            'editor' => ['nullable', 'string'],
            'publisher' => ['nullable', 'string'],
            'type' => ['nullable', 'string'],
            'pages' => ['nullable', 'string'],
            'call_number' => ['nullable', 'string'],
            'file_location' => ['nullable', 'string'],
            'publication_year' => ['nullable', 'string', 'min:4', 'max:4'],
            'price' => ['nullable', 'numeric'],
            'copies' => ['required_if:httpMethod,POST', 'integer', 'max:30', 'nullable'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'bookId' => ['required_if:httpMethod,UPDATE', 'exists:books,id'],
            'catalogId' => ['required_if:httpMethod,UPDATE', 'exists:book_catalogs,id'],

            'pdf_file' => ['nullable', 'file'],
            'photo' => ['required_if:httpMethod,POST', 'file'],
        ];
    }
}
