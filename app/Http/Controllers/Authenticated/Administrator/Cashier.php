<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\{
    BeDormitory,
    BEInvoice
};
use App\Models\{
    EnrolledCourse,
    Training,
    TrainingSchedule,
    EnrollmentInvoice,
    DormitoryTenant,
    DormitoryInvoice,
    DormitoryTenantHistory,
    DormitoryRoom,
    AuditTrail
};

class Cashier extends Controller
{
    public function get_invoices (Request $request) {
        $enrollmentInvoices = EnrollmentInvoice::with([
                'training.trainee',
                'training.trainee.additional_trainee_info.general_info',
                'training.trainee.additional_trainee_info.contact',
                'training.trainee.additional_trainee_info.trainee_registration_file',
                'training.trainee.additional_trainee_info.educational_attainment.main_course',
                'training.trainee.additional_trainee_info.educational_attainment.main_school',
                'training.trainee.additional_trainee_info.latest_shipboard_attainment',
                'training.training_schedule',
                'training.training.module',
                'training.training.moduleType',
                'training.training.training_id_fee',
                'training.training.training_id_fee_id',
                'training.training.training_miscellaneous_fee',
                'training.training.training_ctc_fee',
                'training.training.training_assessment_fee',
            ])->selectRaw("*, 'EI' AS invoice_for")->get()
            ->map(function ($invoice) {
                return [
                    'payor' => $invoice->training->trainee,
                    'invoice_for' => 'EI',
                    'invoice' => $invoice
                ];
            });

        $dormitoryInvoices = DormitoryInvoice::with([
            'trainee',
            'room',
            'tenant',
            'trainee.additional_trainee_info.general_info',
            'trainee.additional_trainee_info.contact',
            'trainee.additional_trainee_info.trainee_registration_file',
            'trainee.additional_trainee_info.educational_attainment.main_course',
            'trainee.additional_trainee_info.educational_attainment.main_school',
            'trainee.additional_trainee_info.latest_shipboard_attainment',
        ])->selectRaw("*, 'DI' AS invoice_for")->get()
            ->map(function ($invoice) {
                return [
                    'payor' => $invoice->trainee,
                    'invoice_for' => 'DI',
                    'invoice' => $invoice
                ];
            });

        $invoices = collect(array_merge($enrollmentInvoices->toArray(), $dormitoryInvoices->toArray()))
            ->where('invoice.invoice_status', $request->invoiceStatus)
            ->groupBy($request->groupByTraceNumber ? 'invoice.trace_number' : 'invoice.id');

        $invoices = $invoices->map(function ($group) {
            return [
                'trainee' => $group->first()['payor'],
                'traceNumber' => $group->first()['invoice']['trace_number'],
                'refNumber' => $group->first()['invoice']['invoice_reference'],
                'for' => $group->first()['invoice_for'],
                'type' => $group->first()['invoice']['payment_type'],
                'sum' => $group->sum('invoice.invoice_amount'),
                'invoices' => $group->map(function ($invoice) {
                    return [
                        'invoice' => $invoice['invoice'],
                    ];
                }),
            ];
        })->values();

        return response()->json(['invoices' => $invoices], 200);
    }

    public function update_payment_status (Request $request) {
        $validations = [
            'status' => 'required|string',
            'for' => 'required|string',
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            $errors = $validator->messages()->all();
            return response()->json(['message' => implode(', ', $errors)], 422);
        } else {
            try {
                DB::beginTransaction();

                $this_invoice = $request->for === 'EI'
                    ? EnrollmentInvoice::where('invoice_reference', $request->documentId)->get()
                    : DormitoryInvoice::where('invoice_reference', $request->documentId)->get();

                foreach($this_invoice as $invoice) {
                    if($request->for === 'EI') {
                        $inv = EnrollmentInvoice::find($invoice->id);
                        $inv->invoice_status = $request->status;
                        $inv->save();

                        $this_training = EnrolledCourse::find($invoice->enrolled_course_id);
                        $this_training->enrolled_course_status = "ENROLLED";
                        $this_training->save();

                        $this_training_schedule = TrainingSchedule::find($this_training->training_schedule_id);
                        $this_training_schedule->training_schedule_slot -= 1;
                        $this_training_schedule->save();
                    } else {
                        $inv = DormitoryInvoice::find($invoice->id);
                        $inv->invoice_status = $request->status;
                        $inv->save();

                        $inv2 = DormitoryTenant::find($inv->dormitory_tenant_id);
                        $inv2->tenant_status = "PAID";
                        $inv2->save();

                        $dormitory_tenant_history = new DormitoryTenantHistory;
                        $dormitory_tenant_history->dormitory_tenant_id = $inv2->id;
                        $dormitory_tenant_history->history_reason = "Payment verified. Transaction Reference: " . $inv->invoice_reference;
                        $dormitory_tenant_history->save();
                    }
                }

                $new_log = new AuditTrail;
                $new_log->user_id = $request->user()->id;
                $new_log->actions = "User has updated a " . ($request->for === 'EI' ? 'training' : 'dormitory') . " payment status.";
                $new_log->save();

                if(env('USE_EVENT')) {
                    event(
                        new BEDormitory(''),
                        new BEInvoice('')
                    );
                }

                DB::commit();
                return response()->json(['message' => "You've updated a " . ($request->for === 'EI' ? 'training' : 'dormitory') . " payment status."], 201);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }
}
