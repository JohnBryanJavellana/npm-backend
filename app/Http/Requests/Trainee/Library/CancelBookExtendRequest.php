<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use App\Http\Middleware\UserRole;
use Illuminate\Foundation\Http\FormRequest;

class CancelBookExtendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "userId" => in_array($this->user()->role, [
                UserRoleEnum::SUPERADMIN->value,
                UserRoleEnum::ADMIN_LIBRARY->value
            ])
                ? $this->userId
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
            "userId" => "required|exists:users,id",
            "book_res_id" => "required|exists:book_reservations,id",
            "request_id" => "required|exists:book_res,id"        
        ];
    }
}
