<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestInvoice extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'r_a_request_info_id' => ['required', 'integer', 'exists:r_a_request_infos,id'],
            'userId'              => ['required', 'integer', 'exists:users,id'],
            'description'         => ['required', 'string'],
            'invoiceAmount'       => ['required','numeric','regex:/^\d+(\.\d{1,2})?$/'],
            'documentId' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])],
            'status' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])]
        ];
    }
}