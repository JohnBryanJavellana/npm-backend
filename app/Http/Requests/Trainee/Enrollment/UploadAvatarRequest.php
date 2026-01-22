<?php

namespace App\Http\Requests\Trainee\Enrollment;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UploadAvatarRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {

        //in_array()
        $this->merge([
            "user_id" => $this->user()->role === UserRoleEnum::SUPERADMIN ? $this->user_id : $this->user()->id
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
            "user_id" => "required|exists:users,id",
            // "avatar" => "required|file|mimes:jpeg,png,jpg"
            "avatar" => "required"
        ];
    }

    public function attributes()
    {
        return [
            "user_id" => "User",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "erorrs" => $errors
            ], 422)
        );
    }
}
