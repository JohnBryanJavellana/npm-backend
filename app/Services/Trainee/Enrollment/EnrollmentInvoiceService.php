<?php

namespace App\Services\Trainee\Enrollment;

use App\Enums\RequestStatus;
use App\Models\EnrollmentInvoice;
use App\Services\Trainee\Credit\CreditService;
use App\Utils\GenerateTrace;
use DomainException;
use Illuminate\Support\Facades\DB;

class EnrollmentInvoiceService {

    private const prefix = "-EAINV-";
    public function __construct(
        protected EnrollmentInvoice $enrollmentInvoiceModel,
        protected CreditService $creditService
    ){}

    protected $notAllowedStatuses = [
        RequestStatus::CANCELLED->value,
        RequestStatus::PAID->value,
        RequestStatus::FOR_VERIFICATION->value
    ];

    //REMOVE
    public function createEnrollmentInvoice($validated)
    {
        DB::transaction(function() use ($validated){
            $this->enrollmentInvoiceModel->create([
                "enrolled_course_id" => $validated["enrolled_course_id"],
                "user_id" => $validated["userId"],
                "charge_id" => $validated["charge_id"],
                "trace_number" => GenerateTrace::createTraceNumber($this->enrollmentInvoiceModel, self::prefix),
            ]);
        });
    }

    protected function prepareData($validated){
        $record = $this->enrollmentInvoiceModel->query()
        ->forUser($validated["user_id"])
        ->whereKey($validated["billing_id"])
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
            if($validated->has("credit_amount") && $validated["credit_amount"] > 0) {
                if (round($validated["total_amount"], 2) === round($validated["credit_amount"], 2))
                {
                    $invoiceRecord->update([
                        "invoice_reference" => $validated["ref_number"],
                    ]);
                }
                $this->creditService->storeUserAudit($validated, $validated["user_id"]);
            }
            
            return (float) (
              $validated["total_amount"] - $validated["credit_amount"]
            );
        });
    }
}

//credit deduction
//received amount
//invoice reference
//payment type
//date paid