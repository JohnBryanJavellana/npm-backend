<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\ProcessEnum;
use App\Enums\RequestStatus;
use App\Http\Controllers\Authenticated\Trainee\CreditController;
use App\Models\{DormitoryExtendRequest, DormitoryExtensionRequest, DormitoryInclusionRequest, DormitoryInvoice, DormitoryTenant, DormitoryTransfer, User};
use App\Services\Trainee\Credit\CreditService;
use DomainException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DormitoryInvoiceService {
    public function __construct(
        protected DormitoryInvoice $dormitoryInvoice,
        protected DormitoryTenant $dormitoryTenantModel,
        protected DormitoryExtensionRequest $dormitoryExtensionRequest,
        protected DormitoryTransfer $dormitoryTransfer,
        protected DormitoryInclusionRequest $dormitoryInclusionRequest,
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

            $statusColumn = match(true) {
                $validated["billing_type"] === "DORMITORY" => "tenant_status",
                \in_array($validated["billing_type"], ["EXTENSION", "TRANSFER", "INCLUSION"]) => "status"
            };

            $this->updateBillingParentTable($validated["billing_type"], $validated["billing_id"], $statusColumn);
        });
    }

    /**
     * Summary of updateBillingParentTable
     * @param string $billingType
     * @param int $billingId
     * @param string $statusColumn
     * @return void
     */
    private function updateBillingParentTable(string $billingType, int $billingId, string $statusColumn): void
    {
        $model = match(true) {
            $billingType === "DORMITORY" => $this->dormitoryTenantModel::class,
            $billingType === "EXTENSION" => $this->dormitoryExtensionRequest::class,
            $billingType === "TRANSFER"  => $this->dormitoryTransfer::class,
            $billingType === "INCLUSION" => $this->dormitoryInclusionRequest::class
        };

        $model::where('dormitory_invoice_id', $billingId)->update([
            $statusColumn => RequestStatus::PROCESSING_PAYMENT->value
        ]);
    }
}
