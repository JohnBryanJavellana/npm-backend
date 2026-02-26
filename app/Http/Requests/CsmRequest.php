<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CsmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("dataCsm", [$this->all()]);
        return true;
    }

    protected function prepareForValidation()
    {
        $serviceType = $this->input("service", "");
        $this->merge([
            "service" => strtoupper($serviceType)
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
            "reference_id" => "required",
            "service" => "required|in:ENROLLMENT,DORMITORY,LIBRARY,RECREATIONAL",
            "cc1" => "required|int",
            "cc2" => "required|int",
            "cc3" => "required|int",
            "sqd0" => "required|int",
            "sqd1" => "required|int",
            "sqd2" => "required|int",
            "sqd3" => "required|int",
            "sqd4" => "required|int",
            "sqd5" => "required|int",
            "sqd6" => "required|int",
            "sqd7" => "required|int",
            "sqd8" => "required|int",
            "suggestion" => "nullable|string|max:255"
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                'message' => implode(',', $errors)
            ])
        );
    }
}
