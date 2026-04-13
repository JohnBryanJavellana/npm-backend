<?php

namespace App\Http\Requests\Admin\Enrollment;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCourse extends FormRequest
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
            'course_name' => ['required', 'string'],
            'httpMethod' => ['required', 'string', 'in:POST,UPDATE'],
            'course_status' => ['required_if:httpMethod,UPDATE', 'string', 'in:ACTIVE,INACTIVE'],
            'courseId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:main_courses,id'],
        ];
    }
}
