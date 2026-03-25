<?php

namespace App\Http\Requests\LMS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateLmsCourseContentRequest extends FormRequest
{   
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("updateLmsCourseContentRequest", [$this->all()]);
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
            "course_content_id" => ["required","exists:course_contents,id"],
            "title" => ["sometimes", "required", "string"],
            "description" => ["sometimes", "required", "string"],
            "status" => ["sometimes", "required", "in:ACTIVE,INACTIVE"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors()
            ], 422)
        );
    }
}
