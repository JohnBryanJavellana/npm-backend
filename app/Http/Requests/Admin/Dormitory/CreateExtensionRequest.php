<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateExtensionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dormitory_tenant_id' => 'required|exists:dormitory_tenants,id',
            'old_end_date' => 'required|date',
            'new_end_date' => 'required|date|after:old_end_date',
            'trace_number' => 'nullable|string|max:255',
            'purpose' => 'nullable|string'

        ];
    }
      public function messages()
    {
        return [
            'dormitory_tenant_id.required' => 'Tenant is required',
            'old_end_date.required' => 'Current end date is required',
            'new_end_date.required' => 'New end date is required',
            'new_end_date.after' => 'New end date must be after current end date',
            'purpose.required' => 'Please provide a reason for the extension',
            'purpose.min' => 'Reason must be at least 5 characters',
        ];
    }
    
}