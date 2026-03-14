<?php

namespace App\Http\Requests\Trainer\LMS;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class deleteAssessmentRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("dataDelete", [$this->all()]);
        return $this->user() !== null && \in_array($this->user()?->role, UserRoleEnum::facilitatorRoles());
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => $this->user()->id
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
            "user_id" => ["exists:users,id"],
            "assessment_id" => ["required","exists:assessments,id"]
            
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
