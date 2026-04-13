<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTenantRequest extends FormRequest
{
    public function authorize()
    {
        return true; // allow request
    }

    public function rules()
    {
        return [
            'tenant_id' => 'required|exists:dormitory_tenants,id',
            'dormitory_room_id' => 'required|exists:dormitory_rooms,id',
            'check_in_datetime' => 'required|date',
            'check_out_datetime' => 'required|date|after:check_in_datetime',
        ];
    }
}