<?php

namespace App\Http\Requests\Trainee\Dormitory;

use App\Models\DormitoryTenant;
use Illuminate\Foundation\Http\FormRequest;

class CreateInclusionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("inclusionRequest", [$this->all()]);
        return $this->user() !== null;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'userId' => $this->isWalkIn ? DormitoryTenant::findOrFail($this->request_id)->user_id : $this->user()->id,
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
            "isWalkIn" => 'required|boolean',
            "request_id" => "required|exists:dormitory_tenants,id",
            "userId" => "required|integer|exists:users,id",
            "data" => ['array', 'required'],
            'data.*.inclusion_id' => ["required", "exists:dormitory_inventories,id"],
            'data.*.quantity' => ["required", "integer"]
        ];
    }
}
