<?php

namespace App\Http\Requests\LMS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class storeCourseContentRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("storeCourseContentRequest", [$this->all()]);
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
            "course_module_section_id" => ["required", "exists:course_module_sections,id"],
            "title" => ["required"],
            "description" => ["required"],
            "files" => ["required", "array"],
            "files.*" => ["required", "file", "mimes:pdf,doc,docx,ppt,pptx,jpg,jpeg,png,mp4,mp3","max:51200"],
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
