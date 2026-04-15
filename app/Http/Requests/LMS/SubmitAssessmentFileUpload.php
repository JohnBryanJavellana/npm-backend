<?php

namespace App\Http\Requests\LMS;

use Illuminate\Foundation\Http\FormRequest;

class SubmitAssessmentFileUpload extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'assessmentControlNumber' => ['required', 'exists:assessments,control_number', 'string'],
            'enrolledCourseId' => ['required', 'exists:enrolled_courses,id', 'integer'],
            'attemptId' => ['nullable', 'exists:assessment_attempts,id'],
            'fileUpload' => ['required', 'array'],
            'fileUpload.*' => ['file']
        ];
    }
}
