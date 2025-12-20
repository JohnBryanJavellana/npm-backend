<?php

namespace App\Http\Controllers\Authenticated;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\{
    AuditHelper
};

class Logout extends Controller
{
   public function logout_user(Request $request) {
        try {
            $user = $request->user();

            if ($user) {
                AuditHelper::log($request->user()->id, "Logged out account.");

                if ($user->currentAccessToken()) {
                    $user->currentAccessToken()->delete();
                }

                return response()->json(['message' => 'Successfully logged out'], 200);
            }

            return response()->json(['message' => 'No active session found'], 401);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
