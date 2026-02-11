<?php

namespace App\Http\Requests\Recreational;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ViewUserRecRecord extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //temporary
        \Log::info("tempt_data", $this->all());
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "status" => "nullable|array",
            "traceNumber" => "nullable|exists:r_a_request_infos,trace_number",
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
            ], 442)
        );
    }
}
