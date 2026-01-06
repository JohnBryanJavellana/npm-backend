<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class CreateExtendRequest extends FormRequest
{
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
            "document_id" => "required|exists:dormitory_tenants,id",
            "to_date" => "required|date",
            "extension_date" => "required|date|after:to_date",
        ];
    }
}
