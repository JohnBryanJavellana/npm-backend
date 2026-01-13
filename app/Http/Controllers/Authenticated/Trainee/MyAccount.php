<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BEAccount;
use App\Http\Controllers\Controller;
use App\Mail\UpdatePassword;
use App\Utils\GenerateUniqueFilename;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{
    User,
    AuditTrail,
    GeneralInformation,
    Contact,
    EducationalAttainment,
    LatestSBExp,
    TrainingRegFile,
    AdditionalTraineeInfo,
    MainCourse,
    MainSchool,
    Requirement
};
use App\Utils\AuditHelper;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cache;

class MyAccount extends Controller
{
    public function get_trainee_general_info($user) {
        try {
            $trainee_general_info = User::with([
                'additional_trainee_info',
                'additional_trainee_info.general_info',
                'additional_trainee_info.contact',
                'additional_trainee_info.trainee_registration_file',
                'additional_trainee_info.educational_attainment.main_course',
                'additional_trainee_info.educational_attainment.main_school',
                'additional_trainee_info.educational_attainment',
                'additional_trainee_info.latest_shipboard_attainment'
            ])->where('id', $user)->get();
            
            $requirements = Requirement::where(['isBasic' => 'YES', 'status' => 'ACTIVE'])->get();

            return response()->json([
                'trainee_general_info'=> $trainee_general_info,
                'requirements' => $requirements
            ], 200);
        } catch (\Exception $e) { 
            return response()->json(['message'=> $e->getMessage()], 500);
        }
    }
    
