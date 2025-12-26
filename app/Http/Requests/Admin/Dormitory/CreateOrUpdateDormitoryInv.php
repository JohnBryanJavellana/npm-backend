<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDormitoryInv extends FormRequest
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
            'name' => ['required', 'string'],
            'amount' => ['required'],
            'isConsumable' => ['required'],
            'description' => ['required', 'string'],
            'stock' => [ Rule::when($this->httpMethod === "POST", ['required'], ['nullable']) ],
            'filename' => [ Rule::when($this->httpMethod === "POST", ['required', 'base64_image'], ['nullable']) ],
            'httpMethod' => ['required']
        ];
    }
}
