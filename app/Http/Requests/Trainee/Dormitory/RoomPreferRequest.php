<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RoomPreferRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("dormRec", [$this->all()]);
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "forType" => "required|in:OFFICERS,RATINGS",
            "roomType" => "required|in:YES,NO",
            "fromDate" => "required|date",
            "toDate" => "required|date",
            "single_accomodation" => "required|in:YES,NO"
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
