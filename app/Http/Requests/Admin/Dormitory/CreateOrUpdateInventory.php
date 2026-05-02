<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateInventory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-DORMITORY']);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'photo' => $this->photo && $this->photo instanceof File ? $this->photo : null
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
            'name' => ['required', 'string'],
            'is_consumable' => ['required', 'boolean'],
            'description' => ['required', 'string'],
            'charge' => ['required', 'numeric'],
            'stock_count' => ['required_if:httpMethod,POST', 'integer'],
            'photo' => ['required_if:httpMethod,POST', 'nullable', 'file'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'documentId' => ['required_if:httpMethod,UPDATE', 'exists:dormitory_inventories,id'],
        ];
    }
}
