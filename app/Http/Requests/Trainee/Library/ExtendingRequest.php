<?php

namespace App\Http\Requests\Trainee\Library;

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
        \Log::info("extending...", [$this->all()]);
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


    public function rules(): array
    {
        return [
            "reference_id" => "required|exists:book_res,id",
            "data" => "required|array",
            "data.*.book_res_id" => [
                "required",
                "integer", 
                "exists:book_reservations,id", 
                new BookLibraryRule($this->user())
            ],
            "data.*.to_date" => "required|date",
            "data.*.extension_date" => "required|date"
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
