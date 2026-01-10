<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateServiceRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }


    protected function prepareForValidation()
    {
        return $this->merge([
            "dormitory_id" => $this->route("dormitory_id")
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
            "dormitory_id" => "required|exists:dormitory_tenants,id",
            "service_id" => "required|exists:dormitory_services,id",
        ];
    }

    public function attributes()
    {
        return [
            "document_id" => "dormitory request",
            "service_id" => "service request",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();

        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "erorrs" => $errors
            ])
        );
    }
}
