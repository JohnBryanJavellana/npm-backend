<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Guest\RegisterController;
use Illuminate\Http\Request;
use App\Utils\TransactionUtil;
use App\Http\Requests\Admin\Masterlist\{
    CreateOrUpdateEmployer,
    CreateOrUpdatePosition
};
use App\Utils\AuditHelper;
use App\Events\{
    BEMasterlist,
    BEAuditTrail
};
use App\Models\{
    AuditTrail,
    Employer,
    Position,
    User
};

class Masterlist extends Controller
{
    protected $registerCtrlInstance;

    public function __construct(RegisterController $registerController) {
        $this->registerCtrlInstance = $registerController;
    }

    public function get_users (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $users = User::withCount([
                'trainee_enrolled_courses' => function($query) {
                    $query->whereNotIn('status', ['CANCELLED', 'COMPLETED', 'DECLINED', 'IR', 'CSFB']);
                }
            ])->where('id', '!=', $request->user()->id)->withCount(['hasData']);

            if($request->role) {
                $users->whereIn('role', $request->role);
            }

            $usersData = $users->get();
            return response()->json(['users' => $usersData], 200);
        });
    }

    public function get_user_basic_info (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $user_info = User::find($user_id);
            return response()->json(['user_info' => $user_info], 200);
        });
    }

    public function get_user_credits (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $owner = User::find($user_id);
            $credits = [
                'credits' => $owner->creditAmount()->orderBy('created_at', 'DESC')->get()->map(function($credit) {
                    return $credit;
                })->values(),
                'credit_amount' => $owner->credit_amount
            ];

            return response()->json(['credits' => $credits], 200);
        });
    }

    public function get_user_activities (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $activities = AuditTrail::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
            return response()->json(['activities' => $activities], 200);
        });
    }

    public function create_or_update_user (Request $request) {
        $this->registerCtrlInstance->register_user($request);
    }

    public function remove_user (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $user_id) {
            $this_user = User::withCount(['hasData'])->where('id', $user_id)->first();

            if($this_user->has_data_count > 0) {
                return response()->json(['message' => "Can't remove user. It already has connected data."], 409);
            } else {
                $this_user->delete();

                AuditHelper::log($request->user()->id, "Removed a user. ID#$user_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "Removed a user. ID#$user_id"], 200);
            }
        });
    }

    public function get_employers (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $employers = Employer::all();
            return response()->json(['employers' => $employers], 200);
        });
    }

    public function create_or_update_employer (CreateOrUpdateEmployer $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_employer = $request->httpMethod === "POST"
                ? new Employer
                : Employer::find($request->documentId);

            $this_employer->name = $request->name;
            $this_employer->address = $request->address;
            if($request->status) $this_employer->status = $request->status;
            $this_employer->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " an employer. ID#" . $this_employer->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " an employer. ID#" . $this_employer->id], 201);
        });
    }

    public function remove_employer (Request $request, int $employer_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $employer_id) {
            $this_employer = Employer::where('id', $employer_id)->first();

            if(!$this_employer) {
                return response()->json(['message' => "Can't remove employer. It already has connected data."], 409);
            } else {
                $this_employer->delete();
                AuditHelper::log($request->user()->id, "Removed an employer. ID#$employer_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed an employer. ID#$employer_id"], 200);
            }
        });
    }

    public function get_positions (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $positions = Position::all();
            return response()->json(['positions' => $positions], 200);
        });
    }

    public function create_or_update_position (CreateOrUpdatePosition $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_position = $request->httpMethod === "POST"
                ? new Position
                : Position::find($request->documentId);

            $this_position->name = $request->name;
            $this_position->short_name = $request->shortName;
            if($request->status) $this_position->status = $request->status;
            $this_position->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a position. ID#" . $this_position->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a position. ID#" . $this_position->id], 201);
        });
    }

    public function remove_position (Request $request, int $position_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $position_id) {
            $this_position = Position::where('id', $position_id)->first();

            if(!$this_position) {
                return response()->json(['message' => "Can't remove position. It already has connected data."], 409);
            } else {
                $this_position->delete();

                AuditHelper::log($request->user()->id, "Removed a position. ID#$position_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a position. ID#$position_id"], 200);
            }
        });
    }
}
