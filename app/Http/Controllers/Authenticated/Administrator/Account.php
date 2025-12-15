<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Utils\TransactionUtil;
use Illuminate\Support\Facades\Cache;
use App\Mail\UpdatePasswordMail;
use App\Http\Requests\Admin\Account\{
    UpdatePassword,
    SubmitCSM
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
    ConvertToBase64
};
use Illuminate\Support\Facades\{
    DB,
    Hash
};

class Account extends Controller
{
    public function trainee_info (Request $request, int $traineeId) {
        return TransactionUtil::transact(null, function() use ($traineeId) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $traineeInfo = Cache::remember("user_profile_$traineeId", $ttl, function () use ($traineeId) {
                return User::with([
                    'additional_trainee_info.general_info',
                    'additional_trainee_info.contact',
                    'additional_trainee_info.trainee_registration_file',
                    'additional_trainee_info.trainee_registration_file.requirement',
                    'additional_trainee_info.educational_attainment.main_course',
                    'additional_trainee_info.educational_attainment.main_school',
                    'additional_trainee_info.educational_attainment',
                    'additional_trainee_info.latest_shipboard_attainment'
                ])->where('id', $traineeId)->first();
            });

            return response()->json(['traineeInfo' => $traineeInfo], 200);
        });
    }

    public function get_activities (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $activities = AuditTrail::orderBy('created_at', 'DESC');
            if ($request->user()->role !== "SUPERADMIN") $activities->where('user_id', $request->user()->id);

            return response()->json(['activities' => $activities->get()], 200);
        });
    }

    public function submit_csm (SubmitCSM $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $new_csm = new CSM;
            $new_csm->user_id = $request->user()->id;
            $new_csm->reference_id = $request->refNumber;
            $new_csm->service = $request->service;
            $new_csm->suggestion = $request->suggestion;

            $csm_data = [];
            foreach ($request->ccAnswer as $key => $cc) $csm_data['cc' . $key + 1] = $cc;
            foreach ($request->sqdAnswer as $key => $sqd) $csm_data['sqd' . $key] = $sqd;

            $new_csm->fill($csm_data);
            $new_csm->save();

            if($request->service === 'LIBRARY') {
                $updateRef = BookRes::find($request->refNumber);
                $updateRef->status = "COMPLETED";
                $updateRef->save();
            }

            return response()->json(['message' => "Client Satisfaction Submitted"], 200);
        });
    }

    public function update_personal(Request $request) {
        // 1. Define validation rules. The email rule ensures the new email is unique,
        // excluding the current user's ID.
        $validation = [
            'firstName' => 'required|string',
            'middleName' => 'string',
            'lastName' => 'required|string',
            'birthdate' => 'required|date|before:today',
            'email' => 'required|email|unique:users,email,' . $request->user()->id,
        ];

        $validator = \Validator::make($request->all(), $validation);

        if ($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $reloggin = false;
                $user = User::findOrFail($request->user()->id);

                // 2. Update basic personal fields.
                $user->fname = $request->firstName;
                $user->mname = $request->middleName;
                $user->lname = $request->lastName;
                $user->suffix = $request->suffix;
                $user->birthdate = $request->birthdate;

                // 3. Special handling for email change: Reset password and trigger email notification.
                if ($user->email !== $request->email) {
                    // Generate a temporary 6-character random password.
                    $random_password = strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
                    $user->password = bcrypt($random_password);

                    // Send the temporary password via email.
                    \Mail::to($request->email)->send(new UpdatePasswordMail(['password' => $random_password]));

                    // Flag that the client needs to force a re-login.
                    $reloggin = true;
                }

                $user->email = $request->email;

                // 4. Handle avatar (profile picture) upload/update.
                if ($request->avatar) {
                    // Check if the avatar changed AND it's not the default image.
                    if (($request->avatar !== $user->profile_picture) && $user->profile_picture !== 'default-avatar.png') {
                        // Delete the old file from the public directory if it exists.
                        if (file_exists(public_path('user-images/' . $user->profile_picture))){
                            unlink(public_path('user-images/' . $user->profile_picture));
                        }
                    }

                    // Save the new avatar, $request->avatar is a base64 string.
                    $image_name = Str::uuid() . '.png';
                    ConvertToBase64::generate($request->avatar, 'image', "user_images/$image_name");
                    $user->profile_picture = $image_name;
                }

                // 5. Save the updated user record.
                $user->save();

                // 6. Log the action in the Audit Trail.
                AuditHelper::log($request->user()->id, "Updated personal account information.");

                // 7. Fire an event to notify relevant listeners (e.g., frontend via websockets).
                if(env('USE_EVENT')) {
                    event(
                        new BEAccount(''),
                        new BEAuditTrail(''),
                    );
                }

                $cacheKey = 'user_profile_' . $request->user()->id;
                Cache::forget($cacheKey);

                DB::commit(); // Commit the transaction.

                // 8. Return success response.
                return response()->json([
                    'message' => "You've updated your account personal information.",
                    'reloggin' => $reloggin // Inform the client if re-login is required.
                ], 200);
            } catch (\Exception $e) {
                DB::rollback(); // Rollback changes if any error occurs.
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }

    public function update_password(UpdatePassword $request){
        return TransactionUtil::transact($request, function() use ($request) {
            $user = User::findOrFail($request->user()->id);

            if ($user->isSocial === 'NO' && !Hash::check($request->current_password, $user->password)) {
                return response()->json(['message' => 'Current password is incorrect'], 401);
            }

            $user->password = bcrypt($request->password);
            $user->isSocial = "NO";
            $user->save();

            AuditHelper::log($request->user()->id, "Updated account password.");

            if(env('USE_EVENT')) {
                event(
                    new BEAccount(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json([
                'message' => 'Password changed successfully. You will reloggin again.',
                'reloggin' => true
            ], 200);
        });
    }

    public function change_theme(Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $user = User::find($request->user()->id);
            $user->dark_mode = $user->dark_mode === 'dark' ? 'light' : 'dark';
            $user->save();

            Cache::forget('user_profile_' . $request->user()->id);
        });
    }
}
