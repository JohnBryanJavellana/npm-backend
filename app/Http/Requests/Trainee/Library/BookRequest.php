<?php

namespace App\Http\Requests\Trainee\Library;

use App\Rules\Trainee\Library\{UserLibraryRule, BorrowDateRangeRule};
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
{
    //stop on first failed of the validation
    protected $stopOnFirstFailure = true;

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
    public function rules(): array
    {
        return [
            'book_id'=> [
                'required',
                'array',
                new UserLibraryRule($this->user()),
            ],
            'from'=> 'required|date',
            'to'=> [
                "required",
                "date",
                "after:from",
                new BorrowDateRangeRule($this->from)
            ],
            'purpose' => 'required',
        ];
    }

    public function message()
    {
        return [
            'book_id.required' => "A book is required.",
            'from.required' => "Starting date is required",
            'to.required' => "End date is required",
            'purpose.required' => "Purpose is required"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        throw new HttpResponseException(
            response()->json([
                'message' => implode(', ', $errors)
            ], 422)
        );
    }
}
