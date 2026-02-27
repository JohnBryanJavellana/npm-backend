<?php

namespace App\Http\Requests\Trainee\Account;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreAccountRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        \Log::info("StoreAccountRequest", [$this->all()]);
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function attributes()
    {
        return [
            "user_id" => "Account",
            "fname" => "First name",
            "lname" => "Last name",
            "mname" => "Middle Name",
            "gen_info_status" => "User Type",
            "gen_info_srn" => "SRN",
            "gen_info_citizenship" => "Nationality",
            "gen_info_civil_status" => "Civil Status",
            "gen_info_house_no" => "House No.(Current Address)",
            "gen_info_region" => "Region (Current Address)",
            "gen_info_province" => "Provice (Current Address)",
            "gen_info_municipality" => "Municipaliiy (Current Address)",
            "gen_info_barangay" => "Barangay (Current Address)",
            "gen_info_postal" => "Postal (Current Address)",
            "gen_info_number_one" => "Mobile Number 1",
            "gen_info_number_two" => "Mobile Number 2",
            "gen_info_birthplace_region" => "Region (Birthplace)",
            "gen_info_birthplace_province" => "Provice (Birthplace)",
            "gen_info_birthplace_municipality" => "Municipaliiy (Birthplace)",
            "gen_info_birthplace_barangay" => "Barangay (Birthplace)",
            "gen_info_facebook" => "Facebook Account",
            "ship_status" => "Experience Status",
            "ship_license" => "License",
            "ship_rank" => "Rank",
            "ship_date_of_embarkment" => "Last Date of Disembarkation",
            "ship_principal" => "Shipping Principal",
            "ship_manning" => "Manning Company",
            "ship_landline" => "Landline Number (Shipboard Experience)",
            "ship_number" => "Mobile Number (Shipboard Experience)",
            "person_name" => "Contact Person Name",
            "person_address" => "Address (Contact Person)",
            "person_relationship" => "Relationship (Contact Person)",
            "person_email" => "Email (Contact Person)",
            "person_number_one" => "Mobile Number 1 (Contact Person)",
            "person_number_two" => "Mobile Number 2 (Contact Person)",
            'school_course_taken' => 'Course',
            'school' => 'School',
            'school_year_graduated' => 'Year Graduated',
            'file_upload' => 'Files',
            'file_upload.*.req_id' => 'Requirment',
            'file_upload.*.file' => 'Uploaded File',
        ];
    }
    public function rules(): array
    {
        return [
            "user_id" => "required|exists:users,id",
            'fname' => 'nullable|string|max:255',
            'lname' => 'nullable|string|max:255',
            'mname' => 'nullable|string|max:255',
            'gender' => 'nullable|in:MALE,FEMALE',
            'birthdate' => 'nullable|date',
            'email' => 'nullable|string|email',
            'gen_info_status' => 'nullable|in:NEW,RETURNEE',
            'gen_info_trainee_id' => 'nullable',
            'gen_info_srn' => 'nullable|integer|digits:10',
            'gen_info_citizenship' => 'nullable|string|max:255',
            'gen_info_civil_status' => 'nullable|in:SINGLE,MARRIED,WIDOWED,DIVORCED,SEPARATED',
            'gen_info_house_no' => 'nullable|string|max:255',
            'gen_info_region' => 'nullable|string|max:255',
            'gen_info_province' => 'nullable|string|max:255',
            'gen_info_municipality' => 'nullable|string|max:255',
            'gen_info_barangay' => 'nullable|string|max:255',
            'gen_info_postal' => 'nullable|string|max:255',
            'gen_info_number_one' => 'nullable|string|max:12',
            'gen_info_number_two' => 'nullable|string|max:12',
            "gen_info_birthplace_region" => 'nullable|string|max:255',
            "gen_info_birthplace_province" => 'nullable|string|max:255',
            "gen_info_birthplace_municipality" => 'nullable|string|max:255',
            "gen_info_birthplace_barangay" => 'nullable|string|max:255',
            "gen_info_facebook" => 'nullable|string',
            "ship_status" => 'nullable|in:WithShipboardExperience,NoShipboardExperience',
            "ship_license" =>'nullable|string',
            "ship_rank" => 'nullable|string',
            "ship_date_of_embarkment" => 'nullable|date',
            "ship_principal" => 'nullable|string',
            "ship_manning" => 'nullable|string',
            "ship_landline" => 'nullable|string',
            "ship_number" => 'nullable|string|max:12',
            'person_name' => 'nullable|string|max:255',
            'person_address' => 'nullable|string|max:255',
            'person_relationship' => 'nullable|string|max:255',
            'person_email' => 'nullable|string|email',
            'person_number_one' => 'nullable|string|max:12',
            'person_number_two' => 'nullable|string|max:12',
            'school_course_taken' => 'nullable|string|exists:main_courses,id',
            'school' => 'nullable|string|exists:main_schools,id',
            'school_year_graduated' => 'nullable|string|max:255',
            'file_upload' => 'nullable|array',
            'file_upload.*.req_id' => 'integer',
            'file_upload.*.file' => 'file|mimes:jpg,png,pdf,docx|max:5120',
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
