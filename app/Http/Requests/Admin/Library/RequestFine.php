<?php

namespace App\Http\Requests\Admin\Library;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\UpdateBookFineRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestFine extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'invoice_amount' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'invoice_status' => ['required', 'string'],
            'book_res_id' => ['required', 'exists:book_res,id'],
            'user_id' => ['required', 'exists:users,id'],
            'libraryInvoiceId' => ['required_if:httpMethod,UPDATE', 'exists:library_invoices,id', new UpdateBookFineRule()]
        ];
    }
}
