<?php

namespace App\Http\Requests\Trainee\Dormitory;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DormRoomRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("request dorm", [$this->all()]);
        
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
            "forType" => "required|in:MALE,FEMALE,COUPLE",
            "is_air_conditioned" => "required|in:YES,NO",
            "single_occupancy" => "required|in:YES,NO",
            "file" => "mimes:jpg,jpeg,png,pdf,doc,docx|max:5120",
            "purpose" => "required|string|max:255",
            "startDate" => "required|date",
            "toDate" => "required|date|after:startDate"
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
            ])
        );
    }
}
