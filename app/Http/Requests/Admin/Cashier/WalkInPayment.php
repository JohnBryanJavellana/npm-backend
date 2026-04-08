<?php

namespace App\Http\Requests\Admin\Cashier;

class WalkInPayment extends VerifyPayment
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
            ...parent::rules(),
            'received_amount' => ['required', 'numeric'],
            'cashier_o_r_id' => ['required', 'integer', 'exists:cashier_o_r_s,id']
        ];
    }
}
