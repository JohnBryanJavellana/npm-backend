<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utils\TransactionUtil;
use App\Models\{
    Notification
};

class NotificationCtrl extends Controller
{
    protected $notificationInstance;

    public function __construct(Notification $notification) {
        $this->notificationInstance = $notification;
    }

    public function get_notifications (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $currentUserInstance = $request->user();
            $isNotAdmin = in_array($currentUserInstance->role, ["TRAINEE", "TRAINER"]);

            $notificationsTemp = $this->notificationInstance->with(['sender']);
            $userDesignation = in_array($currentUserInstance->role, ["ADMIN-DORMITORY", "ADMIN-LIBRARY", "ADMIN-ENROLLMENT"])
                ? [str_replace("ADMIN-", '', $currentUserInstance->role)]
                : ["DORMITORY", "LIBRARY", "ENROLLMENT"];

            $notifications = $isNotAdmin
                ? $notificationsTemp->where('to_user', $currentUserInstance->id)
                : $notificationsTemp->whereIn('type', $userDesignation);

            if($request->limit) $notifications->limit($request->limit);
            $finalNotifications = $notifications->orderBy('created_at', 'DESC')->get();

            return response()->json(['notifications' => $finalNotifications], 200);
        });
    }
}
