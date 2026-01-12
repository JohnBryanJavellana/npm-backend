<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Http\Controllers\Authenticated\Trainee\CreditController;
use App\Models\{DormitoryInvoice, User};
use App\Services\Trainee\Credit\CreditService;
use DomainException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DormitoryInvoiceService {
    public function __construct(
        protected DormitoryInvoice $dormitoryInvoice,
        protected User $user,
        protected CreditController $creditController
    )
    {}

    public function getUserInvoice($documentId, $userId)
    {
        return $this->dormitoryInvoice->query()
        ->with([
            "orNumber",
            "charge:id,charge_category_id,name,amount,description,service_type",
            "charge.chargeCategory:id,name"
         ])
        ->where([
            "dormitory_tenant_id" => $documentId,
            "user_id" => $userId
            ])
        ->whereNotNull("description")
        ->latest("created_at")
        ->get();
    }

    public function update_status($validated, $userId): float
    {
        return DB::transaction(function() use ($validated, $userId) {
            $this->prepareData($validated, $userId);

            //temporary
            if(round($validated["total_amount"], 2) === round($validated["credit_amount"], 2)) {
                $this->dormitoryInvoice->query()
                ->forUser($userId)
                ->where("dormitory_tenant_id", $validated["tenant_id"])
                ->whereKey($validated["billing_id"])
                ->update([
                    "invoice_reference" => $validated["ref_number"],
                    "invoice_status" => RequestStatus::FOR_VERIFICATION->value,
                    "payment_type" => "ONLINE",
                    "datePaid" => Carbon::now()
                ]);
            }
            $this->creditController->store($validated, $userId);

            return (float) (
              $validated["total_amount"] - $validated["credit_amount"]
            );
        });
    }

    private function prepareData($validated, $userId){
        $userRec = $this->user->query()
        ->whereKey($userId)
        ->lockForUpdate()
        ->first();

        if(!$userRec) {
        throw new DomainException("User not found.");
        }

        if($userRec->credit_amount < $validated["credit_amount"]) {
            throw new DomainException("Insufficient credit.");
        }

        //onSuccess from the Paymaya
        $userRec->decrement("credit_amount", $validated["credit_amount"]);
    }
}