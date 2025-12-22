<?php

namespace App\Http\Requests\Admin\Enrollment;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateSchedule extends FormRequest
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
            'module' => ['required'],
            'fromDate' => ['required', 'date'],
            'toDate' => ['required', 'date'],
            'slot' => ['required', 'numeric'],
            'venue' => ['required'],
            'room' => ['required', 'string'],
            'batch' => ['required'],
            'preference' => ['required'],
            'dailyHour' => ['required', 'numeric'],
            'httpMethod' => ['required'],
            'documentId' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])],
            'status' => [Rule::when($this->httpMethod !== 'POST', ['required'], ['nullable'])]
        ];
    }
}
