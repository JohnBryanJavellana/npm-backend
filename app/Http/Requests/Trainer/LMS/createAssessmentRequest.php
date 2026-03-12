<?php

namespace App\Http\Requests\Trainer\LMS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class createAssessmentRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("datadata", [$this->all()]);
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
            "moduleId" => ["sometimes", "required", "exists:course_modules,id"],
            "id" => ["sometimes", "required", "exists:trainings,id"],
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "passingScore" => ["required","numeric"],
            "startDate" => ["required", "date"],
            "dueDate" => ["required", "date"],
            "startTime" => ["required"],
            "dueTime" => ["required"],
            "timeLimit" => ["required"],
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors;
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors,
            ], 200)
        );
    }
}
