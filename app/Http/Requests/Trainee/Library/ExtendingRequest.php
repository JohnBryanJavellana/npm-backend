<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use App\Rules\Trainee\Library\BookLibraryRule;
use App\Rules\ExtensionDateRangeRule;
use App\Rules\Trainee\Library\UserLibraryRule;
use App\Models\BookRes;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExtendingRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => in_array($this->user()->role, [
                UserRoleEnum::SUPERADMIN->value,
                UserRoleEnum::ADMIN_LIBRARY->value       
            ])
                ? $this->input("userId")
                : $this->user()->id
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
            "user_id" => "required|exists:users,id",
            "data" => "required|array",
            "data.*.book_res_id" => "required|exists:book_reservations,id",
            "data.*.to" => "required|date",
            "reference_id" => "required|exists:book_res,id",
        ];

    }
    public function withValidation($validator) {
        $validator->after(function($validator) {
            $user = $this->user();

            $hasData = BookRes::where(["user_id" => $user->id, "status" => "EXTENDING"])->exists();

            if($hasData) {
                $validator->errors()->add(
                    "You already have a pending book extension request. Please wait for it to be processed first."
                );
            }
        });
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors->toArray()
            ], 422)
        );
    }
}
