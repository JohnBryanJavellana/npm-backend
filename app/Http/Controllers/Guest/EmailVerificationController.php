<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\WelcomeAboard;

/**
 * Controller class responsible for handling the email verification process.
 */
class EmailVerificationController extends Controller {
    /**
     * Verifies the user's email address using a signed verification link.
     *
     * @param \Illuminate\Http\Request $request The incoming verification request containing 'id', 'hash', and 'expires' queries.
     * @return \Illuminate\Http\JsonResponse
     */
    public function verify(Request $request) {
        // Retrieve the 'expires' timestamp from the query parameters.
        $expires = $request->query('expires');

        // 1. Check for link expiration (custom check)
        if ($expires && time() > $expires) {
            // If the link has expired, find the user and delete their account.
            // NOTE: This logic permanently deletes the unverified user account upon expiration,
            // which is a strong action typically handled by a re-send mechanism in standard Laravel.
            User::find($request->query('id'))->delete();
            return response()->json(['message' => 'Verification link has expired.'], 400);
        } else {
            // 2. Validate the request signature (Laravel's built-in security check)
            // Ensures the URL was not tampered with since it was generated.
            if (!$request->hasValidSignature()) {
                // Return HTTP 403 Forbidden if the signature is invalid.
                abort(403);
            }

            // 3. Retrieve the user based on the 'id' in the query string.
            $user = User::find($request->query('id'));

            // 4. Check if the user exists.
            if (!$user) {
                // Return HTTP 404 Not Found if the user ID is invalid.
                abort(404);
            }

            // 5. Check if the email is already verified.
            if ($user->hasVerifiedEmail()) {
                return response()->json(['message' => 'Email already verified'], 400);
            }

            // 6. Verify the hash (ensures the token/hash matches the user's email address).
            // Compares the hash from the URL with a newly generated hash of the user's email.
            if (!hash_equals((string) $request->query('hash'), sha1($user->getEmailForVerification()))) {
                // Return HTTP 403 Forbidden if the hash does not match.
                abort(403);
            }

            // 7. Mark the email as verified (updates the 'email_verified_at' timestamp).
            $user->markEmailAsVerified();

            // 8. Fire the Verified event (allows other listeners to react, e.g., logging or welcoming).
            event(new Verified($user));

            // --- Custom Post-Verification Actions ---

            // 9. Generate and save a QR Code for the user.
            $name = public_path("qr/$user->id.png");
            QrCode::format('png')
                ->size(500)
                ->style('round')
                ->margin(1)
                ->backgroundColor(255, 255, 255)
                ->merge('/public/system-images/62334fcadd0d9e6d0a152aca.png', 0.19)
                ->generate($user->id, $name);

            // 10. Send the Welcome Aboard email, including the path to the newly generated QR code.
            \Mail::to($user->email)->send(new WelcomeAboard(['portal_link' => '', 'image_path' => $name]));

            // 11. Return a successful verification response.
            return response()->json(['message' => 'Email verified successfully']);
        }
    }
}