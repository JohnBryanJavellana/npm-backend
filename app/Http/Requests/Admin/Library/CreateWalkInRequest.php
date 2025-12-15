<?php

namespace App\Http\Requests\Admin\Library;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateWalkInRequest extends FormRequest
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
            'borrower' => [ Rule::when($this->user()->role !== "TRAINER", ['required'], ['nullable']) ],
            'fromDate' => ['required', 'date'],
            'toDate' => ['required', 'date'],
            'purpose' => ['required', 'string'],
            'type' => ['required', 'string'],
            'bookId' => ['required', 'array'],
            'otherPurpose' => [ Rule::when($this->purpose === 'reason13', ['required'], ['nullable']) ]
        ];
    }
}
