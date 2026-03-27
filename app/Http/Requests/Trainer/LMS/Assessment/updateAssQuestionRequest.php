<?php

namespace App\Http\Requests\Trainer\LMS\Assessment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateAssQuestionRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("upddaetQuestion", [$this->all()]);
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
            "question_id" => ["required", "exists:assessment_questions,id"],
            "assessment_section_id" => ["required", "exists:assessment_sections,id"],
            "question" => ["sometimes", "required", "string"],
            "type" => ["sometimes", "required", "in:MCQ,TRUE_FALSE,ESSAY"],
            "score" => ["sometimes", "required"],
            "deleted_choice_ids" => ["sometimes", "required"],
            "choices" => ["sometimes", "required", "array"],
            "choices.*.option_text" => ["sometimes", "required", "string"],
            "choices.*.is_correct" => ["sometimes", "required"],
            "choices.*.id" => ["sometimes", "nullable"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors()->first()
            ], 422)
        );
    }
}
