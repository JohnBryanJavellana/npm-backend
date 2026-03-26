<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewRoomReservation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-DORMITORY']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'check_in_datetime' => ['required', 'date'],
            'check_out_datetime' => ['required', 'date'],
            'occupancy' => ['required', 'string', 'in:TRAINEE,NON-PAYING GUEST/VISITOR,NMP PERSONNEL (REGULAR/JOW),PAYING GUEST/VISITOR'],
            'guest' => ['required', 'exists:users,id'],
            'room' => ['required_if:status,APPROVED', 'exists:dormitory_rooms,id'],
            'purpose' => ['required_if:occupancy,TRAINEE'],
            'accommodation' => ['required', 'in:SINGLE,SHARED,COUPLE'],
            'room_type' => ['required', 'in:AIRCON,NON-AIRCON'],
            'supporting_documents' => ['required_if:accommodation,COUPLE', 'array'],
            'status' => ['required_if:httpMethod,UPDATE', 'in:APPROVED,REJECTED'],
            'remarks' => ['required_if:status,REJECTED'],
            'pricingBreakdown' => ['required_if:occupancy,TRAINEE'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'documentId' => [Rule::when($this->httpMethod === "UPDATE", ['required', 'exists:dormitory_tenants,id'], ['nullable'])],
        ];
    }
}
