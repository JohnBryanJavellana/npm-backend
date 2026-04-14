<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Enrollment\RemoveRequirementRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveRequirement extends FormRequest
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
            'requirementId' => $this->route('requirementId')
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
            'requirementId' => ['required_if:httpMethod,UPDATE', 'exists:requirements,id', 'integer', new RemoveRequirementRule()]
        ];
    }
}
