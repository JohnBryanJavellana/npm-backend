<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\User;
use App\Utils\GenerateQR;
use App\Mail\WelcomeAboard;

class EmailVerificationController extends Controller {
    /**
     * Verifies the user's email address using a signed verification link.
     *
     * @param \Illuminate\Http\Request $request The incoming verification request containing 'id', 'hash', and 'expires' queries.
     * @return \Illuminate\Http\JsonResponse
     */
    public function verify(Request $request) {
        $expires = $request->query('expires');

        if ($expires && time() > $expires) {
            User::find($request->query('id'))->delete();
            return response()->json(['message' => 'Verification link has expired.'], 400);
        } else {
            if (!$request->hasValidSignature()) abort(403);

            $user = User::find($request->query('id'));

            if (!$user) abort(404);
            if ($user->hasVerifiedEmail()) {
                return response()->json(['message' => 'Email already verified'], 400);
            }

            if (!hash_equals((string) $request->query('hash'), sha1($user->getEmailForVerification()))) {
                abort(403);
            }

            $user->markEmailAsVerified();
            event(new Verified($user));

            $filename = "$user->id.png";
            $qr_path = public_path("qr/user/$user->id.png");
            $qr = new GenerateQR();
            $qr->generate($filename, $user->id, $user->id, "qr/user/");

            \Mail::to($user->email)->send(new WelcomeAboard(['portal_link' => '', 'image_path' => $qr_path]));
            return response()->json(['message' => 'Email verified successfully']);
        }
    }
}
