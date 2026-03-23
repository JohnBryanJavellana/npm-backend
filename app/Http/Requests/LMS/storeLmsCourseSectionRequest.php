<?php

namespace App\Http\Requests\LMS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class storeLmsCourseSectionRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("courseSectionStore", [$this->all()]);
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
            "day_number" => ["required", "integer"],
            "title" => ["required"],
            "description" => ["required"],
            "label" => ["required"],
            "course_module_id" => ["required", "exists:course_modules,id"],
            "files" => ["required", "array"],
            "files.*" => ["required", "file", "mimes:pdf,doc,docx,ppt,pptx,jpg,jpeg,png,mp4,mp3","max:10240"],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors()
            ])
        );
    }
}
