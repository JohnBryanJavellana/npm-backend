<?php

namespace App\Services\Trainee\Enrollment;

use App\Enums\RequestStatus;
use App\Models\EnrollmentInvoice;
use App\Utils\GenerateTrace;
use Illuminate\Support\Facades\DB;

class TraineeInvoiceService {

    private const prefix = "-EAINV-";
    public function __construct(
        protected EnrollmentInvoice $enrollmentInvoiceModel
    ){}

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

    public function updateEnrollmentInvoice($validated)
    {
        DB::transaction(function() use ($validated){
            $this->enrollmentInvoiceModel->update([

            ]);
        });
    }
}

//credit deduction
//received amount
//invoice reference
//payment type
//date paid