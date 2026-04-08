<?php

namespace App\Http\Requests\Trainer\LMS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateAssSectionRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("updateSection", [$this->all()]);
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
            "section_id" => ["required", "exists:assessment_sections,id"],
            "title" => ["sometimes", "required", "string", "max:255"],
            "instruction" => ["sometimes", "required", "string"],
            "status" => ["sometimes", "required", "in:ACTIVE,INACTIVE"],
        ];
    }

    public function messages()
    {
        return [
            "assessments_id.required" => "The parent assessment was not found."
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
