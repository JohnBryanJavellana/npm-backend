<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Jobs\SendingEmail;
use App\Mail\CashierEmail;
use App\Models\CashierOR;
use App\Models\Credit;
use App\Models\DormitoryInvoice;
use App\Models\EnrollmentInvoice;
use App\Models\LibraryInvoice;
use App\Models\User;
use App\Utils\Notifications;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Utils\{
    TransactionUtil,
    AuditHelper
};
use App\Events\{
    BeDormitory,
    BEInvoice,
    BEAuditTrail
};
use App\Http\Requests\Admin\Cashier\{
    CreateOrUpdateCharge,
    CreateOrUpdateFeeCategory,
    CreateOrUpdateOR
};
use App\Models\{
    Charge,
    ChargeCategory
};

class Cashier extends Controller
{
    protected function getTable(string $service, ?int $referenceId, ?array $whereIns) {
        $modelMap = [
            'DORMITORY'  => DormitoryInvoice::class,
            'ENROLLMENT' => EnrollmentInvoice::class,
            'LIBRARY'    => LibraryInvoice::class,
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

    public function get_payments (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $payments = self::getTable($request->service, null, ['invoice_status' => $request->statuses]);
            $relations = ['payee', 'orNumber'];

            if($request->service === "LIBRARY") {
                $relations = array_merge($relations, [
                    'selectedBooks',
                    'selectedBooks.bookReservation',
                    'selectedBooks.bookReservation.book',
                    'selectedBooks.bookReservation.books',
                    'selectedBooks.bookReservation.books.catalog'
                ]);
            }

            $paymentsData = $payments->with($relations)->orderBy('created_at', 'DESC')->get();
            return response()->json(['payments' => $paymentsData], 200);
        });
    }

    public function pay_walkin (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            // update main table
            $this_payment = self::getTable($request->service, $request->documentId, null)->first();
            $checkForCreditsUsed = User::where('id', $request->userId)
                ->where('credit_amount', '>=', $request->usedCredits)
                ->lockForUpdate()
                ->first();

            if(!$checkForCreditsUsed) {
                return response()->json(['message' => "Insufficient credits to complete this transaction."], 400);
            }

            $this_payment->invoice_status = "PAID";
            $this_payment->credit_deduction = $request->usedCredits;
            $this_payment->received_amount = $request->receivedAmount;
            $this_payment->cashier_o_r_id = $request->orNumber;
            $this_payment->payment_type = 'WALK-IN';
            $this_payment->datePaid = Carbon::now();
            $this_payment->save();

            if($request->usedCredits > 0) {
                $checkForCreditsUsed->credit_amount -= $request->usedCredits;
                $checkForCreditsUsed->save();

                $new_credit_deduction = new Credit();
                $new_credit_deduction->user_id = $request->userId;
                $new_credit_deduction->reference_number = $this_payment->trace_number;
                $new_credit_deduction->reason = config('creditReason.deduct.0');
                $new_credit_deduction->type = "DEDUCT";
                $new_credit_deduction->amount = $request->usedCredits;
                $new_credit_deduction->save();
            }

            if($request->orNumber) {
                $this_or_parent = CashierOR::find($request->orNumber);
                $this_or_parent->status = "UNAVAILABLE";
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

    public function create_or_update_charge (CreateOrUpdateCharge $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_training_fee = $request->httpMethod === "POST"
                ? new Charge
                : Charge::find($request->documentId);

            $this_training_fee->charge_category_id = $request->category;
            $this_training_fee->name = $request->name;
            $this_training_fee->amount = $request->amount;
            $this_training_fee->description = $request->description;
            $this_training_fee->service_type = $request->serviceType;
            if($request->status) $this_training_fee->status = $request->status;
            $this_training_fee->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a training fee. ID#" . $this_training_fee->id);

            if(env('USE_EVENT')) {
                event(
                    new BEInvoice(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a training fee. ID#" . $this_training_fee->id], 201);
        });
    }

    public function remove_charge (Request $request, int $chargeId) {
        return TransactionUtil::transact(null, [], function() use ($request, $chargeId) {
            $this_fee = Charge::withCount(['module' => function($query) {
                return $query->whereHas('schedules', function ($schedulesQuery) {
                    return $schedulesQuery->whereHas('hasData');
                });
            }])->where('id', $chargeId)->first();

            if($this_fee->module_count > 0) {
                return response()->json(['message' => "Can't remove training fee. It already has connected data."], 200);
            } else {
                $this_fee->delete();
                AuditHelper::log($request->user()->id, "Removed a training fee. ID#$chargeId");

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' => "You've removed a training fee. ID#$chargeId"], 200);
            }
        });
    }

    public function get_charges_category (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request)  {
            $categories = ChargeCategory::withCount(['hasData'])->get();
            return response()->json(['categories' => $categories], 200);
        });
    }

    public function create_or_update_charge_category (CreateOrUpdateFeeCategory $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $fee_category = $request->httpMethod === "POST"
                ? new ChargeCategory()
                : ChargeCategory::find($request->documentId);

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

    public function remove_charge_category (Request $request, int $fee_category_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $fee_category_id) {
            $this_fee = ChargeCategory::withCount(['hasData'])->where('id', $fee_category_id)->first();

            if($this_fee->has_data_count > 0) {
                return response()->json(['message' => "Can't remove fee category. It already has connected data."], 200);
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

    public function verify_payment (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $this_payment = self::getTable($request->service, $request->documentId, null);
            $this_fee = $this_payment->lockForUpdate()->first();

            if(in_array($this_fee->invoice_status, ["CANCELLED", "PAID"])) {
                return response()->json(['message' => "Can't update payment."], 200);
            } else {
                $this_fee->invoice_status = $request->verificationStatus;
                $this_fee->save();

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

    public function get_or_numbers (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $orNumbersTemp = CashierOR::withCount(['connectionInLibrary', 'connectionInDormitory', 'connectionInEnrollment']);

            if($request->service) {
                $orNumbersTemp->where([
                    "service_type" => $request->service,
                    'status' => "AVAILABLE"
                ]);
            }

            $orNumbers = $orNumbersTemp->get();
            return response()->json(['orNumbers' => $orNumbers], 200);
        });
    }

    public function create_or_update_or_number (CreateOrUpdateOR $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $this_or = $request->httpMethod === "POST"
                ? new CashierOR()
                : CashierOR::find($request->documentId);

            $this_or->name = $request->name;
            $this_or->service_type = $request->service;
            $this_or->save();

            AuditHelper::log($request->user()->id,($request->httpMethod === "POST" ? 'Created' : 'Updated') . " an OR Number. ID#" . $this_or->id);

            if(env('USE_EVENT')) {
                event(
                    new BEInvoice(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " an OR Number. ID#" . $this_or->id], 201);
        });
    }

    public function remove_or_number (Request $request, int $orNumber) {
        return TransactionUtil::transact(null, [], function() use ($request, $orNumber) {
            $this_or = CashierOR::withCount(['connectionInLibrary', 'connectionInDormitory', 'connectionInEnrollment'])->where('id', $orNumber)->first();

            if($this_or->connection_in_library_count > 0 || $this_or->connection_in_dormitory_count > 0 || $this_or->connection_in_enrollment_count > 0 || $this_or->status === "UNAVAILABLE") {
                return response()->json(['message' => "Can't remove OR Number. It already has connected data."], 200);
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
