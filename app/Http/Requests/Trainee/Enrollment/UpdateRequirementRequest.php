<?php

namespace App\Http\Requests\Trainee\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequirementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     **/
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => in_array($this->user()->role, UserRoleEnum::enrollmentRoles()) 
                ? $this->input("userId")
                : $this->user()->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     **/

    public function rules(): array
    {
        return [
            "user_id" => "required|exists:users,id",
            "enrolled_course_id" => "required|exists:enrolled_courses,id",
            'file_upload' => 'required|array',
            'file_upload.*.requirement_id' => 'required',
            'file_upload.*.trainee_file_id' => 'required',
            'file_upload.*.is_basic' => 'required|in:YES,NO',
            'file_upload.*.file' => 'required|max:5120'
        ];
    }

    public function attributes()
    {
        return [
            "file_upload" => "requirement/s"
        ];
    }
}
