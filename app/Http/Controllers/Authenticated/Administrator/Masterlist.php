<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Guest\RegisterController;
use Illuminate\Http\Request;
use App\Utils\TransactionUtil;
use App\Http\Requests\Admin\QrReader\{
    CreateOrUpdateQRReaderLocation,
    CreateOrUpdateQRAssignment
};
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
    User,
    QrReaderLocation,
    CheckInOutLog,
    UserAssignedQrLocation
};
use App\Helpers\Administrator\General\CheckForDocumentExistence;

class Masterlist extends Controller
{
    protected $registerCtrlInstance;

    public function __construct(RegisterController $registerController) {
        $this->registerCtrlInstance = $registerController;
    }

    /**
     * Summary of get_users
     * @param Request $request
     */
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

    /**
     * Summary of get_user_basic_info
     * @param Request $request
     * @param int $user_id
     */
    public function get_user_basic_info (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $user_info = User::findOrFail($user_id);
            return response()->json(['user_info' => $user_info], 200);
        });
    }

    /**
     * Summary of get_user_activities
     * @param Request $request
     * @param int $user_id
     */
    public function get_user_activities (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $activities = AuditTrail::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
            return response()->json(['activities' => $activities], 200);
        });
    }

    /**
     * Summary of get_user_activities
     * @param Request $request
     * @param int $user_id
     */
    public function get_user_qr_reader_assignments (Request $request, int $user_id) {
        return TransactionUtil::transact(null, [], function() use ($user_id) {
            $qr_readers = UserAssignedQrLocation::where('user_id', $user_id)
                ->with('qrLocation')
                ->get();

            return response()->json(['qr_readers' => $qr_readers], 200);
        });
    }

    /**
     * Summary of qr_assignments
     * @param CreateOrUpdateQRAssignment $request
     */
    public function qr_assignments (CreateOrUpdateQRAssignment $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                UserAssignedQrLocation::class,
                ['user_id' => $request->userId, 'qr_reader_location_id' => $request->qrReader],
                !$isPost,
                $documentId,
                'id',
                "User Assigned Qr Location already exist."
            );

            if($check) return $check;

            $this_qr_assignments = $isPost ? new UserAssignedQrLocation() : UserAssignedQrLocation::findOrFail($documentId);
            $this_qr_assignments->user_id = $request->userId;
            $this_qr_assignments->qr_reader_location_id = $request->qrReader;
            $this_qr_assignments->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a QR Reader assignment. ID#" . $this_qr_assignments->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a QR Reader assignment. ID#" . $this_qr_assignments->id], 201);
        });
    }

    /**
     * Summary of create_or_update_user
     * @param Request $request
     * @return void
     */
    public function create_or_update_user (Request $request) {
        $this->registerCtrlInstance->register_user($request);
    }

    /**
     * Summary of remove_user
     * @param Request $request
     * @param int $user_id
     */
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

    /**
     * Summary of get_employers
     * @param Request $request
     */
    public function get_employers (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $employers = Employer::all();
            return response()->json(['employers' => $employers], 200);
        });
    }

    /**
     * Summary of create_or_update_employer
     * @param CreateOrUpdateEmployer $request
     */
    public function create_or_update_employer (CreateOrUpdateEmployer $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Employer::class,
                ['name' => $request->name, 'address' => $request->address],
                !$isPost,
                $documentId,
                'id',
                "Employer already exist."
            );

            if($check) return $check;

            $this_employer = $isPost ? new Employer : Employer::findOrFail($request->documentId);
            $this_employer->name = $request->name;
            $this_employer->address = $request->address;
            if(!$isPost) $this_employer->status = $request->status;
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

    /**
     * Summary of remove_employer
     * @param Request $request
     * @param int $employer_id
     */
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

                return response()->json(['message' => "You've removed an employer.  ID#$employer_id"], 200);
            }
        });
    }

    /**
     * Summary of get_positions
     * @param Request $request
     */
    public function get_positions (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $positions = Position::all();
            return response()->json(['positions' => $positions], 200);
        });
    }

    /**
     * Summary of create_or_update_position
     * @param CreateOrUpdatePosition $request
     */
    public function create_or_update_position (CreateOrUpdatePosition $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                Position::class,
                ['name' => $request->name, 'short_name' => $request->shortName],
                !$isPost,
                $documentId,
                'id',
                "Position already exist."
            );

            if($check) return $check;

            $this_position = $isPost ? new Position : Position::findOrFail($request->documentId);
            $this_position->name = $request->name;
            $this_position->short_name = $request->shortName;
            if(!$isPost) $this_position->status = $request->status;
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

    /**
     * Summary of remove_position
     * @param Request $request
     * @param int $position_id
     */
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

    /**
     * Summary of get_qr_readers
     * @param Request $request
     */
    public function get_qr_readers (Request $request) {
        return TransactionUtil::transact(null, [], function() use($request) {
            $qr_readers_temp = QrReaderLocation::withCount(['hasData']);

            $qr_readers = $request->documentId
                ? $qr_readers_temp->where('id', $request->documentId)
                                  ->with('assignedUsers.user')
                                  ->first()
                : $qr_readers_temp->get();

            return response()->json(['qr_readers' => $qr_readers], 200);
        });
    }

    public function get_qr_reader_records (Request $request) {
        return TransactionUtil::transact(null, [], function() use($request) {
            $qr_reader_records = CheckInOutLog::where('qr_reader_location_id', $request->documentId)
                ->with(['initiator'])
                ->get();

            return response()->json(['qr_reader_records' => $qr_reader_records], 200);
        });
    }

    /**
     * Summary of create_or_update_qr_reader
     * @param CreateOrUpdateQRReaderLocation $request
     */
    public function create_or_update_qr_reader (CreateOrUpdateQRReaderLocation $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                QrReaderLocation::class,
                [
                    'unit_name' => $request->name,
                    'location' => $request->location,
                    'type' => $request->type
                ],
                !$isPost,
                $documentId,
                'id',
                "Qr Location already exist."
            );

            if($check) return $check;

            $this_qr_reader_location = $isPost ? new QrReaderLocation() : QrReaderLocation::findOrFail($documentId);
            $this_qr_reader_location->unit_name = $request->name;
            $this_qr_reader_location->location = $request->location;
            $this_qr_reader_location->type = $request->type;
            $this_qr_reader_location->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a QR Reader location. ID#" . $this_qr_reader_location->id);

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a QR Reader location. ID#" . $this_qr_reader_location->id], 201);
        });
    }

    /**
     * Summary of remove_qr_reader_assignment
     * @param Request $request
     * @param int $qr_reader_id
     */
    public function remove_qr_reader_assignment (Request $request, int $qr_reader_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $qr_reader_id) {
            $this_qr_assignment = UserAssignedQrLocation::where('id', $qr_reader_id)->first();
            $this_qr_assignment->delete();

            AuditHelper::log($request->user()->id, "Removed a qr reader assignment. ID#$qr_reader_id");

            if(env('USE_EVENT')) {
                event(
                    new BEMasterlist(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've removed a qr reader assignment. ID#$qr_reader_id"], 200);
        });
    }

    /**
     * Summary of remove_qr_reader
     * @param Request $request
     * @param int $qr_reader_id
     */
    public function remove_qr_reader (Request $request, int $qr_reader_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $qr_reader_id) {
            $this_qr_reader = QrReaderLocation::where('id', $qr_reader_id)
                ->withCount([
                    'hasData'
                ])
                ->first();

            if($this_qr_reader->has_data_count > 0) {
                return response()->json(['message' => "Can't remove qr reader. It already has connected data."], status: 409);
            } else {
                $this_qr_reader->delete();

                AuditHelper::log($request->user()->id, "Removed a qr reader. ID#$qr_reader_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEMasterlist(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a qr reader. ID#$qr_reader_id"], 200);
            }
        });
    }
}
