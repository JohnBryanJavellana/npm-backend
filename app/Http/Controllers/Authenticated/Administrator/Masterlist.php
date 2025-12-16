<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\TransactionUtil;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Admin\Masterlist\{
    CreateOrUpdateSchool,
    CreateOrUpdateCourse,
    CreateOrUpdateVoucher,
    CreateOrUpdateSponsor,
    CreateOrUpdateEmployer,
    CreateOrUpdatePosition,
    CreateOrUpdateLicense,
    CreateOrUpdateRank
};
use Carbon\Carbon;
use App\Utils\AuditHelper;
use App\Events\{
    BEMasterlist,
    BEAuditTrail
};
use Illuminate\Support\Facades\DB;
use App\Models\{
    MainCourse,
    MainSchool,
    AuditTrail,
    Voucher,
    License,
    Rank,
    Sponsor,
    Employer,
    Position,
    User
};

class Masterlist extends Controller
{
    public function get_schools (Request $request) {
        return TransactionUtil::transact(null, function() {
            $schools = MainSchool::withCount(['hasData'])->get();
            return response()->json(['schools' => $schools], 200);
        });
    }

    public function create_or_update_school (CreateOrUpdateSchool $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_school = $request->httpMethod === "POST"
                ? new MainSchool
                : MainSchool::find($request->documentId);

            $this_school->school_name = $request->name;
            $this_school->school_address = $request->address;
            if($request->status) $this_school->school_status = $request->status;

            $this_school->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a school. ID#" . $this_school->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }
            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a school. ID#" . $this_school->id], 200);
        });
    }

    public function remove_school (Request $request, int $school_id) {
        return TransactionUtil::transact(null, function() use ($request, $school_id) {
            $this_school = MainSchool::withCount(['hasData'])->where('id', $school_id)->first();

            if($this_school->has_data_count > 0) {
                return response()->json(['message' => "Can't remove school. It already has connected data."], 409);
            } else {
                $this_school->delete();

                AuditHelper::log($request->user()->id, "Removed a school. ID#$school_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a school. ID#$school_id"], 200);
            }
        });
    }

    public function get_courses (Request $request) {
        return TransactionUtil::transact(null, function() {
            $courses = MainCourse::withCount(['hasData'])->get();
            return response()->json(['courses' => $courses], 200);
        });
    }

    public function create_or_update_course (CreateOrUpdateCourse $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_course = $request->httpMethod === "POST"
                ? new MainCourse
                : MainCourse::find($request->documentId);

            $this_course->course_name = $request->name;
            if($request->status) $this_course->course_status = $request->status;
            $this_course->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a course. ID#" . $this_course->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a course. ID#" . $this_course->id], 201);
        });
    }

    public function remove_course (Request $request, int $course_id) {
        return TransactionUtil::transact(null, function() use ($request, $course_id) {
            $this_course = MainCourse::withCount(['hasData'])->where('id', $course_id)->first();

            if($this_course->has_data_count > 0) {
                return response()->json(['message' => "Can't remove course. It already has connected data."], 409);
            } else {
                $this_course->delete();
                AuditHelper::log($request->user()->id, "Removed a course. ID#$course_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed course. ID#$course_id"], 200);
            }
        });
    }

    public function get_users (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $users = User::withCount([
                'trainee_enrolled_courses' => function($query) {
                    $query->whereNotIn('status', ['CANCELLED', 'COMPLETED', 'DECLINED', 'IR', 'CSFB']);
                }
            ])->where('id', '!=', $request->user()->id)->withCount(['hasData'])->get();
            return response()->json(['users' => $users], 200);
        });
    }

    public function get_user_basic_info (Request $request, int $user_id) {
        return TransactionUtil::transact(null, function() use ($user_id) {
            $user_info = User::find($user_id);
            return response()->json(['user_info' => $user_info], 200);
        });
    }

    public function get_user_activities (Request $request, int $user_id) {
        return TransactionUtil::transact(null, function() use ($user_id) {
            $activities = AuditTrail::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
            return response()->json(['activities' => $activities], 200);
        });
    }

    public function create_or_update_user (Request $request) {
        // 1. Base validation rules
        $validations = [
            // Ensure email is unique, ignoring the current documentId during update
            'email' => 'required|email|unique:users,email,' . $request->documentId,
            'birthdate' => 'required|date|before:today',
            'fname' => 'required',
            'lname' => 'required',
            'role' => 'required'
        ];

        // 2. Add complex password validation if password is being set/updated
        if($request->password) {
            $validations['password'] = [
                'required',
                'confirmed',
                'min:6',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ];
            $validations['password_confirmation'] = "required";
        }

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()){
            // 3. Handle validation failure
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                // 4. Start Database Transaction
                DB::beginTransaction();

                // 5. Determine if creating or updating
                $user = $request->httpMethod === "POST" ? new User : User::find($request->documentId);

                // 6. Set ID (Custom ID generation logic for new users)
                $user->id = $request->httpMethod === "POST"
                    ? Carbon::now()->year . str_pad((int) substr(User::max('id'), 4) + 1, 5, '0', STR_PAD_LEFT)
                    : $request->documentId; // Use existing ID for updates

                // 7. Assign data
                $user->fname = $request->fname;
                $user->lname = $request->lname;
                $user->mname = $request->mname;
                $user->suffix = $request->suffix;
                $user->email = $request->email;
                $user->role = $request->role;
                $user->birthdate = $request->birthdate;

                // Hash and set password only if provided
                if($request->password) {
                    $user->password = bcrypt($request->password);
                }

                $user->save();

                event(new Registered($user));

                // 8. Log the action
                AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a user. ID#" . $user->id);

                // 9. Fire events
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail('')
                );

                // 10. Commit transaction and return success
                DB::commit();
                return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a user. ID#" . $user->id], 200);
            } catch (\Exception $e) {
                // 11. Handle exceptions and rollback transaction
                DB::rollBack();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function remove_user (Request $request, int $user_id) {
        return TransactionUtil::transact(null, function() use ($request, $user_id) {
            $this_user = User::withCount(['hasData'])->where('id', $user_id)->first();

            if($this_user->has_data_count > 0) {
                return response()->json(['message' => "Can't remove user. It already has connected data."], 409);
            } else {
                $this_user->delete();

                AuditHelper::log($request->user()->id, "Removed a user. ID#$user_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "Removed a user. ID#$user_id"], 200);
            }
        });
    }

    public function get_vouchers (Request $request) {
        return TransactionUtil::transact(null, function() {
            $vouchers = Voucher::all();
            return response()->json(['vouchers' => $vouchers], 200);
        });
    }

    public function create_or_update_voucher (CreateOrUpdateVoucher $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_voucher = $request->httpMethod === "POST"
                ? new Voucher
                : Voucher::find($request->documentId);

            $this_voucher->name = $request->name;
            $this_voucher->code = $request->code;
            if($request->status) $this_voucher->status = $request->status;
            $this_voucher->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a voucher. ID#" . $this_voucher->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a voucher. ID#" . $this_voucher->id], 201);
        });
    }

    public function remove_voucher (Request $request, int $voucher_id) {
        return TransactionUtil::transact(null, function() use ($request, $voucher_id) {
            $this_voucher = Voucher::where('id', $voucher_id)->first();

            if($this_voucher->has_data_count > 0 && $this_voucher->has_data_count > 0) {
                return response()->json(['message' => "Can't remove voucher. It already has connected data."], 409);
            } else {
                $this_voucher->delete();

                AuditHelper::log($request->user()->id, "Removed a voucher. ID#$voucher_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed voucher. ID#$voucher_id"], 200);
            }
        });
    }

    public function get_sponsors (Request $request) {
        return TransactionUtil::transact(null, function() {
            $sponsors = Sponsor::all();
            return response()->json(['sponsors' => $sponsors], 200);
        });
    }

    public function create_or_update_sponsor (CreateOrUpdateSponsor $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_sponsor = $request->httpMethod === "POST"
                ? new Sponsor
                : Sponsor::find($request->documentId);

            $this_sponsor->name = $request->name;
            $this_sponsor->short_name = $request->short_name;
            if($request->status) $this_sponsor->status = $request->status;
            $this_sponsor->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a sponsor. ID#" . $this_sponsor->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a sponsor. ID#" . $this_sponsor->id], 201);
        });
    }

    public function remove_sponsor (Request $request, int $sponsor_id) {
        return TransactionUtil::transact(null, function() use ($request, $sponsor_id) {
            $this_sponsor = Sponsor::where('id', $sponsor_id)->first();

            if(!$this_sponsor) {
                return response()->json(['message' => "Can't remove sponsor. It already has connected data."], 409);
            } else {
                $this_sponsor->delete();
                AuditHelper::log($request->user()->id, "Removed a sponsor. ID#$sponsor_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a sponsor. ID#$sponsor_id"], 200);
            }
        });
    }

    public function get_employers (Request $request) {
        return TransactionUtil::transact(null, function() {
            $employers = Employer::all();
            return response()->json(['employers' => $employers], 200);
        });
    }

    public function create_or_update_employer (CreateOrUpdateEmployer $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_employer = $request->httpMethod === "POST"
                ? new Employer
                : Employer::find($request->documentId);

            $this_employer->name = $request->name;
            $this_employer->address = $request->address;
            if($request->status) $this_employer->status = $request->status;
            $this_employer->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " an employer. ID#" . $this_employer->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " an employer. ID#" . $this_employer->id], 201);
        });
    }

    public function remove_employer (Request $request, int $employer_id) {
        return TransactionUtil::transact(null, function() use ($request, $employer_id) {
            $this_employer = Employer::where('id', $employer_id)->first();

            if(!$this_employer) {
                return response()->json(['message' => "Can't remove employer. It already has connected data."], 409);
            } else {
                $this_employer->delete();
                AuditHelper::log($request->user()->id, "Removed an employer. ID#$employer_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed an employer. ID#$employer_id"], 200);
            }
        });
    }

    public function get_positions (Request $request) {
        return TransactionUtil::transact(null, function() {
            $positions = Position::all();
            return response()->json(['positions' => $positions], 200);
        });
    }

    public function create_or_update_position (CreateOrUpdatePosition $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_position = $request->httpMethod === "POST"
                ? new Position
                : Position::find($request->documentId);

            $this_position->name = $request->name;
            $this_position->short_name = $request->shortName;
            if($request->status) $this_position->status = $request->status;
            $this_position->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a position. ID#" . $this_position->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a position. ID#" . $this_position->id], 201);
        });
    }

    public function remove_position (Request $request, int $position_id) {
        return TransactionUtil::transact(null, function() use ($request, $position_id) {
            $this_position = Position::where('id', $position_id)->first();

            if(!$this_position) {
                return response()->json(['message' => "Can't remove position. It already has connected data."], 409);
            } else {
                $this_position->delete();

                AuditHelper::log($request->user()->id, "Removed a position. ID#$position_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a position. ID#$position_id"], 200);
            }
        });
    }

    public function get_licenses (Request $request) {
        return TransactionUtil::transact(null, function() {
            $licenses = License::withCount(['hasData'])->get();
            return response()->json(['licenses' => $licenses], 200);
        });
    }

    public function create_or_update_license (CreateOrUpdateLicense $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_license = $request->httpMethod === "POST"
                ? new License
                : License::find($request->documentId);

            $this_license->short_name = $request->name;
            $this_license->license = $request->license;
            $this_license->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a license. ID#" . $this_license->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a license. ID#" . $this_license->id], 201);
        });
    }

    public function remove_license (Request $request, int $license_id) {
        return TransactionUtil::transact(null, function() use ($request, $license_id) {
            $this_license = License::withCount(['hasData'])->where('id', $license_id)->first();

            if($this_license->has_data_count > 0) {
                return response()->json(['message' => "Can't remove license. It already has connected data."], 409);
            } else {
                $this_license->delete();
                AuditHelper::log($request->user()->id, "Removed a license. ID#$license_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed license. ID#$license_id"], 200);
            }
        });
    }

    public function get_ranks (Request $request) {
        return TransactionUtil::transact(null, function() {
            $ranks = Rank::withCount(['hasData'])->get();
            return response()->json(['ranks' => $ranks], 200);
        });
    }

    public function create_or_update_rank (CreateOrUpdateRank $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_rank = $request->httpMethod === "POST"
                ? new Rank
                : Rank::find($request->documentId);

            $this_rank->short_name = $request->short_name;
            $this_rank->name = $request->name;
            $this_rank->type = $request->type;
            $this_rank->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a rank. ID#" . $this_rank->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a rank. ID# " . $this_rank->id], 201);
        });
    }

    public function remove_rank (Request $request, int $rank_id) {
        return TransactionUtil::transact(null, function() use ($request, $rank_id) {
            $this_rank = Rank::withCount(['hasData'])->where('id', $rank_id)->first();

            if($this_rank->has_data_count > 0) {
                return response()->json(['message' => "Can't remove rank. It already has connected data."], 409);
            } else {
                $this_rank->delete();

                AuditHelper::log($request->user()->id, "Removed a rank. ID#$rank_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've removed rank. ID#$rank_id"], 200);
            }
        });
    }
}
