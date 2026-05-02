<?php

namespace App\Http\Requests\Trainee\Dormitory;

use App\Models\DormitoryTenant;
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
        return $this->user() !== null;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'userId' => $this->isWalkIn ? DormitoryTenant::findOrFail($this->document_id)->user_id : $this->user()->id,
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
            "isWalkIn" => 'required|boolean',
            "roomId" => 'nullable',
            "userId" => "required|integer|exists:users,id",
            'document_id' => 'required|integer|exists:dormitory_tenants,id',
            'accommodation' => 'required|in:SINGLE,SHARED,COUPLE',
            'type' => 'required|in:AIRCON,NON-AIRCON',
            'reason' => 'required|string|max:500'
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
