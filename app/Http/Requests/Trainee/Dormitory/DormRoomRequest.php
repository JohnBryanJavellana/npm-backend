<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Foundation\Http\FormRequest;

class DormRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => $this->user()->id,
            'process_type' => "ONLINE"
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
            "dormitory_room_id" => ["nullable", 'integer', "exists:dormitory_rooms,id"],
            "user_id" => ["required", 'integer', "exists:users,id"],
            "room_type" => ["required", "in:AIRCON,NON-AIRCON"],
            "accommodation" => ["required", "in:SINGLE,SHARED,COUPLE"],
            "purpose" => ["required", "string"],
            "process_type" => ["required", "string"],
            "check_in_datetime" => ["required", "date"],
            "check_out_datetime" => ["required", "date", "after:fromDate"],
            "status_of_occupancy" => ["required", "string", "in:TRAINEE,NMP PERSONNEL (REGULAR/JOW)"],

            "suppportingCoupleDocuments" => ['required_if:accommodation,COUPLE', 'array'],
            "suppportingCoupleDocuments.*" => ["file"]
        ];
    }
}
