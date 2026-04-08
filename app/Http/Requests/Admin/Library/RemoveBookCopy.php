<?php

namespace App\Http\Requests\Admin\Library;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\RemoveBookCopyRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RemoveBookCopy extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_LIBRARY->value
        ]);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'bookCopyId' => $this->route('bookCopyId')
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
            'bookCopyId' => ['exists:book_copies,id', 'integer', new RemoveBookCopyRule()],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([ 'message' => implode(',', $errors) ])
        );
    }
}
