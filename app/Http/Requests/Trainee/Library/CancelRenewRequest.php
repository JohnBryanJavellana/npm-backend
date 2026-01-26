<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CancelRenewRequest extends FormRequest
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
            "userId" => in_array($this->user()->role, [
                UserRoleEnum::ADMIN_LIBRARY->value,
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
            "userId" => "required|exists:users,id",
            "book_res_id" => "required|exists:book_reservations,id",
            "request_id" => "required|exists:book_res,id"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors
            ], 422)
        );
    }
}
