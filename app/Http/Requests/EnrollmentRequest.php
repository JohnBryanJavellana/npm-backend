<?php

namespace App\Http\Requests;

use App\Enums\UserRoleEnum;
use App\Rules\Trainee\Enrollment\UserEnrollmentRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EnrollmentRequest extends FormRequest
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
            "user_id" => "required|exists:users,id",
            'training_id' => [
                'required',
                "exists:trainings,id",
                new UserEnrollmentRule($this->user())
            ],
            'file_upload' => 'required|array',
            'file_upload.*.req_id' => 'required|integer',
            'file_upload.*.is_basic' => 'required|in:YES,NO',
            'file_upload.*.file' => 'nullable|max:5120'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                'message' => implode(',', $errors)
            ], 422)
        );
    }
}
