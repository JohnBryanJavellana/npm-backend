<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Enrollment\RemoveFacilitatorRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveFacilitator extends FormRequest
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
            'facilitatorId' => $this->route('facilitatorId')
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
            'facilitatorId' => ['exists:training_facilitators,id', 'integer', new RemoveFacilitatorRule()]
        ];
    }
}
