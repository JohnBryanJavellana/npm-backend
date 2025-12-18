<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\AuditHelper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use App\Mail\WelcomeAboard;
use App\Utils\GenerateQR;

/**
 * Handles user registration, supporting both standard and social login flows.
 */
class RegisterController extends Controller
{
    /**
     * Registers a new user account.
     *
     * @param \Illuminate\Http\Request $request The incoming registration request data.
     * @return \Illuminate\Http\JsonResponse
     */
    public function register_user(Request $request) {
        $validations = [
            'fname' => 'required',
            'lname' => 'required',
            'is_from_social_login' => 'required',
            'email' => 'required|email',
        ];

        if ($request->is_from_social_login === "NO") {
            $validations['email'] = 'required|unique:users,email|string|email';
            $validations['birthdate'] = 'required|date|before:today';
            $validations['google_captcha'] = 'required|captcha';
            $validations['gender'] = 'required';
            $validations['password'] = ['required', 'confirmed', 'min:6', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&\.]/' ];
            $validations['password_confirmation'] = 'required';
        }

        $validator = \Validator::make($request->all(), $validations);

        if ($validator->fails()){
            return response()->json(['message' => implode(', ', $validator->messages()->all())], 422);
        }

        try {
            if ($request->is_from_social_login === "NO") {
                $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
                    'secret' => env('NOCAPTCHA_SECRET'),
                    'response' => $request->google_captcha,
                ]);

                if (!$response->successful()) {
                    return response()->json(['message' => $response->status()], 500);
                }
            }

            DB::beginTransaction();

            if ($request->is_from_social_login === 'YES') {
                $user = User::where(['email' => $request->email])->first();

                if ($user) {
                    Auth::login($user);
                    AuditHelper::log($user->id, "Logged in account");
                    DB::commit();
                    $token = $user->createToken('auth_token')->plainTextToken;
                    return response()->json(['token' => $token, 'role' => $user->role, 'autoLogin' => true], 200);
                } else {
                    return response()->json(['message' => 'Sorry, No account'], 422);
                }
            }

            $users = User::all();
            $request_fullname = strtolower("{$request->fname} {$request->lname} {$request->mname} {$request->suffix}");

            foreach ($users as $user) {
                $user_fullname = strtolower("{$user->fname} {$user->lname} {$user->mname} {$user->suffix}");

                if ($user_fullname === $request_fullname || ($user_fullname === $request_fullname && $request->birthday === $user->birthday)) {
                    return response()->json(['message' => 'Sorry, Account already exists.'], 422);
                }
            }

            $user = new User;
            $next_id_suffix = (int) substr(User::max('id'), 4) + 1;
            $user->id = Carbon::now()->year . str_pad($next_id_suffix, 5, '0', STR_PAD_LEFT);

            $user->fname = strtoupper($request->fname);
            $user->lname = strtoupper($request->lname);
            $user->mname = strtoupper($request->mname);
            $user->suffix = strtoupper($request->suffix);
            $user->email = $request->email;
            $user->gender = $request->gender ?? 'MALE';
            $user->role = "TRAINEE";

            if ($request->avatar) {
                $image_name = Str::uuid() . '.png';
                $response = Http::get($request->avatar);
                if ($response->successful()) {
                    file_put_contents(public_path('user_images/' . $image_name), $response->body());
                    $user->profile_picture = $image_name;
                }
            }

            if ($request->is_from_social_login === "YES") {
                $user->email_verified_at = Carbon::now();
                $password = '';
            } else {
                $password = $request->password;
            }

            $user->birthdate = $request->birthdate;
            $user->isSocial = $request->is_from_social_login;
            $user->password = bcrypt($password);
            $user->save();

            if ($request->is_from_social_login === "YES") {
                if (Auth::attempt(['email' => $request->email, 'password' => ''])){
                    $user = Auth::user();

                    $filename = "$user->id.png";
                    $qr_path = public_path("qr/user/$user->id.png");
                    $qr = new GenerateQR();
                    $qr->generate($filename, $user->id, $user->id, "qr/user/");

                    \Mail::to($request->email)->send(new WelcomeAboard(['portal_link' => '', 'image_path' => $qr_path]));
                    AuditHelper::log($request->user()->id, "Logged in account");
                    DB::commit();

                    $token = $user->createToken('auth_token')->plainTextToken;
                    return response()->json(['token' => $token, 'role' => $user->role, 'autoLogin' => true], 200);
                }
            } else {
                event(new Registered($user));
            }

            // 12. Commit transaction if successful and return final registration status.
            DB::commit();

            // Success response (HTTP 201 Created).
            return response()->json([
                'success' => true,
                'autoLogin' => false,
                'message' => 'Registration successful! Please check your email for verification link.'
            ], 201);
        } catch (\Exception $e) {
            // 13. Catch exceptions, roll back database changes, and return error.
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
