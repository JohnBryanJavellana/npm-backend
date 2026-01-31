<?php

namespace App\Http\Requests\Trainee\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ViewApplicationRequest extends FormRequest
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
        $this->merge([
            "courseId" => $this->route("course"),
            "user_id" => in_array($this->user()->role, UserRoleEnum::enrollmentRoles()) 
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
            "courseId" => "required|exists:enrolled_courses,id",
            "user_id" => "required|exists:users,id"
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
