<?php

namespace App\Http\Requests\Authenticated\CSMAnalytics;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class GetCSMSRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && !\in_array($this->user()->role, [
            UserRoleEnum::TRAINEE->value
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
            "type" => ['required', "in:ALL,DORMITORY,LIBRARY,ENROLLMENT,RECREATIONAL"],
            "fromFilter" => ['nullable', 'date'],
            "toFilter" => ['nullable', 'required_with:fromFilter', 'date'],
            "per_page" => ['nullable', 'integer'],
            "isExporting" => ['nullable', 'boolean']
        ];
    }
}
