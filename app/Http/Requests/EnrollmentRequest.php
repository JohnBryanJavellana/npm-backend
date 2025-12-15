<?php

namespace App\Http\Requests;

use App\Rules\Trainee\Enrollment\UserEnrollmentRule;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EnrollmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'training_id' => [
                'required',
                new UserEnrollmentRule($this->user())
            ],
            'file_upload' => 'required|array',
            'file_upload.*.req_id' => 'required|integer',
            'file_upload.*.is_basic' => 'required|in:YES,NO',
            'file_upload.*.file' => 'nullable|max:5120'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                'message' => implode(',', $errors)
            ], 422)
        );
    }
}
