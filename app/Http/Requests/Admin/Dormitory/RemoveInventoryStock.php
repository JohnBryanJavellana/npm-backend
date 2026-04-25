<?php

namespace App\Http\Requests\Admin\Dormitory;

use App\Rules\Admin\Dormitory\RemoveInventoryStockRule;
use Illuminate\Foundation\Http\FormRequest;

class RemoveInventoryStock extends FormRequest
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
            'documentId' => $this->route('documentId')
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
            'documentId' => ['required', 'exists:dormitory_inventory_items,id', new RemoveInventoryStockRule()],
        ];
    }
}
