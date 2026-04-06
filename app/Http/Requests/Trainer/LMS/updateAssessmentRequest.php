<?php

namespace App\Http\Requests\Trainer\LMS;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateAssessmentRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("dataUpdate", [$this->all()]);
        return $this->user() !== null && \in_array($this->user()?->role, UserRoleEnum::facilitatorRoles());
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "examId" => ["required", "exists:assessments,id"],
            "training_id" => ["sometimes","required", "exists:trainings,id","required_without:training_id"],
            "course_content_id" => ["sometimes","required", "exists:course_contents,id","required_without:course_module_id"],
            "title" => ["sometimes","required", "string"],
            "type" => ["sometimes","required", "in:EXAM,QUIZ,ASSIGNMENT,ACTIVITY"],
            "description" => ["sometimes","required", "string"],
            "instructions" => ["sometimes","required", "string"],
            "passed_type" => ["sometimes","required", "string"],
            "passing_score" => ["sometimes","required","numeric"],
            "is_hidden" => ["sometimes","required"],
            "start_date" => ["sometimes","required", "date"],
            "start_time" => ["sometimes","required"],
            "time_limit" => ["sometimes","required"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors()
            ], 422)
        );
    }
}
