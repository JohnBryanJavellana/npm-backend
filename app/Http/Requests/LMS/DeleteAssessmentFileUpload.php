<?php

namespace App\Http\Requests\LMS;

use Illuminate\Foundation\Http\FormRequest;

class DeleteAssessmentFileUpload extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'assessmentSubmmissionId' => $this->route('assessmentSubmmissionId')
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
            'assessmentSubmmissionId' => ['required', 'exists:assessment_submissions,id', 'integer'],
        ];
    }
}
