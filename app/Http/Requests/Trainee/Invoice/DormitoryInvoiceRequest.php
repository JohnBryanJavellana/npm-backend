<?php

namespace App\Http\Requests\Trainee\Invoice;

use Illuminate\Foundation\Http\FormRequest;

class DormitoryInvoiceRequest extends FormRequest
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
            "billing_id" => "required|exists:dormitory_invoices,id",
            "tenant_id" => "required|exists:dormitory_tenants,id",
            "ref_number" => "required",
        ];
    }
}
