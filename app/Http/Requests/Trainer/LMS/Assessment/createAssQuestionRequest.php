<?php

namespace App\Http\Requests\Trainer\LMS\Assessment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class createAssQuestionRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("AssQCreateData", [$this->all()]);
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
            "assessment_section_id" => ["required", "exists:assessment_sections,id"],
            "question" => ["required", "string"],
            "type" => ["required", "in:MCQ,TRUE_FALSE,ESSAY"],
            "score" => ["required"],
            "choices" => ["sometimes", "required", "array"],
            "choices.*.option_text" => ["sometimes", "required", "string", "max:255"],
            "choices.*.is_correct" => ["sometimes", "required"],
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
