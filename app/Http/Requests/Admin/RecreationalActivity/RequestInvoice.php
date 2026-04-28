<?php

namespace App\Http\Requests\Admin\RecreationalActivity;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Recreational\UpdateRAChargeRule;
use Illuminate\Foundation\Http\FormRequest;

class RequestInvoice extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, [
            UserRoleEnum::SUPERADMIN->value,
            UserRoleEnum::ADMIN_RA->value
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'r_a_request_info_id' => ['required', 'integer', 'exists:r_a_request_infos,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'description' => ['required', 'string'],
            'invoice_status' => ['required', 'string'],
            'invoice_amount' => ['required', 'numeric'],
            'httpMethod' => ['required', 'string', 'in:UPDATE,POST'],
            'recreationalInvoiceId' => ['required_if:httpMethod,UPDATE', 'integer', 'exists:r_a_invoices,id', new UpdateRAChargeRule()]
        ];
    }
}
