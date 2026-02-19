<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Jobs\SaveAvatar;
use App\Jobs\SendingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Utils\TransactionUtil;
use Illuminate\Support\Facades\Cache;
use App\Mail\UpdatePasswordMail;
use App\Enums\Administrator\{
    UserDetailsEnum,
    EnrollmentEnum
};
use App\Enums\{
    UserRoleEnum
};
use App\Http\Requests\Admin\Account\{
    UpdatePassword,
    UpdatePersonal
};
use App\Events\{
    BEAccount,
    BEAuditTrail
};
use App\Models\{
    AuditTrail,
    User,
    CSM,
    BookRes
};
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
};
use Illuminate\Support\Facades\{
    DB,
    Hash
};

use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};

class Account extends Controller
{
    /**
     * Summary of trainee_info
     * @param Request $request
     * @param int $traineeId
     */
    public function trainee_info (Request $request, int $traineeId) {
        return TransactionUtil::transact(null, [], function() use ($traineeId) {
            $traineeInfo = User::with([
                'additional_trainee_info.general_info',
                'additional_trainee_info.contact',
                'additional_trainee_info.trainee_registration_file',
                'additional_trainee_info.trainee_registration_file.requirement',
                'additional_trainee_info.educational_attainment.main_course',
                'additional_trainee_info.educational_attainment.main_school',
                'additional_trainee_info.educational_attainment',
                'additional_trainee_info.latest_shipboard_attainment',
                'additional_trainee_info.latest_shipboard_attainment.license',
                'additional_trainee_info.latest_shipboard_attainment.rank',
                'trainee_enrolled_courses' => function($query) {
                    $query->whereNotIn('enrolled_course_status', [
                        EnrollmentEnum::CANCELLED->value,
                        EnrollmentEnum::DECLINED->value,
                        EnrollmentEnum::CANCELLED->value,
                        EnrollmentEnum::COURSE_STATUS_FULLY_BOOKED->value,
                        EnrollmentEnum::PENDING->value
                    ]);
                },
                'trainee_enrolled_courses.training.module'
            ])->where('id', $traineeId)->first();

            return response()->json(['traineeInfo' => $traineeInfo], 200);
        });
    }

    /**
     * Summary of get_activities
     * @param Request $request
     */
    public function get_activities (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $activities = AuditTrail::orderBy('created_at', 'DESC');
            if ($request->user()->role !== UserRoleEnum::SUPERADMIN->value) $activities->where('user_id', $request->user()->id);

            return response()->json(['activities' => $activities->get()], 200);
        });
    }

    /**
     * Summary of update_personal
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param UpdatePersonal $request
     */
    public function update_personal(UpdatePersonal $request) {
        return TransactionUtil::transact($request, ['user_profile_' . $request->user()->id], function() use ($request) {
            $reloggin = false;
            $user = User::findOrFail($request->documentId ?? $request->user()->id);

            $user->fname = $request->firstName;
            $user->mname = $request->middleName;
            $user->lname = $request->lastName;
            $user->gender = $request->gender;
            $user->suffix = $request->suffix === "NA" ? NULL : $request->suffix;
            $user->birthdate = $request->birthdate;

            if ($user->email !== $request->email) {
                $random_password = strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
                $user->password = bcrypt($random_password);
                SendingEmail::dispatch($user, new UpdatePasswordMail(['password' => $random_password]));
                $reloggin = true;
            }

            if ($request->avatar) {
                if (($request->avatar !== $user->profile_picture) && $user->profile_picture !== 'default-avatar.png') {
                    if (file_exists(public_path('user-images/' . $user->profile_picture))){
                        unlink(public_path('user-images/' . $user->profile_picture));
                    }
                }

                $image_name = Str::uuid() . '.png';
                SaveAvatar::dispatch($request->avatar, $image_name, "user_images/", false, true, "");
                $user->profile_picture = $image_name;
            }

            $user->email = $request->email;
            $user->save();

            AuditHelper::log($request->user()->id, AdministratorAuditActions::ACCOUNTCTRL_UPDATE_PERSONAL);

            if(env('USE_EVENT')) {
                event(
                    new BEAccount(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json([
                'message' => AdministratorReturnResponse::ACCOUNTCTRL_UPDATE_PERSONAL,
                'reloggin' => $reloggin
            ], 200);
        });
    }

    /**
     * Summary of update_password
     * @param bool auditActions === TRUE
     * ....
     * @param bool returnedMessage === TRUE
     * @param UpdatePassword $request
     */
    public function update_password(UpdatePassword $request){
        return TransactionUtil::transact($request, [], function() use ($request) {
            $user = User::findOrFail($request->user()->id);

            if ($user->isSocial === 'NO' && !Hash::check($request->current_password, $user->password)) {
                return response()->json(['message' => 'Current password is incorrect'], 401);
            }

            $user->password = bcrypt($request->password);
            $user->isSocial = UserDetailsEnum::HARD_ACCOUNT;
            $user->save();

            AuditHelper::log($request->user()->id, AdministratorAuditActions::ACCOUNTCTRL_UPDATE_PASSWORD);

            if(env('USE_EVENT')) {
                event(
                    new BEAccount(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json([
                'message' => AdministratorReturnResponse::ACCOUNTCTRL_UPDATE_PASSWORD,
                'reloggin' => true
            ], 200);
        });
    }

    /**
     * Summary of change_theme
     * @param Request $request
     */
    public function change_theme(Request $request) {
        return TransactionUtil::transact(null, ['user_profile_' . $request->user()->id], function() use ($request) {
            $user = User::find($request->user()->id);
            $user->dark_mode = $user->dark_mode === UserDetailsEnum::DARK_MODE->value
                ? UserDetailsEnum::LIGHT_MODE
                : UserDetailsEnum::DARK_MODE;
            $user->save();
        });
    }
}
