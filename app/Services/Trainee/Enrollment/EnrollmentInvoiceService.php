<?php

namespace App\Services\Trainee\Enrollment;

use App\Enums\RequestStatus;
use App\Models\EnrolledCourse;
use App\Models\EnrollmentInvoice;
use App\Services\Trainee\Credit\CreditService;
use App\Utils\GenerateTrace;
use Carbon\Carbon;
use DomainException;
use Illuminate\Support\Facades\DB;

class EnrollmentInvoiceService {

    private const prefix = "-EAINV-";
    public function __construct(
        protected EnrollmentInvoice $enrollmentInvoiceModel,
        protected CreditService $creditService,
        protected EnrolledCourse $enrolledCourseModel
    ){}

    protected $notAllowedStatuses = [
        RequestStatus::CANCELLED,
        RequestStatus::PAID,
        RequestStatus::FOR_VERIFICATION
    ];

    protected function prepareData($validated){
        $record = $this->enrollmentInvoiceModel->query()
        ->forUser($validated["user_id"])
        ->whereKey($validated["invoice_id"])
        ->lockForUpdate()
        ->first();

        if(!$record) {
            throw new DomainException("Enrollment request is not avaiable.");
        }

        if(in_array($record->invoice_status,$this->notAllowedStatuses)) {
            throw new DomainException("Request cannot be processed, Check enrollment request status.");
        }

        return $record;
    }

    public function updateEnrollmentInvoice($validated)
    {
        return DB::transaction(function() use ($validated){
            $invoiceRecord = $this->prepareData($validated);
            if(isset($validated["credit_amount"]) && $validated["credit_amount"] > 0) {
                if (round($validated["total_amount"], 2) === round($validated["credit_amount"], 2))
                {
                    $invoiceRecord->update([
                        "invoice_reference" => $validated["ref_number"],
                        "invoice_status" => RequestStatus::FOR_VERIFICATION,
                        "payment_type" => 'ONLINE',
                        "credit_deduction" => $validated["credit_amount"],
                        "datePaid" => Carbon::now()
                    ]);

                    $this->enrolledCourseModel->whereKey($validated["enrolled_course_id"])->update([
                        "enrolled_course_status" => RequestStatus::PROCESSING_PAYMENT->value
                    ]);
                }
                $this->creditService->storeUserAudit($validated, $validated["user_id"]);
            }

            return (float) (
              round($validated["total_amount"], 2) - round($validated["credit_amount"], 2)
            );
        });
    }

    public function updateTemporarily($validated)
    {
        DB::transaction(function() use ($validated) {
            $invoiceRecord = $this->prepareData($validated);
            $invoiceRecord->update([
                "invoice_reference" => $validated["ref_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION,
                "payment_type" => 'ONLINE',
                "received_amount" => $validated["total_amount"],
                "datePaid" => Carbon::now()
            ]);
        });
    }
}
