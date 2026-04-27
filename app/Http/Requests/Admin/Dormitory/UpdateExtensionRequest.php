<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExtensionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-DORMITORY']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "status" => ['required', 'string', 'in:PENDING,CANCELLED,APPROVED,FOR PAYMENT,COMPLETED,DECLINED'],
            "documentId" => ['required', 'integer', 'exists:dormitory_tenants,id']
        ];
    }
}
