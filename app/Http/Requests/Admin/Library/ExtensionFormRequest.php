<?php

namespace App\Http\Requests\Admin\Library;

use Illuminate\Foundation\Http\FormRequest;

class ExtensionFormRequest extends FormRequest
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
            'bookData' => ['required', 'array'],
            'bookData.*.currentToDate' => ['required', 'date'],
            'bookData.*.dateOfExtension' => ['required', 'date'],
            'bookData.*.bookReservationId' => ['required', 'numeric'],
            'userId' => ['required', 'numeric'],
            'bookResId' => ['required', 'numeric'],
            'purpose' => ['required'],
        ];
    }
}
