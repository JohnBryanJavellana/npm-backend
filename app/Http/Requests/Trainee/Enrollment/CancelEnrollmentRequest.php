<?php

namespace App\Http\Requests\Trainee\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CancelEnrollmentRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("CancelEnrollmentRequest", [$this->all()]);
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => $this->user()->role === UserRoleEnum::SUPERADMIN ? $this->userId : $this->user()->id,
            "enrolled_course_id" => $this->route("course")
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
            "enrolled_course_id" => "required|exists:enrolled_courses,id",
            "training_id" => "required|exists:trainings,id"
        ];
    }

    public function attributes()
    {
        return [
            "user_id" => "User",
            "enrolled_course_id" => "Enrollment Request",
            "training_id" => "Training"
        ];
    }

    public function messages()
    {
        return [
            "user_id.exists" => "User not found.",
            "enrolled_course_id.exists" => "Enrollment Request not found.",
            "training_id.exists" => "Training does not exist anymore."
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $erorrs = $validator->errors();
        $firstError = $erorrs->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $erorrs
            ], 422)
        );
    }
}
