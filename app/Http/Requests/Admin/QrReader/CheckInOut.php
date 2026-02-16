<?php

namespace App\Http\Requests\Admin\QrReader;

use Illuminate\Foundation\Http\FormRequest;

class CheckInOut extends FormRequest
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
            'userId' => ['required', 'exists:users,id'],
            'qrLocation' => ['required', 'exists:qr_reader_locations,id'],
            'checkInOrOut' => ['required', 'in:CHECK_IN,CHECK_OUT']
        ];
    }
}
