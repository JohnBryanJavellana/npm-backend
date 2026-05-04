<?php

namespace App\Http\Requests\Admin\Dormitory;

use App\Rules\Admin\Dormitory\ModifyDormitoryInvoiceRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitoryCharge extends FormRequest
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
            'dormitory_tenant_id' => ['required', 'integer', 'exists:dormitory_tenants,id'],
            'invoice_amount' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'httpMethod' => ['required', 'string', 'in:POST,UPDATE'],
            'dormitoryInvoiceId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:dormitory_invoices,id', new ModifyDormitoryInvoiceRule()],
            'invoice_status' => ['required_if:httpMethod,UPDATE', 'string']
        ];
    }
}
