<?php

namespace App\Http\Requests\Admin\Library;

use Illuminate\Foundation\Http\FormRequest;

class RequestFine extends FormRequest
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
            'amount' => ['required', 'numeric'],
            'httpMethod' => ['required', 'string'],
            'details' => ['required', 'string'],
            'charge' => ['required'],
            'book_res_id' => ['required'],
            'user_id' => ['required'],
            'selectedBookReservations' => ['required', 'array'],
        ];
    }
}
