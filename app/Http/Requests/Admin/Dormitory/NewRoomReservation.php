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

    public function prepareForValidation()
    {
        $this->merge([
            'withFee' => $this->has('withFee') ? filter_var($this->input('withFee'), FILTER_VALIDATE_BOOLEAN) : null,
            'withGivenCoupleDocuments' => $this->boolean('withGivenCoupleDocuments'),
            'pricingBreakdown' => \is_string($this->pricingBreakdown) ? json_decode($this->pricingBreakdown, true) : $this->pricingBreakdown,
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
            'check_in_datetime' => ['required', 'date'],
            'check_out_datetime' => ['required', 'date'],
            'status_of_occupancy' => ['required', 'string', 'in:TRAINEE,NON-PAYING GUEST/VISITOR,NMP PERSONNEL (REGULAR/JOW),PAYING GUEST/VISITOR'],
            'user_id' => ['required', 'exists:users,id'],
            'dormitory_room_id' => ['required_if:status,APPROVED', 'exists:dormitory_rooms,id'],
            'purpose' => ['required_if:status_of_occupancy,TRAINEE'],
            'accommodation' => ['required', 'in:SINGLE,SHARED,COUPLE'],
            'room_type' => ['required', 'in:AIRCON,NON-AIRCON'],
            'status' => ['required_if:httpMethod,UPDATE', 'in:APPROVED,REJECTED,FOR PAYMENT'],
            'remarks' => ['required_if:status,REJECTED'],
            'pricingBreakdown' => ['required_if:status_of_occupancy,TRAINEE'],
            'withFee' => ['required', 'boolean'],
            'withGivenCoupleDocuments' => ['required', 'boolean'],
            'supporting_documents' => ['exclude_if:withGivenCoupleDocuments,true', 'required_if:accommodation,COUPLE', 'array'],

            'httpMethod' => ['required', 'in:POST,UPDATE'],
            'documentId' => [Rule::when($this->httpMethod === "UPDATE", ['required', 'exists:dormitory_tenants,id'], ['nullable'])],
        ];
    }
}
