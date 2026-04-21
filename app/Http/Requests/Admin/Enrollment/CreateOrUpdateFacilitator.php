<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateFacilitator extends FormRequest
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
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'role' => ['required', 'string', 'in:INSTRUCTOR,ASSESSOR,MODERATOR,MENTOR,COORDINATOR,OBSERVER'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'facilitatorId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:training_facilitators,id']
        ];
    }
}
