<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Jobs\SendingEmail;
use App\Mail\CashierEmail;
use App\Models\BookRes;
use App\Models\CashierOR;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryTenant;
use App\Models\EnrolledCourse;
use App\Models\EnrollmentInvoice;
use App\Models\LibraryInvoice;
use App\Models\RAInvoices;
use App\Models\RARequestInfo;
use App\Models\User;
use App\Utils\Notifications;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Utils\{
    TransactionUtil,
    AuditHelper
};
use App\Events\{
    BEInvoice,
    BEAuditTrail
};
use App\Enums\Administrator\{
    CashierEnum,
};
use App\Enums\{
    NotificationEnum
};
use App\Http\Requests\Admin\Cashier\{
    CreateOrUpdateFeeCategory,
    CreateOrUpdateOR
};
use App\Models\{
    Charge,
    ChargeCategory
};
use App\Helpers\Administrator\General\CheckForDocumentExistence;

class Cashier extends Controller
{
    /**
     * Summary of getTable
     * @param string $service
     * @param mixed $referenceId
     * @param mixed $whereIns
     * @param bool $isMainTable
     * @param bool $isInitialTable
     * @throws \InvalidArgumentException
     */
    protected function getTable(string $service, ?int $referenceId, ?array $whereIns, bool $isMainTable = false, bool $isInitialTable = false) {
        $modelMap = [
            NotificationEnum::DORMITORY->value       => $isMainTable || $isInitialTable ? DormitoryTenant::class : DormitoryInvoice::class,
            NotificationEnum::ENROLLMENT->value      => $isMainTable || $isInitialTable ? EnrolledCourse::class : EnrollmentInvoice::class,
            NotificationEnum::LIBRARY->value         => $isMainTable || $isInitialTable ? BookRes::class : LibraryInvoice::class,
            NotificationEnum::RECREATIONAL->value    => $isMainTable || $isInitialTable ? RARequestInfo::class : RAInvoices::class,
        ];

        if (!array_key_exists($service, $modelMap)) {
            throw new \InvalidArgumentException("Invalid service type: $service", 500);
        }

        $query = $modelMap[$service]::query();

        if ($referenceId) {
            $query->where('id', $referenceId);
        }

        if(!is_null($whereIns)) {
            foreach ($whereIns as $column => $values) {
                if (!empty($values)) {
                    $query->whereIn($column, $values);
                }
            }
        }

        return $query;
    }

    public function get_charges (Request $request) {
        return TransactionUtil::transact(null, [], function() use($request)  {
            $charges = Charge::with('chargeCategory')->get();
            return response()->json(['charges' => $charges], 200);
        });
    }

