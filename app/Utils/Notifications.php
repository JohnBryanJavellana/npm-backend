<?php

namespace App\Utils;

use App\Models\Notification;
use Illuminate\Support\Facades\DB;

class Notifications
{
    public static function notify($userId, $to_user, $type, $message)
    {
        try {

            DB::beginTransaction();
            $notif = new Notification();
            $notif->user_id = $userId;
            $notif->to_user = $to_user;
            $notif->type = $type;
            $notif->message = $message;
            $notif->save();
            DB::commit();

        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => "Something went wrong! Please try again"], 422);
        }
    }
}