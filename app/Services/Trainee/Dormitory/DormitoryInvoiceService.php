<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Http\Controllers\Authenticated\Trainee\CreditController;
use App\Models\{DormitoryInvoice, User};
use App\Services\Trainee\Credit\CreditService;
use DomainException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DormitoryInvoiceService extends CreditService {
    public function __construct(
        private DormitoryInvoice $dormitoryInvoice,
    )
    {}

    public function getUserInvoice($documentId, $userId)
    {
        return $this->dormitoryInvoice
        ->where([
            "dormitory_tenant_id" => $documentId,
            "user_id" => $userId
            ])
            ->latest("created_at")
        ->get();
    }

    public function update_status($validated, $userId)
    {
        DB::transaction(function() use ($validated, $userId) {

            $this->prepareData($validated["billing_id"], $userId);

            $this->dormitoryInvoice->forUser($userId)
            ->where("dormitory_tenant_id", $validated["tenant_id"])
            ->whereKey($validated["billing_id"])
            ->update([
                "invoice_reference" => $validated["ref_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION->value,
                "payment_type" => "ONLINE",
                "datePaid" => Carbon::now()
            ]);

            $this->storeUserAudit($validated, $userId);

        });
    }

    private function prepareData($validated, User $user){
        // Validate if credit amount is greater than the users' credit
        if($user->credit_amount > $validated["credit_amount"]) {
            throw new DomainException("Insufficient credit.");
        }
    }
}