<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCertificate extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_module_id' => ['required', 'integer', 'exists:course_modules,id'],
            'name' => ['required', 'string'],
            'header' => ['required', 'string'],
            'header_1' => ['required', 'string'],
            'header_2' => ['required', 'string'],
            'body' => ['required', 'string'],
            'httpMethod' => ['required', 'string', 'in:POST,UPDATE'],
            'certificateId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:main_certificates,id']
        ];
    }
}