    public function get_charges_predata (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            return response()->json([
                'categories' => json_decode($this->get_charges_category($request)->getContent(), true)['categories'],
            ], 200);
        });
    }

    /**
     * Summary of get_payments
     * @param Request $request
     */
    public function get_payments (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $payments = self::getTable($request->service, null, ['invoice_status' => $request->statuses]);
            $relations = ['payee', 'orNumber'];

            if($request->service === NotificationEnum::LIBRARY->value) {
                $relations = array_merge($relations, [
                    'bookRes',
                    'selectedBooks',
                    'selectedBooks.bookReservation',
                    'selectedBooks.bookReservation.book',
                    'selectedBooks.bookReservation.books',
                    'selectedBooks.bookReservation.books.catalog'
                ]);
            }

            if($request->service === NotificationEnum::ENROLLMENT->value) {
                $relations = array_merge($relations, [
                    'training'
                ]);
            }

            if($request->service === NotificationEnum::DORMITORY->value) {
                $relations = array_merge($relations, [
                    'payee'
                ]);
            }

            if($request->service === NotificationEnum::RECREATIONAL->value) {
                $relations = array_merge($relations, [
                    'requestor'
                ]);
            }

            $paymentsData = $payments->with($relations)->orderBy('created_at', 'DESC')->get();
            return response()->json(['payments' => $paymentsData], 200);
        });
    }

    /**
     * Summary of pay_walkin
     * @param Request $request
     */
    public function pay_walkin (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $this_payment = self::getTable($request->service, $request->documentId, null)->first();
            if($request->isInitial) {
                $this_main_table = self::getTable($request->service, $request->mainTable, null, true, true)->first();

                switch($request->service) {
                    case NotificationEnum::DORMITORY->value:
                        $this_main_table->tenant_status = CashierEnum::PAID;
                        break;

                    case NotificationEnum::ENROLLMENT->value:
                        $this_main_table->enrolled_course_status = CashierEnum::PAID;
                        break;

                    default: break;
                }

                $this_main_table->save();
            }

            $this_payment->invoice_status = CashierEnum::PAID;
            $this_payment->received_amount = $request->receivedAmount;
            $this_payment->cashier_o_r_id = $request->orNumber;
            $this_payment->payment_type = CashierEnum::WALK_IN;
            $this_payment->datePaid = Carbon::now();
            $this_payment->save();

            if($request->orNumber) {
                $this_or_parent = CashierOR::find($request->orNumber);
                $this_or_parent->status = CashierEnum::UNAVAILABLE;
                $this_or_parent->save();
            }

            SendingEmail::dispatch(User::find($this_payment->user_id), new CashierEmail([
                'status' => $request->verificationStatus,
                'service' => strtolower($request->service),
                'message' => "We've successfully processed a walk-in payment for your " . strtolower($request->service) . " request."
            ], User::find($this_payment->user_id)));

            Notifications::notify($request->user()->id, $this_payment->user_id, $request->service, "processed a walk-in payment for you.");
            AuditHelper::log($request->user()->id, "Processed a walk-in payment. ID# $this_payment->id");

            if(env('USE_EVENT')) {
                event(
                    new BEInvoice(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've processed a walk-in payment."], 201);
        });
    }

    /**
     * Summary of get_charges_category
     * @param Request $request
     */
    public function get_charges_category (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request)  {
            $categories = ChargeCategory::withCount(['hasData'])->get();
            return response()->json(['categories' => $categories], 200);
        });
    }

    /**
     * Summary of create_or_update_charge_category
     * @param CreateOrUpdateFeeCategory $request
     */
    public function create_or_update_charge_category (CreateOrUpdateFeeCategory $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                ChargeCategory::class,
                ['name' => $request->name],
                !$isPost,
                $documentId,
                'id',
                "Charge Category already exist."
            );

            if($check) return $check;

            $fee_category = $isPost ? new ChargeCategory() : ChargeCategory::find($request->documentId);
            $fee_category->name = $request->name;
            $fee_category->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a fee category. ID#" . $fee_category->id);

            if(env('USE_EVENT')) {
                event(
                    new BEInvoice(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a fee category. ID#" . $fee_category->id], 201);
        });
    }

    /**
     * Summary of remove_charge_category
     * @param Request $request
     * @param int $fee_category_id
     */
    public function remove_charge_category (Request $request, int $fee_category_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $fee_category_id) {
            $this_fee = ChargeCategory::withCount(['hasData'])->where('id', $fee_category_id)->first();

            if($this_fee->has_data_count > 0) {
                return response()->json(['message' => "Can't remove fee category. It already has connected data."], 409);
            } else {
                $this_fee->delete();
                AuditHelper::log($request->user()->id, "Removed a fee category. ID#$fee_category_id");

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've removed a fee category. ID#$fee_category_id"], 200);
            }
        });
    }

    /**
     * Summary of verify_payment
     * @param Request $request
     */
    public function verify_payment (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $this_payment = self::getTable($request->service, $request->documentId, null);
            $this_fee = $this_payment->lockForUpdate()->first();

            if(in_array($this_fee->invoice_status, [CashierEnum::CANCELLED->value, CashierEnum::PAID->value])) {
                return response()->json(['message' => "Can't update payment."], 200);
            } else {
                $this_fee->invoice_status = $request->verificationStatus;
                $this_fee->save();

                if($request->isInitial) {
                    $this_main_table = self::getTable($request->service, $request->mainTable, null, true, true)->first();

                    switch($request->service) {
                        case NotificationEnum::DORMITORY->value:
                            $this_main_table->tenant_status = CashierEnum::PAID;
                            break;

                        case NotificationEnum::ENROLLMENT->value:
                            $this_main_table->enrolled_course_status = CashierEnum::PAID;
                            break;

                        default: break;
                    }

                    $this_main_table->save();
                }

                SendingEmail::dispatch(User::find($this_fee->user_id), new CashierEmail([
                    'status' => $request->verificationStatus,
                    'service' => strtolower($request->service),
                    'message' => "We've updated your " . strtolower($request->service) . " invoice status to $request->verificationStatus"
                ], User::find($this_fee->user_id)));

                Notifications::notify($request->user()->id, $this_fee->user_id, $request->service, "updated your " . strtolower($request->service) . " invoice status.");
                AuditHelper::log($request->user()->id, "Updated a payment. ID#$$this_fee->id");

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've updated a payment. ID#$$this_fee->id"], 200);
            }
        });
    }

    /**
     * Summary of get_or_numbers
     * @param Request $request
     */
    public function get_or_numbers (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $orNumbersTemp = CashierOR::withCount(['connectionInLibrary', 'connectionInDormitory', 'connectionInEnrollment']);

            if($request->service) {
                $orNumbersTemp->where([
                    "service_type" => $request->service,
                    'status' => CashierEnum::AVAILABLE
                ]);
            }

            $orNumbers = $orNumbersTemp->get();
            return response()->json(['orNumbers' => $orNumbers], 200);
        });
    }

    /**
     * Summary of create_or_update_or_number
     * @param CreateOrUpdateOR $request
     */
    public function create_or_update_or_number (CreateOrUpdateOR $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                CashierOR::class,
                ['name' => $request->name, 'service_type' => $request->service],
                !$isPost,
                $documentId,
                'id',
                "The OR Number '{$request->name}' is already assigned to this service type."
            );

            if($check) return $check;

            $this_or = $isPost ? new CashierOR() : CashierOR::findOrFail($documentId);
            $this_or->name = $request->name;
            $this_or->service_type = $request->service;
            $this_or->save();

            AuditHelper::log(
                $request->user()->id,
                ($isPost ? 'Created' : 'Updated') . " OR Number ID# " . $this_or->id
            );

            if (env('USE_EVENT')) {
                event(new BEInvoice(''), new BEAuditTrail(''));
            }

            return response()->json(['success' => true, 'message' => "OR Number successfully saved."], 200);
        });
    }

    /**
     * Summary of remove_or_number
     * @param Request $request
     * @param int $orNumber
     */
    public function remove_or_number (Request $request, int $orNumber) {
        return TransactionUtil::transact(null, [], function() use ($request, $orNumber) {
            $this_or = CashierOR::withCount(['connectionInLibrary', 'connectionInDormitory', 'connectionInEnrollment'])->where('id', $orNumber)->first();

            if($this_or->connection_in_library_count > 0 || $this_or->connection_in_dormitory_count > 0 || $this_or->connection_in_enrollment_count > 0 || $this_or->status === "UNAVAILABLE") {
                return response()->json(['message' => "Can't remove OR Number. It already has connected data."], 409);
            } else {
                $this_or->delete();
                AuditHelper::log($request->user()->id, "Removed an OR Number. ID#$orNumber");

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've removed an OR Number. ID#$orNumber"], 200);
            }
        });
    }
}
