<?php

namespace App\Http\Requests\Admin\Account;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonal extends FormRequest
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
            'firstName' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'middleName' => ['string'],
            'lastName' => ['required', 'string'],
            'birthdate' => ['required', 'date', 'before:today'],
            'email' => ['required', 'email', 'unique:users,email,' . $this->user()->id],
        ];
    }
}
