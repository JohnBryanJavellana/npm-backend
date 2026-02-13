<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Auth\Events\Registered;
use App\Mail\WelcomeAboard;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Enums\Administrator\{
    UserDetailsEnum
};
use App\Enums\{
    UserRoleEnum
};
use App\Utils\{
    AuditHelper,
    GenerateQR,
    RemoveSpecialCharactersInString
};
use App\Jobs\{
    SendingEmail,
    SaveAvatar
};
use Illuminate\Support\Facades\{
    DB, Hash
};
use App\Events\{
    BEMasterlist,
    BEAuditTrail
};

class RegisterController extends Controller
{
    public function register_user(Request $request){
        return DB::transaction(function () use ($request) {
            if($request->token) {
                $socialUser = Socialite::driver($request->provider)->stateless()->userFromToken($request->token);
                $socialData = $socialUser->getRaw();
            }

            $fname = RemoveSpecialCharactersInString::remove(strtoupper($socialData['given_name'] ?? $socialData['first_name'] ?? $request->fname));
            $mname = RemoveSpecialCharactersInString::remove(strtoupper($request->mname ?? ''));
            $lname = RemoveSpecialCharactersInString::remove(strtoupper($socialData['family_name'] ?? $socialData['last_name'] ?? $request->lname));

            if ($request->is_from_social_login === 'YES') {
                try {
                    $email = $socialUser->getEmail();

                    $user = User::where('email', $email)->first();

                    if ($user && $user->isSocial === "NO") {
                        return response()->json(['message' => 'Account already exists with standard login.'], 422);
                    }

                    if (!$user) {
                        $user = new User;
                        $user->id = $this->generateCustomId();
                        $user->fname = $fname;
                        $user->lname = $lname;
                        $user->email = $email;
                        $user->password = Hash::make(Str::random(24));
                        $user->isSocial = UserDetailsEnum::SOFT_ACCOUNT;
                        $user->role = UserRoleEnum::TRAINEE;
                        $user->email_verified_at = now();

                        $filename = "{$user->id}.png";
                        $user->qr = $filename;

                        $profile_filename = Str::uuid() . '.png';
                        $user->profile_picture = $profile_filename;

                        $user->save();

                        $this->processAvatar($socialUser->getAvatar(), $profile_filename);
                        $this->generateAndSendQR($user, $filename);
                    }

                    AuditHelper::log($user->id, "Logged in via Social Login");
                    $token = $user->createToken('auth_token')->plainTextToken;

                    return response()->json([
                        'token' => $token,
                        'role' => $user->role,
                        'autoLogin' => true,
                        'showEmailVerification' => false
                    ], 200);

                } catch (\Exception $e) {
                    \Log::error("Social Login Error: " . $e->getMessage());
                    return response()->json(['message' => 'Social authentication failed'], 401);
                }
            }

            if (User::where('email', $request->email)->exists() ||
                User::where([
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'suffix' => $request->suffix,
                    'birthdate' => Carbon::parse($request->birthdate)->toDateString(),
                ])->exists()) {

                return response()->json(['message' => 'Account already exists.'], 422);
            }

            if($request->password !== $request->password_confirmation) {
                return response()->json(['message' => "Password doesn't match"], 422);
            }

            $user = new User();
            $user->id = $this->generateCustomId();
            $user->fname = $fname;
            $user->mname = $mname;
            $user->lname = $lname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->isSocial = UserDetailsEnum::HARD_ACCOUNT;
            $user->birthdate = $request->birthdate;
            $user->role = $request->role ?? UserRoleEnum::TRAINEE;
            $filename = "{$user->id}.png";
            $user->qr = $filename;
            $user->save();

            $this->generateAndSendQR($user, $filename);

            if($request->adminSettings) {
                AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a user account. ID#" . $user->id);

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }
            }

            event(new Registered($user));

            return response()->json([
                'message' => 'Registration successful!',
                'showEmailVerification' => true
            ], 201);
        });
    }

    protected function generateCustomId() {
        $maxId = User::max('id');
        $next_id_suffix = $maxId ? (int) substr($maxId, 4) + 1 : 1;
        return Carbon::now()->year . str_pad($next_id_suffix, 5, '0', STR_PAD_LEFT);
    }

    public function generateAndSendQR($user, $filename) {
        $qrPath = public_path("qr/user/$filename");

        (new GenerateQR())->generate($filename, $user->id, $user->id, "qr/user/");
        SendingEmail::dispatch($user, new WelcomeAboard(['image_path' => $qrPath]));

        return $filename;
    }

    protected function processAvatar($avatarUrl, $filename, $isBase64 = false) {
        $filename = Str::uuid() . '.png';
        SaveAvatar::dispatch($avatarUrl, $filename, "user_images/", true, $isBase64);
        return $filename;
    }
}
