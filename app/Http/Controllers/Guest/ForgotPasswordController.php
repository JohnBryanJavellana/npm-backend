<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * Controller class to handle the entire forgotten and reset password flow.
 * It integrates with Google reCAPTCHA for security and Laravel's built-in
 * Password broker for token management.
 */
class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'google_captcha' => 'required'
        ]);

        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->google_captcha,
        ]);

        if ($response->successful()) {
            $status = Password::sendResetLink($request->only('email'));

            return $status === Password::RESET_LINK_SENT
                ? response()->json(['status' => 'success', 'message' => __($status)], 200)
                : response()->json(['status' => 'error', 'message' => __($status)], 400);
        } else {
            return response()->json(['message' => 'reCAPTCHA verification failed or server error: ' . $response->status()], 500);
        }
    }

    /**
     * Handles the actual password reset after the user clicks the link and submits the new password.
     *
     * @param \Illuminate\Http\Request $request The incoming request containing 'token', 'email', and new 'password' credentials.
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required_with:password_confirmation', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&\.]/'],
            'password_confirmation' => 'same:password',
            'google_captcha' => 'required'
        ]);

        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->google_captcha,
        ]);

        if ($response->successful()) {
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) use ($request) {
                    $user->forceFill([ 'password' => bcrypt($password) ])->setRememberToken(Str::random(60));
                    $user->save();
                    event(new PasswordReset($user));
                }
            );

            return $status == Password::PASSWORD_RESET
                ? response()->json(['status' => 'success', 'message' => __($status)], 200)
                : response()->json(['status' => 'error', 'message' => __($status)], 400);
        } else {
            return response()->json(['message' => 'reCAPTCHA verification failed or server error: ' . $response->status()], 500);
        }
    }
}
