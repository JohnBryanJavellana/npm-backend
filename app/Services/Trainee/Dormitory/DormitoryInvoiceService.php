<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\ProcessEnum;
use App\Enums\RequestStatus;
use App\Http\Controllers\Authenticated\Trainee\CreditController;
use App\Models\{DormitoryInvoice, DormitoryTenant, User};
use App\Services\Trainee\Credit\CreditService;
use DomainException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DormitoryInvoiceService {
    public function __construct(
        protected DormitoryInvoice $dormitoryInvoice,
        protected DormitoryTenant $dormitoryTenantModel,
        protected User $user,
        protected CreditController $creditController
    )
    {}

    public function getUserInvoice($documentId, $userId)
    {
        return $this->dormitoryInvoice->query()
        ->with([
            "orNumber",
         ])
        ->where([
            "dormitory_tenant_id" => $documentId,
            "user_id" => $userId
            ])
        // FOR NOW
        // ->whereNotNull("description")
        ->latest("created_at")
        ->get();
    }

    public function updateDormitoryInvoice($validated, $userId)
    {
        return DB::transaction(function() use ($validated, $userId) {
            // $this->prepareData($validated, $userId);
            // temporary
            $this->dormitoryInvoice->query()
            ->forUser($userId)
            ->where("dormitory_tenant_id", $validated["tenant_id"])
            ->whereKey($validated["billing_id"])
            ->update([
                "invoice_reference" => $validated["ref_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION->value,
                "payment_type" => ProcessEnum::ONLINE->value,
                "datePaid" => Carbon::now()
            ]);

            if($validated["billing_type"] === "DORMITORY") {
                $this->dormitoryTenantModel->whereKey($validated["tenant_id"])->update([
                    "tenant_status" => RequestStatus::PROCESSING_PAYMENT->value
                ]);
            }
        });
    }

    private function prepareData($validated, $userId){
      return;
    }
}