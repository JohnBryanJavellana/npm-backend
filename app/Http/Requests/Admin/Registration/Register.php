<?php

namespace App\Http\Requests\Admin\Registration;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array
    {
        // Base rules for both Social and Standard
        $rules = [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'is_from_social_login' => ['required'],
            'email' => ['required', 'email'],
        ];

        if ($this->input('is_from_social_login') === 'NO') {
            $rules['email'] = ['required', 'email', 'unique:users,email'];
            $rules['birthdate'] = ['required', 'date', 'before:today'];
            $rules['gender'] = ['required', 'in:MALE,FEMALE,OTHER'];
            $rules['google_captcha'] = ['required'];
            $rules['password'] = [ 'required', 'confirmed', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&.]/'];
        }

        return $rules;
    }
}
