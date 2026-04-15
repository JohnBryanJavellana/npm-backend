<?php

namespace App\Http\Requests\Admin\Dormitory;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateTransferRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // or check role
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
             'tenant_id' => 'required|exists:dormitory_tenants,id',
            'new_room_id' => 'required|exists:dormitory_rooms,id',
            'accommodation' => 'nullable|in:SINGLE,SHARED,COUPLE',
            'status_of_occupancy' => 'nullable|in:TRAINEE,NON-PAYING GUEST/VISITOR,NMP PERSONNEL (REGULAR/JOW),PAYING GUEST/VISITOR',
            'reason' => 'nullable|string',
            'process_type' => 'nullable|in:ONLINE,WALK-IN',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();

        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors
            ], 422)
        );
    }
}
