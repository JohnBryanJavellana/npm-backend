<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class GetTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // or check role
    }

    public function rules(): array
    {
        return [
            'httpMethod' => ['required', 'string', 'in:POST,GET'],
            'status' => ['nullable', 'array'],
            'status.*' => ['string', 'in:PENDING,APPROVED,FOR PAYMENT,CANCELLED']
        ];
    }
}