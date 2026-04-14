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
            'control_number' => ['required', 'exists:assessments,control_number', 'string'],
            'fileUpload' => ['required', 'file']
        ];
    }
}
