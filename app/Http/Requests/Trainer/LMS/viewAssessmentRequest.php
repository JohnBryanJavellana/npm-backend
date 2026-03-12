<?php

namespace App\Http\Requests\Trainer\LMS;

use Illuminate\Foundation\Http\FormRequest;

class viewAssessmentRequest extends FormRequest
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
            "training_id" => ["required", "exists:training,id"],
            "course_module_id" => ["sometimes ","required", "exists:course_modules,id"],
        ];
    }
}
