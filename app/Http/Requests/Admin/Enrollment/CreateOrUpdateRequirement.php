<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateRequirement extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_ENROLLMENT->value
        ]);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'upload_reference' => $this->upload_reference instanceof File ? $this->upload_reference : null
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
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'isRequired' => ['required', 'string', 'in:YES,NO'],
            'upload_reference' => ['required_if:httpMethod,POST', 'file', 'nullable'],
            'isBasic' => ['required', 'string', 'in:YES,NO'],
            'httpMethod' => ['required', 'string', 'in:POST,UPDATE'],
            'requirement_specific_modules' => ['required_if:isBasic,NO', 'array', 'nullable'],
            'requirement_specific_modules.*' => ['integer', 'exists:course_modules,id'],
            'requirementId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:requirements,id'],
            'status' => ['required_if:httpMethod,UPDATE', 'string', 'in:ACTIVE,INACTIVE']
        ];
    }
}
