<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CancelServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //check if the Auth::user and $this->user() is the same.
        \Log::info("isaac", [$this->all()]);
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            "document_id" => $this->route("document_id")
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
            "document_id" => "required|exists:dormitory_tenants,id",
            "request_id" => "required|integer|exists:dormitory_req_services,id"
        ];
    }

    public function attributes()
    {
        return [
            "document_id" => "Record",
            "request_id" => "Service request"
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
