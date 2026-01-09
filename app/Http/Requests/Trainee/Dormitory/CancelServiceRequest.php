<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class CancelServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //check if the Auth::user and $this->user() is the same.
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
            "document_id" => "required",
            "request_id" => "required"
        ];
    }
}
