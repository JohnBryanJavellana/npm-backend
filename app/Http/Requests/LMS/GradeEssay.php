<?php

namespace App\Http\Requests\LMS;

use Illuminate\Foundation\Http\FormRequest;

class GradeEssay extends FormRequest
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
            'attempt_id' => ['required', 'exists:assessment_attempts,id', 'integer'],
            'data' => ['required', 'array'],
            // 'data.*.answerId' => ['required', 'exists:assessment_answers,id'],
            // 'data.*.grade' => ['required', 'integer'],
        ];

        // {
        //     attempt_id: 50,
        //     data: [
        //         {
        //             answerId: 3,
        //             grade: 10
        //         }
        //     ]
        // }
    }
}
