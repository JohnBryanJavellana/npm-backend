<?php

namespace App\Http\Requests\Admin\Library;

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
        $isPost = $this->input('httpMethod') === 'POST';

        return [
            'r_a_request_info_id' => ['required', 'integer'],
            'userId'              => ['required', 'integer'],
            'description'         => ['nullable', 'string'],
            'invoiceAmount'       => ['required','numeric','regex:/^\d+(\.\d{1,2})?$/'],
            'documentId'          => [$isPost ? 'nullable' : 'required','integer'],
            'status'              => [$isPost ? 'nullable' : 'required',Rule::in(['PENDING','PAID','CANCELLED','FOR-VERIFICATION'])],
        ];
    }
}