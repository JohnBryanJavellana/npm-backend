<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class ViewAllByUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => in_array($this->user()->role, [
                UserRoleEnum::ADMIN_ENROLLMENT->value,
                UserRoleEnum::SUPERADMIN->value
            ]) 
                ? $this->input("userId") 
                : $this->user()->id
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
            "user_id" => "required|exists:users,id"
        ];
    }
}
