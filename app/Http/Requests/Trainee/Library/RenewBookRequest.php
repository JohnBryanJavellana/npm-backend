<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RenewBookRequest extends FormRequest
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
                UserRoleEnum::SUPERADMIN->value,
                UserRoleEnum::ADMIN_LIBRARY->value
            ])
                ? $this->input("userId")
                : $this->user()->id
        ]);

        \Log::info("user", [$this->all()]);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            "data" => "required|array",
            "data.*.book_res_id" => "required|exists:book_reservations,id",
            "data.*.to" => "required|date"
        ];

        if(in_array($this->user()->role, [
                UserRoleEnum::SUPERADMIN->value,
                UserRoleEnum::ADMIN_LIBRARY->value
            ])) {
            $rules['user_id'] = "required|exists:users,id";
        }

        return $rules;
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
