<?php

namespace App\Http\Requests\Admin\Cashier;

use Illuminate\Foundation\Http\FormRequest;

class CreateOR extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-CASHIER']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'starting_or_number' => ['required', 'integer'],
            'ending_or_number' => ['required', 'integer'],
            'office' => ['required', 'string'],
            'charge_category_id' => ['required', 'integer', 'exists:charge_categories,id']
        ];
    }
}
