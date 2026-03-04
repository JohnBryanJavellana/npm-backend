<?php

namespace App\Http\Requests\QrReader;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PaginationViewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("PaginationView", [$this->all()]);
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
            "per_page" => ['nullable', 'integer', 'min:1', 'max:100'],
            "page" => ['nullable', 'integer', 'min:1'],
            "search" => ['nullable', 'max:255'],
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
