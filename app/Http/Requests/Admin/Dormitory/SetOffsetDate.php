<?php

namespace App\Http\Requests\Admin\Dormitory;

use App\Rules\Admin\Dormitory\ModifyDormitoryInvoiceRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SetOffsetDate extends FormRequest
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
            'offset_date' => ['required', 'date'],
            'dormitory_tenant_id' => ['required', 'integer', 'exists:dormitory_tenants,id']
        ];
    }
}
