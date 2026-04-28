<?php

namespace App\Http\Requests\Admin\Dormitory;

use App\Models\DormitoryTransfer;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTransferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null && \in_array($this->user()->role, ['SUPERADMIN', 'ADMIN-DORMITORY']);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'roomId' => \in_array($this->status, ["APPROVED"])
                ? DormitoryTransfer::whereKey($this->documentId)->first()->dormitory_room_id
                : $this->roomId
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
            "status" => ['required', 'string', 'in:PENDING,APPROVED,CANCELLED,COMPLETED,PAID,FOR PAYMENT'],
            "documentId" => ['required', 'integer', 'exists:dormitory_transfers,id'],
            "roomId" => ['nullable', 'required_if:status,FOR PAYMENT', 'integer', 'exists:dormitory_rooms,id']
        ];
    }
}
