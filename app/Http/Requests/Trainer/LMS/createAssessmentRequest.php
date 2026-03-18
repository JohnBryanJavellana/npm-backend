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
        \Log::info("datacreate", [$this->all()]);
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
            "course_module_id" => [
                "nullable",
                "exists:course_modules,id",
                "required_without:training_id",
            ],
            "training_id" => [
                "nullable",
                "exists:trainings,id",
                "required_without:course_module_id",
            ],
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "instructions" => ["required", "string"],
            "passed_type" => ["required", "string"],
            "passing_score" => ["required","numeric"],
            "is_hidden" => ["sometimes","required", "boolean"],
            "type" => ["required","in:EXAM,QUIZ,ACTIVITY,ASSSIGNMENT"],
            "end_date" => ["sometimes","required", "date"],
            "end_time" => ["sometimes","required"],
            // "start_date" => ["required", "date"],
            // "start_time" => ["required"],
            "time_limit" => ["required"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        // $errors = $validator->errors();
        // $firstError = $errors;
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors(),
                // "errors" => $errors,
            ], 422)
        );
    }
}
