<?php

namespace App\Http\Requests\Trainee\Library;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CancelBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("cancel_book", [$this->all()]);
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
            'book_id' => 'required|array|min:1', 
            'request_id' => 'required|exists:book_res,id'
        ];
    }

    public function messages()
    {
        return [
            'book_id.required' => 'Please select at least one booking to cancel.',
            'book_id.array' => 'Invalid booking data format.',
            'request_id.exists' => 'One or more selected bookings do not exist.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                "message" => implode(',', $errors)
            ], 422)
        );
    }
}
