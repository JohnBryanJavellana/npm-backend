<?php

namespace App\Http\Requests\Trainee\Library;

use Illuminate\Foundation\Http\FormRequest;

class LibInvoiceRequest extends FormRequest
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
        \Log::info("qwerty", $this->all());

        return [
            "inv_id" => "required",
            "inv_trace_number" => "required",
            "inv_reference_number" => "required",
        ];
    }
}
