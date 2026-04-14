<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Enrollment\RemoveSponsorRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveSponsor extends FormRequest
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
            'sponsorId' => $this->route('sponsorId')
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
            'sponsorId' => ['required_if:httpMethod,UPDATE', 'exists:sponsors,id', 'integer',
                // new RemoveSponsorRule()
            ]
        ];
    }
}
