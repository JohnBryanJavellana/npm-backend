<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateModule extends FormRequest
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
     *
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'module_type_id' => ['required', 'integer', 'exists:module_types,id'],
            'name' => ['required', 'string'],
            'acronym' => ['required', 'string'],
            'compendium' => ['nullable', 'string'],
            'number_of_days' => ['required', "integer", 'min:1'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'status' => ['required_if:httpMethod,UPDATE', 'string', 'in:ACTIVE,INACTIVE'],
            'moduleId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:course_modules,id'],
        ];
    }
}
