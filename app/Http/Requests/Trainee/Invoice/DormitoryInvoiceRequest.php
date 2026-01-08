<?php

namespace App\Http\Requests\Trainee\Invoice;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DormitoryInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("new_payment", [$this->all()]);
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
            "credit_amount" => "decimal:0,2",
            "total_amount" => "decimal:0,2",
            "billing_id" => "required|exists:dormitory_invoices,id",
            "tenant_id" => "required|exists:dormitory_tenants,id",
            "ref_number" => "required",
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors
            ], 422)
        );
    }
}
