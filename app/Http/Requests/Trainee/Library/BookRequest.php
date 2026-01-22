<?php

namespace App\Http\Requests\Trainee\Library;

use App\Enums\UserRoleEnum;
use App\Models\User;
use App\Rules\Trainee\Library\{UserLibraryRule, BorrowDateRangeRule};
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
{
    //stop on first failed of the validation
    protected $stopOnFirstFailure = true;
    protected $allowedRoles = [
        UserRoleEnum::SUPERADMIN,
        UserRoleEnum::ADMIN_LIBRARY
    ];

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("send_book_req", $this->all());
        return $this->user() !== null;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user" => User::find(in_array($this->user()->role, $this->allowedRoles)
            ? $this->user_id
            : $this->user()->id)
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
            "user" => "required",
            "data" => "required|array",
            'data.*.book_id'=> [
                'required',
                'integer',
                new UserLibraryRule($this->user()),
            ],
            "data.*.copy_type" => "required|string|in:SOFT-COPY,HARD-COPY",
            "data.*.book_copy_id" => "nullable|exists:book_copies,id",
            'from'=> 'required|date',
            'to'=> [
                "required",
                "date",
                new BorrowDateRangeRule($this->from)
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'book_id.required' => 'A book is required.',
            'book_id.array' => 'Book selection must be an array.',
            'from.required' => 'Starting date is required.',
            'from.date' => 'Starting date must be a valid date.',
            'to.required' => 'End date is required.',
            'to.date' => 'End date must be a valid date.',
            'to.after' => 'End date must be after the starting date.',
        ];
    }

    public function attributes() {
        return [
            'books.*.book_id' => 'book',
            'from' => 'starting date',
            'to'=> 'end date',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        $errors = $validator->errors();
        $firstError = $errors->first();

        throw new HttpResponseException(
            response()->json([
                'message' => $firstError,
                'errors' => $errors->toArray(),
            ], 422)
        );
    }

}
