<?php

namespace App\Http\Requests\Admin\Enrollment;

use Illuminate\Foundation\Http\FormRequest;

class MoveTrainees extends FormRequest
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
            'fromScheduleId'  => ['required', 'exists:trainings,id'],
            'toScheduleId'    => ['required', 'exists:trainings,id', 'different:fromScheduleId'],
            'enrollmentIds'   => ['required', 'array'],
            'enrollmentIds.*' => ['required', 'integer', 'exists:enrolled_courses,id'],
        ];
    }
}
