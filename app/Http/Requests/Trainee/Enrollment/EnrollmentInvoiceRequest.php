<?php

namespace App\Http\Requests\Trainee\Enrollment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use function PHPSTORM_META\map;

class EnrollmentInvoiceRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("updateEnrollmentInvoice", [$this->all()]);
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => $this->user()->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "invoice_id" => "required|exists:enrollment_invoices,id",
            "user_id" => "required|exists:users,id",
            "enrolled_course_id" => "required|exists:enrolled_courses,id",
            "credit_amount" => "nullable",
            "total_amount" => "nullable",
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
                "errors" => $firstError
            ], 422)
        );
    }
}
