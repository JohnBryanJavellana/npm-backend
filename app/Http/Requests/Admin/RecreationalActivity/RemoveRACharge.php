<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\RemoveRAChargeRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveRACharge extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_RA->value
        ]);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'recreationalInvoiceId' => $this->route('recreationalInvoiceId')
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
            'recreationalInvoiceId' => ['required', 'integer', 'exists:r_a_invoices,id', new RemoveRAChargeRule()],
        ];
    }
}
