<?php

namespace App\Http\Requests\Admin\Library;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\RemoveBookCheckerRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RemoveBook extends FormRequest
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
            'bookId' => $this->route('bookId'),
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
            'bookId' => ['required', 'integer', 'exists:books,id', new RemoveBookCheckerRule()]
        ];
    }
}
