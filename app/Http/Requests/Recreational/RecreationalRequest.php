<?php

namespace App\Http\Requests\Recreational;

use App\Enums\UserRoleEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            "user_id" => $this->has("userId")
                ?  $this->input("userId")
                :  $this->user()->id,
            "data" => $data
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
            "data.*.id" => "required|integer",
            "data.*.from_datetime" => "required|date_format:Y-m-d H:i",
            "data.*.UI" => "nullable|array|exists:r_a_equipment_stocks,unique_identifier",
            "data.*.to_datetime" => "required|date_format:Y-m-d H:i|after:data.*.from_datetime",
            "data.*.quantity" => "integer",
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
