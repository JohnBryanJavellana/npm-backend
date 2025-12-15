<?php

namespace App\Http\Requests\Admin\Account;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SubmitCSM extends FormRequest
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
        $rules = [
            'ccAnswer' => ['required', 'array'],
            'sqdAnswer' => ['required', 'array'],
        ];

        $rules['sqdAnswer.*'] = ['exclude_if:sqdAnswer.*,null', 'string', 'min:1'];

        if ($this->input('ccAnswer.0') !== 4) {
            $rules['ccAnswer.*'] = ['exclude_if:ccAnswer.*,null', 'string', 'min:1'];
        }

        if ($this->input('ccAnswer.0') === 4) {
            $rules['ccAnswer'][] = function ($attribute, $value, $fail) {
                if ($value[0] === 4 && (!empty($value[1]) || !empty($value[2]))) {
                    $fail("When the first 'ccAnswer' is 4, the second and third responses must be N/A.");
                }
            };
        }

        return $rules;
    }
}