    public function upload_profile_picture (Request $request) {

        \Log::info("usser", [$request->all()]);
        $validation = [
            "user_id" => "required|exists:users,id",
            'avatar' => 'required',
        ];

        $validator = \Validator::make($request->all(), $validation);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                $user = User::findOrFail($request->user_id);

                if ($request->hasFile('avatar')){
                    $filePath = public_path('user_images/' . $user->profile_picture);

                    if (file_exists($filePath) && is_file($filePath) && $user->profile_picture !== "default-avatar.png") {
                        unlink($filePath);
                    }

                    $avatar = $request->file('avatar');
                    $filename = time() . '_' . uniqid() . '.' . $avatar->getClientOriginalExtension();
                    $avatar->move(public_path('user_images'), $filename);

                    $user->profile_picture = $filename;
                    $user->save();
                }

                AuditHelper::log($request->user_id, "User {$request->user_id} profile picture has been updated!");
                Cache::forget('user_profile_' . $request->user_id);

                if(env("USE_EVENT")) {
                    event(new BEAccount(''));
                }
                
                return response()->json(['message' => "You have successfully updated your avatar!"], 200);
            } catch (\Exception $e) {
                return response()->json(['message'=> $e->getMessage()], 500);
            }
        }
    }
    public function create_or_update_additional_info (Request $request) {
        \Log::info("Send Info", $request->all());

       $validations = [
            "user_id" => "required|exists:users,id",
            'fname' => 'nullable|string|max:255',
            'lname' => 'nullable|string|max:255',
            'gender' => 'nullable|in:MALE,FEMALE',
            'birthdate' => 'nullable|date',
            'email' => 'nullable|string|email',
            'gen_info_status' => 'nullable|in:NEW,RETURNEE',
            'gen_info_trainee_id' => 'nullable',
            'gen_info_srn' => 'nullable|integer',
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
            //latest_s_b_exps
            "ship_status" => 'nullable|in:WithShipboardExperience,NoShipboardExperience',
            "ship_license" =>'nullable|string',
            "ship_rank" => 'nullable|string',
            "ship_date_of_embarkment" => 'nullable|date',
            "ship_principal" => 'nullable|string',
            "ship_manning" => 'nullable|string',
            "ship_landline" => 'nullable|string',
            "ship_number" => 'nullable|string|max:12',
            //contact person
            'person_name' => 'nullable|string|max:255',
            'person_address' => 'nullable|string|max:255',
            'person_relationship' => 'nullable|string|max:255',
            'person_email' => 'nullable|string|email',
            'person_number_one' => 'nullable|string|max:12',
            'person_number_two' => 'nullable|string|max:12',
            //educational attainment
            'school_course_taken' => 'nullable|string|exists:main_courses,id',
            'school' => 'nullable|string|exists:main_schools,id',
            'school_year_graduated' => 'nullable|string|max:255',
            'file_upload' => 'nullable|array',
            'file_upload.*.req_id' => 'integer',
            'file_upload.*.file' => 'file|mimes:jpg,png,pdf,docx|max:5120', 
        ];  

        $user = User::with(['additional_trainee_info'])->find($request->user_id);

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            \Log::error("error validation", $errors);
            return response()->json(['message' => implode(', ', $errors), ], 422);
        } else {
            try {
                DB::beginTransaction();
                $reloggin = false;

                $user->fname = $request->fname;
                $user->lname = $request->lname;
                $user->mname = $request->mname;
                $user->gender = $request->gender;
                $user->suffix = $request->suffix;
                if($user->email !== $request->email){
                    $user->email = $request->email;
                    $random_password = strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
                    $user->password = bcrypt($random_password);

                    \Mail::to($request->email)->later(Carbon::now()->addSeconds(3), new UpdatePassword(['password' => $random_password]));

                    $reloggin = true;
                }
                $user->birthdate = $request->birthdate;
                $user->save();
                
                //general info
                $general_info = $user?->additional_trainee_info?->general_information_id;  
                $this_gen_info = $general_info ? GeneralInformation::findOrFail($general_info) : new GeneralInformation();

                $this_gen_info->gen_info_status = $request->gen_info_status;
                $this_gen_info->gen_info_trainee_id = $request->gen_info_trainee_id;
                $this_gen_info->gen_info_srn = $request->gen_info_srn;
                $this_gen_info->gen_info_citizenship = $request->gen_info_citizenship;
                $this_gen_info->gen_info_civil_status = $request->gen_info_civil_status;
                $this_gen_info->gen_info_house_no = $request->gen_info_house_no;
                $this_gen_info->gen_info_region = $request->gen_info_region;
                $this_gen_info->sameWithCurrentAddress = $request->useSameAsCurrentAddress;
                $this_gen_info->gen_info_province = $request->gen_info_province;
                $this_gen_info->gen_info_municipality = $request->gen_info_municipality;
                $this_gen_info->gen_info_barangay = $request->gen_info_barangay;
                $this_gen_info->gen_info_birthplace_region = $request->gen_info_birthplace_region;
                $this_gen_info->gen_info_birthplace_province = $request->gen_info_birthplace_province;
                $this_gen_info->gen_info_birthplace_municipality = $request->gen_info_birthplace_municipality;
                $this_gen_info->gen_info_birthplace_barangay = $request->gen_info_birthplace_barangay;
                $this_gen_info->gen_info_postal = $request->gen_info_postal;
                $this_gen_info->gen_info_number_one = $request->gen_info_number_one;
                $this_gen_info->gen_info_number_two = $request->gen_info_number_two;
                $this_gen_info->gen_info_landline = $request->gen_info_landline;
                $this_gen_info->gen_info_facebook = $request->gen_info_facebook;
                $this_gen_info->save();

                //contact
                $contact_info = $user?->additional_trainee_info?->contact_id; 
                $this_contact_info = $contact_info ? Contact::find($contact_info) : New Contact();

                $this_contact_info->person_name = $request->person_name;
                $this_contact_info->person_address = $request->person_address;
                $this_contact_info->person_relationship = $request->person_relationship;
                $this_contact_info->person_email = $request->person_email;
                $this_contact_info->person_number_one = $request->person_number_one;
                $this_contact_info->person_number_two = $request->person_number_two;
                $this_contact_info->person_landline = $request->landline;
                $this_contact_info->save();
                
                //education
                $education_info = $user?->additional_trainee_info?->educational_attainment_id;
                $this_education_info = $education_info ? EducationalAttainment::find($education_info) : new EducationalAttainment();
            
                $this_education_info->main_course_id= $request->school_course_taken;
                $this_education_info->main_school_id = $request->school;
                $this_education_info->school_graduated = $request->school_year_graduated;
                $this_education_info->save();

                //disembarkment
                $latest_disembarkment_info = $user?->additional_trainee_info?->latest_s_b_exp_id;
                $this_latest_disembarkment_info = $latest_disembarkment_info ? LatestSBExp::find( $latest_disembarkment_info) : new LatestSBExp();

                $this_latest_disembarkment_info->ship_status = $request->ship_status;
                $this_latest_disembarkment_info->ship_license = $request->ship_license;
                $this_latest_disembarkment_info->ship_rank = $request->ship_rank;
                $this_latest_disembarkment_info->ship_date_of_disembarkment = $request->ship_date_of_embarkment;
                $this_latest_disembarkment_info->ship_principal = $request->ship_principal;
                $this_latest_disembarkment_info->ship_manning = $request->ship_manning;
                $this_latest_disembarkment_info->ship_landline = $request->ship_landline;
                $this_latest_disembarkment_info->ship_number = $request->ship_number;
                $this_latest_disembarkment_info->save();

                //Additional Information
                $additional_info = $user?->additional_trainee_info?->id;
                $this_additional_info = $general_info ? AdditionalTraineeInfo::findOrFail($additional_info) : new AdditionalTraineeInfo();

                $this_additional_info->user_id = $request->user_id;        
                $this_additional_info->general_information_id = $this_gen_info->id;
                $this_additional_info->contact_id = $this_contact_info->id;
                $this_additional_info->latest_s_b_exp_id = $this_latest_disembarkment_info->id;
                $this_additional_info->educational_attainment_id = $this_education_info->id;
                $this_additional_info->save();
                
                if ($request->has('file_upload')){
                    foreach($request->file_upload as $key => $file) {
                        $record = TrainingRegFile::where([
                            'additional_trainee_info_id' => $this_additional_info->id, 
                            'requirement_id' => $file['req_id']
                        ])->first();
                        if ($record) {                            
                            $record->filename = $this->savefile($file['file']);
                            $record->save();
                        } else {
                            $new_record = new TrainingRegFile;
                            $new_record->additional_trainee_info_id = $this_additional_info->id;
                            $new_record->requirement_id = (int) $file['req_id'];
                            $new_record->filename = $this->savefile($file['file']);
                            $new_record->save();
                        }
                    }
                }   

                AuditHelper::log($request->user_id, "You have posted your new information!");
                Cache::forget('user_profile_' . $request->user_id);

                if(env("USE_EVENT")) {
                    event(new BEAccount(''));
                }

                DB::commit();
                
                return response()->json(['message' => "You have posted your new information!", 'reloggin' => $reloggin], 201);
            } catch (\Exception $e) {
                \Log::error("errorr", [$e]);
                DB::rollback(); 
                return response()->json(['message'=> $e->getMessage()], 400);
            }
        }
    }
    
    public function savefile($fileUploaded) {
        try {
            if($fileUploaded){

                $file_requested = $fileUploaded;
                $filename_requested = GenerateUniqueFilename::generate($file_requested);
                $file_requested->move(public_path('trainee-files'), $filename_requested);

                return $file_requested ? $filename_requested : null;
            }
        } catch(\Exception $e) {
            return response()->json(['message' => "Something went wrong! Please try again"], 422);
        }
    }

    public function get_all_courses_and_schools (Request $request) {
        $courses = MainCourse::where('course_status', 'ACTIVE')->get();
        $schools = MainSchool::where('school_status', 'ACTIVE')->get();
        return response()->json(['courses' => $courses, 'schools' => $schools], 200);
    }
    public function update_password(Request $request){
        DB::beginTransaction();

        $validation = [
            'password' => ['required', 'confirmed', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/' ],
            'password_confirmation' => 'required',
        ];

        if($request->user()->isSocial == 'NO'){
            $validation['current_password'] = 'required';
        }

        $validator = \Validator::make($request->all(), $validation);

        if ($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                $user = User::findOrFail($request->user()->id);

                if (!Hash::check($request->current_password, $user->password)) {
                    return response()->json(['message' => 'Current password is incorrect'], 401);
                }

                $user->password = bcrypt($request->password);
                $user->save();

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "You've updated your account password.";
                $new_log->save();

                DB::commit();

                $message =  $request->user()->isSocial == 'YES' ? "Password updated. Please use the regular login page instead of 'Login with Email'." : "Password updated successfully.";

                return response()->json([
                    'message' => $message,
                    'reloggin' => true
                ]);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }
}
