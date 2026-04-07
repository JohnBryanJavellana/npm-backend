<?php

namespace App\Http\Requests\Admin\Cashier;

use Illuminate\Foundation\Http\FormRequest;

class RemoveChargeCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-CASHIER']);
    }

    /**
     * Summary of prepareForValidation
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'chargeCategoryId' => $this->route('chargeCategoryId'),
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
            'chargeCategoryId' => ['required', 'integer', 'exists:charge_categories,id'],
        ];
    }
}
