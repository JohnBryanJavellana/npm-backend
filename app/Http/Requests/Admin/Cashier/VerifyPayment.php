<?php

namespace App\Http\Requests\Admin\Cashier;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class VerifyPayment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-CASHIER']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'invoiceId' => ['required', 'integer'],
            'parentTableId' => ['nullable', 'integer'],
            'invoiceTableServiceName' => ['required', 'string'],
            'parentTableServiceName' => ['required', 'string'],
            'parentTableStatusColumn' => ['nullable', 'string'],
            'invoiceStatus' => ['required', 'string', 'in:PAID,DECLINED']
        ];
    }
}
