<?php

namespace App\Http\Requests\Recreational;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CancelRecRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("cancelData", [$this->all()]);
        return true;
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
            "documentType" => "required|in:EQUIPMENT,FACILITY",
            "documentId" => "required",
            "requestInfoId" => "required|exists:r_a_request_infos,id"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors,
            ], 422)
        );
    }
}
