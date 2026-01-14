<?php

namespace App\Http\Requests\Trainee\Library;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LibInvoiceRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
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
            "inv_id" => "required",
            "inv_trace_number" => "required",
            "inv_reference_number" => "required",
            "total_amount" => "required",
            "credit_amount" => "required"
        ];
    }

    //OVERRIDE VALIDATION RETURN

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors
            ])
        );
    }
}
