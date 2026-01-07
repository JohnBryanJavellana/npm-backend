<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateRequest extends FormRequest
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
            'userId' => ['required'],
            'status_of_occupancy' => ['required'],
            'processType' => ['required'],
            'forType' => ['required'],
            'isAirConditioned' => ['required'],
            'single_accommodation' => ['required'],
            'purpose' => ['required'],
            'httpMethod' => ['required']
        ];
    }
}
