<?php

namespace App\Http\Controllers\Authenticated;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{ 
    AuditTrail
};

class Logout extends Controller
{
    public function logout_user(Request $request) {
        try {
            if(Auth::check() && $request->user()) {
                Auth::logout();
                $request->user()->currentAccessToken()->delete();
                $request->user()->logout();

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "You've logged out to your account";
                $new_log->save();
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
