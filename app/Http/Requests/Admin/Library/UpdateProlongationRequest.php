<?php

namespace App\Http\Requests\Admin\Library;

use App\Enums\UserRoleEnum;
use App\Rules\Admin\Library\UpdateProlongationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProlongationRequest extends FormRequest
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
            'prolongationRequestId' => ['required', 'integer', 'exists:book_reservations,id', new UpdateProlongationRule()],
            'status' => ['required', 'string', 'in:APPROVED,REJECTED,CANCELLED,RETURNED,RECEIVED,LOST,DAMAGED,EXPIRED'],
            'acceptedStatus' => ['required', 'string', 'in:RENEWED,EXTENDED'],
            'targetDateTime' => ['required', 'date']
        ];
    }
}
