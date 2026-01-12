<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class CreateInclusionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("inclusionRequest", [$this->all()]);
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
            "request_id" => "required|exists:dormitory_tenants,id",
            "inclusion_id" => "required|exists:dormitory_inventories,id",
            "charge_id" => "required|exists:charges,id",
            "quantity" => "required|integer",
        ];
    }
}
