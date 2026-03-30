<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceReq extends FormRequest
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
            'status' => ['required', 'in:APPROVED,DECLINED,DONE,FOR PAYMENT,CANCELLED,PAID'],
            'feeType' => ['required', 'in:UNSET,APPROVED_WITH_FEE,APPROVED_NO_FEE'],
            'userId' => ['required', 'exists:users,id'],
            'tenantId' => ['required', 'exists:dormitory_tenants,id'],
            'serviceId' => ['required', 'exists:dormitory_services,id'],
            'remarks' => ['required_if:httpMethod,UPDATE', 'string', 'required_if:status,CANCELLED,DECLINED'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'documentId' => ['required_if:httpMethod,UPDATE', 'exists:dormitory_req_services,id']
        ];
    }
}
