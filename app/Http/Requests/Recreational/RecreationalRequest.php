<?php

namespace App\Http\Requests\Recreational;

use App\Enums\UserRoleEnum;
use App\Rules\Trainee\Recreational\QuantityRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RecreationalRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {   
        \Log::info("dataRequest", $this->all());
        return true;
    }

    protected function prepareForValidation()
    {
        $data = $this->input("data", []);

        $data = array_map(function($item) {
            if(isset($item["type"])) {
                $item["type"] = strtoupper( $item["type"]);
            }

            return $item;
        }
        , $data);

        $this->merge([
            "user_id" => $this->has("user_id")
                ?  $this->input("user_id")
                :  $this->user()->id,
            "data" => $data
        ]);     
    }



    public function attributes(): array
    {
        $attributes = [];
        $rows = $this->input('data', []);
        $totalRows = count($rows);

        foreach ($rows as $index => $row) {

            if ($totalRows === 1) {
                $attributes["data.$index.quantity"] = "Quantity";
            } else {
                $attributes["data.$index.quantity"] =
                    "Item " . ($index + 1) . ":";
            }
        }

        return $attributes;
    }

    public function messages(): array
    {
        return [
            'data.*.quantity.required_without' =>
                ':attribute No selected item!',
        ];
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
            "data.*.id" => "required|integer",
            "data.*.from_datetime" => "required|date_format:Y-m-d H:i",
            "data.*.UI" => "nullable|array",
            "data.*.to_datetime" => "required|date_format:Y-m-d H:i|after:data.*.from_datetime",
            'data.*.quantity' => [
                'exclude_if:data.*.type,FACILITY',    
                'required_without:data.*.UI',
                'nullable', 
                'numeric',
                'min:1',
            ],
            "data.*.type" => "required|in:EQUIPMENT,FACILITY,HYBRID",
            "purpose" => "required|string|max:255"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $firstError = $errors->first();
        throw new HttpResponseException(
            response()->json([
                "message" => $firstError,
                "errors" => $errors
            ], 422)
        );
    }
}
