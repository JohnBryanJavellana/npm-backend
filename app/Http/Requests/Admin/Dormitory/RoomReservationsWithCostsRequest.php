<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class RoomReservationsWithCostsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tenantStatus' => 'nullable|array',
            'tenantStatus.*' => 'string|in:FOR PAYMENT,APPROVED,CHECKED IN,CHECKED OUT,CANCELLED'
        ];
    }
}