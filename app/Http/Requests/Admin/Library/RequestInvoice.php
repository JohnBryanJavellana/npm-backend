<?php

namespace App\Http\Requests\Admin\Library;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;


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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'r_a_request_info_id' => ['required', 'integer'],
            'user_id'   => ['required', 'integer'],
            'description'   => ['required', 'string'],
            'trace_number'   => ['required', 'string'],
            'invoice_amount'   => ['required', 'numeric', 'min:0'],
        ];
    }
}
