<?php

namespace App\Http\Requests;

use App\Rules\Trainee\Library\BookLibraryRule;
use App\Rules\ExtensionDateRangeRule;
use App\Rules\Trainee\Library\UserLibraryRule;
use App\Models\BookRes;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExtendingRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        if (is_string($this->data)) {
            $this->merge([
                'data' => json_decode($this->data, true),
            ]);
        }
    }


    public function rules(): array
    {
        return [
            "reference_id" => "required|exists:book_res,id",
            "date_of_extension" => [
                "required",
                "date",
            ],
            "purpose" => "required|string",
            "data" => "required|array",
            "data.*.book_res_id" => [
                "required",
                "integer",
                "exists:book_reservations,id",
                new BookLibraryRule($this->user())
            ],
            "data.*.last_main_date" => "required|string",
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
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                "message" => implode(',', $errors)
            ], 422)
        );
    }
}
