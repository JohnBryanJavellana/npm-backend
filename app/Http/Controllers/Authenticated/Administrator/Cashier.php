<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Enums\Administrator\DormitoryEnum;
use App\Enums\Administrator\EnrollmentEnum;
use App\Enums\Administrator\LibraryEnum;
use App\Http\Controllers\Controller;
use App\Jobs\AutoPrint;
use App\Jobs\SendingEmail;
use App\Mail\CashierEmail;
use App\Models\BookRes;
use App\Models\CashierOR;
use App\Models\DormitoryInclusionRequest;
use App\Models\DormitoryInvoice;
use App\Models\DormitoryReqService;
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
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};

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
    protected function getTable(string $service, ?int $referenceId, ?array $whereIns) {
        $modelMap = [
            'ENROLLMENT' => EnrollmentInvoice::class,
            'ENROLLMENT-MAIN-TABLE' => EnrolledCourse::class,
            'RECREATIONAL' => RAInvoices::class,
            'RECREATIONAL-MAIN-TABLE' => RARequestInfo::class,
            'LIBRARY' => LibraryInvoice::class,
            'LIBRARY-MAIN-TABLE' => BookRes::class,
            'DORMITORY' => DormitoryInvoice::class,
            'DORMITORY-MAIN-TABLE' => DormitoryTenant::class,
            'DORMITORY-SERVICE' => DormitoryInvoice::class,
            'DORMITORY-SERVICE-MAIN-TABLE' => DormitoryReqService::class
        ];

        $query = $modelMap[$service]::query();

        if ($referenceId) {
            $query->where('id', $referenceId);
        }

        if($whereIns !== null) {
            foreach ($whereIns as $column => $values) {
                if (!empty($values)) {
                    $query->whereIn($column, $values);
                }
            }
        }

        return $query;
    }

    /**
     * Summary of get_charges
     * @param Request $request
     */
    public function get_charges (Request $request) {
        return TransactionUtil::transact(null, [], function() use($request)  {
            $charges = Charge::with('chargeCategory')->get();
            return response()->json(['charges' => $charges], 200);
        });
    }

    /**
     * Summary of get_charges_predata
     * @param Request $request
     */
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
                $relations = [
                    ...$relations,
                    'bookRes',
                    'selectedBooks',
                    'selectedBooks.bookReservation',
                    'selectedBooks.bookReservation.book',
                    'selectedBooks.bookReservation.books',
                    'selectedBooks.bookReservation.books.catalog'
                ];
            }

            if($request->service === NotificationEnum::ENROLLMENT->value) {
                $relations = [
                    ...$relations,
                    'training'
                ];
            }

            $paymentsData = $payments->with($relations)->orderBy('created_at', 'DESC');

            if($request->limitter) $paymentsData->take($request->limitter);
            $paymentsData = $paymentsData ->get();

            return response()->json(['payments' => $paymentsData], 200);
        });
    }

    /**
     * Summary of pay_walkin
     * @param Request $request
     */
    public function pay_walkin (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            // update payment record
            $this_payment = self::getTable($request->service, $request->documentId, null)->lockForUpdate()->first();

            // if the payment is already paid or cancelled, return error response
            if($request->orNumber) {
                $this_or_parent = CashierOR::where('id', $request->orNumber)->lockForUpdate()->first();
                $this_or_parent->status = CashierEnum::UNAVAILABLE;
                $this_or_parent->save();
            }

            $this_payment->invoice_status = CashierEnum::PAID;
            $this_payment->received_amount = $request->receivedAmount;
            $this_payment->cashier_o_r_id = $request->orNumber;
            $this_payment->payment_type = CashierEnum::WALK_IN;
            $this_payment->datePaid = Carbon::now();
            $this_payment->save();

            // if the payment is for dormitory or library or enrollment, update the main table status to PAID
            if(\in_array($request->service, ["DORMITORY-SERVICE", "DORMITORY-INCLUSION"])) {
                $this_reference_table = $request->service === "DORMITORY-SERVICE"
                    ? DormitoryReqService::where('dormitory_invoice_id', $this_payment->id)->lockForUpdate()->first()
                    : DormitoryInclusionRequest::where('dormitory_invoice_id', $this_payment->id)->lockForUpdate()->first();

                $this_main_table = self::getTable("$request->service-MAIN-TABLE", $this_reference_table->id, null)->lockForUpdate()->first();
                $this_main_table->status = DormitoryEnum::PAID;
                $this_main_table->save();
            }

            if($request->service === "LIBRARY") {
                $this_main_table = self::getTable("LIBRARY-MAIN-TABLE", $this_payment->book_res_id, null)->lockForUpdate()->first();

                if(\in_array($this_main_table->status, [LibraryEnum::PROCESSING_PAYMENT->value, LibraryEnum::FOR_PAYMENT->value])) {
                    $this_main_table->status = LibraryEnum::PAID;
                    $this_main_table->save();
                }
            }

            if($request->service === "ENROLLMENT") {
                $this_main_table = self::getTable("ENROLLMENT-MAIN-TABLE", $this_payment->enrolled_course_id, null)->lockForUpdate()->first();

                if(\in_array($this_main_table->enrolled_course_status, [EnrollmentEnum::PROCESSING_PAYMENT->value, EnrollmentEnum::FOR_PAYMENT->value])) {
                    $this_main_table->enrolled_course_status = EnrollmentEnum::PAID;
                    $this_main_table->save();
                }
            }

            if($request->service === "DORMITORY") {
                $this_main_table = self::getTable("DORMITORY-MAIN-TABLE", $this_payment->dormitory_tenant_id, null)->lockForUpdate()->first();

                if(\in_array($this_main_table->tenant_status, [DormitoryEnum::PROCESSING_PAYMENT->value, DormitoryEnum::FOR_PAYMENT->value])) {
                    $this_main_table->tenant_status = DormitoryEnum::PAID;
                    $this_main_table->save();
                }
            }

            // if the payment is for dormitory service, update the service request status to PAID
            SendingEmail::dispatch(User::find($this_payment->user_id), new CashierEmail([
                'status' => $request->verificationStatus,
                'service' => strtolower($request->service),
                'message' => "We've successfully processed a walk-in payment for your " . strtolower($request->service) . " request."
            ], User::find($this_payment->user_id)));

            Notifications::notify($request->user()->id, $this_payment->user_id, $request->service, "processed a walk-in payment for you.");
            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::CASHIERCTRL_PROCESSED_WALKIN->value . " ID# $this_payment->id"
            );

            // dispatch auto print job
            return response()->json(['message' => AdministratorReturnResponse::CASHIERCTRL_PAY_WALKIN->value], 201);
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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
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

            AuditHelper::log(
                $request->user()->id,
                $request->httpMethod === "POST" ? AdministratorAuditActions::CASHIERCTRL_CREATED_CHARGECATEGORY->value : AdministratorAuditActions::CASHIERCTRL_UPDATED_CHARGECATEGORY->value . " ID#$fee_category->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BEInvoice(''),
                    new BEAuditTrail('')
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::CASHIERCTRL_CREATED_CHARGECATEGORY->value : AdministratorReturnResponse::CASHIERCTRL_UPDATED_CHARGECATEGORY->value) . " ID#$fee_category->id"], 201);
        });
    }

    /**
     * Summary of remove_charge_category
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     * @param int $fee_category_id
     */
    public function remove_charge_category (Request $request, int $fee_category_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $fee_category_id) {
            $this_fee = ChargeCategory::withCount(['hasData'])->where('id', $fee_category_id)->first();

            if($this_fee->has_data_count > 0) {
                return response()->json(['message' => AdministratorReturnResponse::CASHIERCTRL_ERR_CHARGECATEGORY->value], 409);
            } else {
                $this_fee->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::CASHIERCTRL_REMOVED_CHARGECATEGORY->value . " ID#$fee_category_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' =>  AdministratorReturnResponse::CASHIERCTRL_REMOVED_CHARGECATEGORY->value . "ID#$fee_category_id"], 200);
            }
        });
    }

    /**
     * Summary of verify_payment
     * @param bool notifications === FALSE
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     */
    public function verify_payment (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $this_payment = self::getTable($request->service, $request->documentId, null);
            $this_fee = $this_payment->lockForUpdate()->first();

            if(\in_array($this_fee->invoice_status, [CashierEnum::CANCELLED->value, CashierEnum::PAID->value])) {
                return response()->json(['message' => AdministratorReturnResponse::CASHIERCTRL_ERR_PAYMENT->value], 200);
            } else {
                $this_fee->invoice_status = $request->verificationStatus;
                $this_fee->save();

                $this_main_table = null;
                if($request->service === "DORMITORY") {
                    $this_main_table = self::getTable($request->service, $this_fee->dormitory_tenant_id, null, true, false)->first();
                    $this_main_table->tenant_status = CashierEnum::PAID;
                } else if($request->service === "ENROLLMENT") {
                    $this_main_table = self::getTable($request->service, $this_fee->enrolled_course_id, null, true, false)->first();
                    $this_main_table->enrolled_course_status = CashierEnum::PAID;
                }

                $this_main_table->save();

                SendingEmail::dispatch(User::find($this_fee->user_id), new CashierEmail([
                    'status' => $request->verificationStatus,
                    'service' => strtolower($request->service),
                    'message' => "We've updated your " . strtolower($request->service) . " invoice status to $request->verificationStatus"
                ], User::find($this_fee->user_id)));

                Notifications::notify($request->user()->id, $this_fee->user_id, $request->service, "updated your " . strtolower($request->service) . " invoice status.");
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::CASHIERCTRL_UPDATED_PAYMENT->value. " ID#$this_fee->id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' =>  AdministratorReturnResponse::CASHIERCTRL_UPDATED_PAYMENT->value . "ID#$this_fee->id"], 200);
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
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
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
                $isPost ? AdministratorAuditActions::CASHIERCTRL_CREATED_ORNUMBER->value : AdministratorAuditActions::CASHIERCTRL_UPDATED_ORNUMBER->value . " ID#$this_or->id"
            );

            if (env('USE_EVENT')) {
                event(new BEInvoice(''), new BEAuditTrail(''));
            }

            return response()->json(['success' => true, 'message' => ($isPost ? AdministratorReturnResponse::CASHIERCTRL_CREATED_ORNUMBER->value : AdministratorReturnResponse::CASHIERCTRL_UPDATED_ORNUMBER->value) . "ID#$this_or->id"], 200);
        });
    }

    /**
     * Summary of remove_or_number
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === TRUE
     * @param Request $request
     * @param int $orNumber
     */
    public function remove_or_number (Request $request, int $orNumber) {
        return TransactionUtil::transact(null, [], function() use ($request, $orNumber) {
            $this_or = CashierOR::withCount(['connectionInLibrary', 'connectionInDormitory', 'connectionInEnrollment'])->where('id', $orNumber)->first();

            if($this_or->connection_in_library_count > 0 || $this_or->connection_in_dormitory_count > 0 || $this_or->connection_in_enrollment_count > 0 || $this_or->status === "UNAVAILABLE") {
                return response()->json(['message' => AdministratorReturnResponse::CASHIERCTRL_ERR_ORNUMBER->value], 409);
            } else {
                $this_or->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::CASHIERCTRL_REMOVED_ORNUMBER->value . " ID#$orNumber"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BEInvoice(''),
                        new BEAuditTrail('')
                    );
                }
                return response()->json(['message' =>  AdministratorReturnResponse::CASHIERCTRL_REMOVED_ORNUMBER->value . "ID#$orNumber"], 200);
            }
        });
    }
        //edrascoe
    /**
     * Summary of get_all_paid_payments
    * @param Request $request
    */
    public function get_all_paid_payments(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {

            $services = [
                NotificationEnum::ENROLLMENT->value,
                NotificationEnum::DORMITORY->value,
                NotificationEnum::LIBRARY->value,
                NotificationEnum::RECREATIONAL->value,
            ];

            $allStatuses = [
                CashierEnum::PAID->value,
                CashierEnum::PENDING->value,
                CashierEnum::FOR_VERIFICATION->value,
                CashierEnum::DECLINED->value,
                CashierEnum::CANCELLED->value,
                CashierEnum::FOR_PAYMENT->value,
                CashierEnum::UNAVAILABLE->value,
            ];

            $allPaidPayments = [];
            $flaggedIssues   = [];
            $grandTotalPaid  = 0;
            $paidSummary     = [];
            $invoiceStatusReport = [];
            $paymentTypeReport = [];
            $serviceStatusReport = [];
            $servicePaymentTypeReport = [];

            foreach ($services as $service) {

                $baseRelations = ['payee', 'orNumber'];

                if ($service === NotificationEnum::LIBRARY->value) {
                    $baseRelations = [
                        ...$baseRelations,
                        'bookRes',
                        'selectedBooks',
                        'selectedBooks.bookReservation',
                        'selectedBooks.bookReservation.book',
                        'selectedBooks.bookReservation.books',
                        'selectedBooks.bookReservation.books.catalog',
                    ];
                }

                if ($service === NotificationEnum::ENROLLMENT->value) {
                    $baseRelations = [
                        ...$baseRelations,
                        'training',
                    ];
                }

                $paymentsByStatus = [];

                foreach ($allStatuses as $status) {

                    $payments = self::getTable($service, null, [
                        'invoice_status' => [$status],
                    ])
                    ->with($baseRelations)
                    ->orderBy('datePaid', 'DESC')
                    ->get();

                    $seenTraceNumbers = [];
                    $totalPerPayee    = [];
                    $statusCount = $payments->count();

                    if (!isset($invoiceStatusReport[$status])) {
                        $invoiceStatusReport[$status] = 0;
                    }

                    $invoiceStatusReport[$status] += $statusCount;

                    if (!isset($serviceStatusReport[$service])) {
                        $serviceStatusReport[$service] = [];
                    }

                    $serviceStatusReport[$service][$status] = $statusCount;
                    $paymentTypes = $payments->groupBy('payment_type');

                    foreach ($paymentTypes as $type => $items) {
                        if (empty($type)) continue;
                        if (!isset($paymentTypeReport[$type])) {
                            $paymentTypeReport[$type] = 0;
                        }
                        $paymentTypeReport[$type] += $items->count();
                        if (!isset($servicePaymentTypeReport[$service])) {
                            $servicePaymentTypeReport[$service] = [];
                        }
                        if (!isset($servicePaymentTypeReport[$service][$type])) {
                            $servicePaymentTypeReport[$service][$type] = 0;
                        }
                        $servicePaymentTypeReport[$service][$type] += $items->count();
                    }
                    if ($status === CashierEnum::PAID->value) {
                        foreach ($payments as $payment) {
                            $payeeId = $payment->payee?->id;
                            if ($payeeId) {
                                if (!isset($totalPerPayee[$payeeId])) {
                                    $totalPerPayee[$payeeId] = [
                                        'payee_id'     => $payeeId,
                                        'full_name'    => $payment->payee?->name ?? 'Unknown',
                                        'total_amount' => 0,
                                    ];
                                }
                                $totalPerPayee[$payeeId]['total_amount'] += $payment->invoice_amount ?? 0;
                            }
                        }
                        $serviceTotalPaid = $payments->sum('invoice_amount');
                        $grandTotalPaid += $serviceTotalPaid;
                        $paidSummary[] = [
                            'service'     => $service,
                            'total_count' => $payments->count(),
                            'total_paid'  => $serviceTotalPaid,
                        ];
                    }
                    $mapped = $payments->map(function ($payment) use ($service, $status, &$flaggedIssues, &$seenTraceNumbers, $totalPerPayee) {

                        $issues   = [];
                        $fullName = $payment->payee?->name ?? 'N/A';

                        if (isset($seenTraceNumbers[$payment->trace_number])) {
                            $issues[] = "Duplicate trace number: {$payment->trace_number}";
                        } else {
                            $seenTraceNumbers[$payment->trace_number] = true;
                        }
                        if (empty($payment->trace_number))
                            $issues[] = "Missing trace number.";

                        if (empty($payment->datePaid))
                            $issues[] = "Missing payment date.";

                        if (empty($payment->invoice_amount) || $payment->invoice_amount <= 0)
                            $issues[] = "Invalid or missing invoice amount.";
                        if (!$payment->payee)
                            $issues[] = "Missing payee information.";
                        if (!$payment->orNumber)
                            $issues[] = "Missing OR number.";
                        if ($service === NotificationEnum::ENROLLMENT->value && !$payment->training) {
                            $issues[] = "Missing training details for enrollment payment.";
                        }
                        if ($service === NotificationEnum::LIBRARY->value && $payment->selectedBooks->isEmpty()) {
                            $issues[] = "Missing selected books for library payment.";
                        }
                        if (!empty($issues)) {
                            $flaggedIssues[] = [
                                'service'      => $service,
                                'status'       => $status,
                                'payment_id'   => $payment->id,
                                'trace_number' => $payment->trace_number ?? 'N/A',
                                'issues'       => $issues,
                            ];
                        }
                        $result = [
                            'service'    => $service,
                            'status'     => $status,
                            'payment'    => $payment,
                            'has_issues' => !empty($issues),
                            'issues'     => $issues,
                        ];
                        if ($status === CashierEnum::PAID->value && $payment->payee?->id) {
                            $result['total_paid'] =
                                $totalPerPayee[$payment->payee->id]['total_amount'] ?? 0;
                        }
                        return $result;
                    });
                    $paymentsByStatus[$status] = [
                        'total'    => $mapped->count(),
                        'payments' => $mapped,
                    ];
                    if ($status === CashierEnum::PAID->value) {
                        $paymentsByStatus[$status]['service_total_paid']
                            = $payments->sum('invoice_amount');
                        $paymentsByStatus[$status]['total_per_payee']
                            = array_values($totalPerPayee);
                    }
                }
                $allPaidPayments[$service] = $paymentsByStatus;
            }
            return response()->json([
                'message' => AdministratorReturnResponse::CASHIERCTRL_ALL_PAID_PAYMENTS->value,
                'paid_summary' => [
                    'breakdown' => $paidSummary,
                    'total'     => $grandTotalPaid,
                ],
                'payments' => $allPaidPayments,
                'flagged_issues' => [
                    'total'   => count($flaggedIssues),
                    'details' => $flaggedIssues,
                ],
                'reports' => [
                    'invoice_status_totals' => $invoiceStatusReport,
                    'payment_type_totals' => $paymentTypeReport,
                    'service_status_breakdown' => $serviceStatusReport,
                    'service_payment_type_breakdown' => $servicePaymentTypeReport,
                ],
            ], 200);
        });
    }
}
