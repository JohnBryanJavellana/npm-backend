<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Admin\Registration\Register;
use Illuminate\Auth\Events\Registered;
use App\Mail\WelcomeAboard;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\{DB, Hash, Mail};
use App\Utils\{AuditHelper, GenerateQR};

class RegisterController extends Controller
{
    public function register_user(Request $request){
        return DB::transaction(function () use ($request) {
            if ($request->is_from_social_login === 'YES') {
                try {
                    $socialUser = Socialite::driver($request->provider)->stateless()->userFromToken($request->token);

                    $user = User::where('email', $socialUser->getEmail())->first();

                    if (!$user) {
                        $user = new User;
                        $user->id = $this->generateCustomId();
                        $user->fname = strtoupper($socialUser->user['given_name'] ?? $socialUser->user['first_name'] ?? '');
                        $user->lname = strtoupper($socialUser->user['family_name'] ?? $socialUser->user['last_name'] ?? '');
                        $user->email = $socialUser->getEmail();
                        $user->password = Hash::make(Str::random(24));
                        $user->isSocial = 'YES';
                        $user->role = 'TRAINEE';
                        $user->qr = $this->processAssets($user, $socialUser->getAvatar());
                        $user->email_verified_at = now();
                        $user->save();
                    }

                    AuditHelper::log($user->id, "Logged in via Social Login");
                    $token = $user->createToken('auth_token')->plainTextToken;

                    return response()->json(['token' => $token, 'role' => $user->role, 'autoLogin' => true], 200);
                } catch (\Exception $e) {
                    return response()->json(['message' => 'Social authentication failed'], 401);
                }
            }

            if (User::where('email', $request->email)->exists() ||
                User::where([
                    'fname' => $request->fname,
                    'mname' => $request->lname,
                    'lname' => $request->mname,
                    'suffix' => $request->suffix,
                    'birthdate' => Carbon::parse($request->birthdate)->toDateString(),
                ])) {

                return response()->json(['message' => 'Account already exists.'], 422);
            }

            $user = new User;
            $user->id = $this->generateCustomId();
            $user->fname = $request->fname;
            $user->mname = $request->mname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->isSocial = 'NO';
            $user->qr = $this->processAssets($user, null);
            $user->birthdate = $request->birthdate;
            $user->role = 'TRAINEE';
            $user->save();

            event(new Registered($user));
            return response()->json(['message' => 'Registration successful!'], 201);
        });
    }

    private function generateCustomId() {
        $maxId = User::max('id');
        $next_id_suffix = $maxId ? (int) substr($maxId, 4) + 1 : 1;
        return Carbon::now()->year . str_pad($next_id_suffix, 5, '0', STR_PAD_LEFT);
    }

    private function processAssets($user, $avatarUrl) {
        $filename = "{$user->id}.png";
        $qrPath = public_path("qr/user/$filename");
        (new GenerateQR())->generate($filename, $user->id, $user->id, "qr/user/");

        if ($avatarUrl) {
            $response = Http::get($avatarUrl);

            if ($response->successful()) {
                file_put_contents(public_path('user_images/' . $filename), $response->body());
            }
        }

        Mail::to($user->email)->send(new WelcomeAboard(['image_path' => $qrPath]));
        return $filename;
    }
}
