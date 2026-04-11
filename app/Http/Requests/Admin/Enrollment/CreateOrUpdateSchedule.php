<?php

namespace App\Http\Requests\Admin\Enrollment;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateSchedule extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_ENROLLMENT->value
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
            'course_module_id' => ['required', 'integer', 'exists:course_modules,id'],
            'schedule_from' => ['required', 'date'],
            'schedule_to' => ['required', 'date'],
            'schedule_slot' => ['required', 'numeric'],
            'venue' => ['required', 'string'],
            'room' => ['required', 'string'],
            'batch_number' => ['required', 'string'],
            'schedule_preference' => ['required', 'string', 'in:FACE TO FACE, ONLINE'],
            'daily_hours' => ['required', 'integer'],
            'status' => ['required_if:httpMethod,UPDATE', 'string', 'exists:trainings,id'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'scheduleId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:trainings,id']
        ];
    }
}
