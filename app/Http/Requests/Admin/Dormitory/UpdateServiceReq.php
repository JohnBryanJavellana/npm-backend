<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceReq extends FormRequest
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
            'status' => ['required', 'in:APPROVED,DECLINED'],
            'remarks' => ['required_if:status,DECLINED'],
            'documentId' => ['required_if:httpMethod,UPDATE', 'exists:dormitory_req_services,id']
        ];
    }
}
