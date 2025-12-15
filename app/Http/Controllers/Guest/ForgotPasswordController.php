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
    /**
     * Handles the request to send a password reset link to the user's email.
     *
     * @param \Illuminate\Http\Request $request The incoming request containing 'email' and 'google_captcha'.
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(Request $request) {
        // 1. Validate the incoming request data. Laravel's built-in validate() throws a 
        // 422 exception on failure, returning JSON validation errors.
        $request->validate([
            'email' => 'required|email', 
            'google_captcha' => 'required'
        ]);

        // 2. Explicitly verify Google reCAPTCHA by making an HTTP GET request.
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->google_captcha,
        ]);

        // 3. Check if the reCAPTCHA verification request was successful.
        if ($response->successful()) {
            // 4. Send the password reset link using Laravel's Password broker.
            // This handles token generation, saving the token, and sending the email.
            $status = Password::sendResetLink($request->only('email'));

            // 5. Check the status of the operation and return the appropriate response.
            // Status messages (like 'passwords.sent' or 'passwords.user') are translated by __($status).
            return $status === Password::RESET_LINK_SENT
                ? response()->json(['status' => 'success', 'message' => __($status)], 200)
                : response()->json(['status' => 'error', 'message' => __($status)], 400); // Using 400 for broker errors
        } else {
            // 6. Return an error if reCAPTCHA verification failed.
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
        // 1. Validate the incoming request data, including password complexity and confirmation.
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            // Strong password rules: min 8 chars, lowercase, uppercase, number, and special character.
            'password' => ['required_with:password_confirmation', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&\.]/'],
            'password_confirmation' => 'same:password',
            'google_captcha' => 'required'
        ]);

        // 2. Explicitly verify Google reCAPTCHA.
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->google_captcha,
        ]);

        // 3. Check if reCAPTCHA verification was successful.
        if ($response->successful()) {
            // 4. Perform the password reset using Laravel's Password broker.
            // This checks the validity of the token, email, and confirmation.
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'), 
                
                // The closure defines how the user's password should be updated upon successful reset.
                function (User $user, string $password) use ($request) {
                    // Update the user's password and refresh the remember token for security.
                    $user->forceFill([ 'password' => bcrypt($password) ])->setRememberToken(Str::random(60));
                    $user->save();

                    // Fire the PasswordReset event, which can be used to notify the user
                    // (e.g., via email) that their password has been successfully changed.
                    event(new PasswordReset($user));
                }
            );

            // 5. Check the status of the operation and return the appropriate response.
            // Password::PASSWORD_RESET is the success status code.
            return $status == Password::PASSWORD_RESET
                ? response()->json(['status' => 'success', 'message' => __($status)], 200)
                : response()->json(['status' => 'error', 'message' => __($status)], 400); // 400 for token/email mismatch or other broker errors.
        } else {
            // 6. Return an error if reCAPTCHA verification failed.
            return response()->json(['message' => 'reCAPTCHA verification failed or server error: ' . $response->status()], 500); 
        }
    }
}