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
            "dormitory_tenant_id" => $documentId
            ])
        // FOR NOW
        // ->whereNotNull("description")
        ->latest("created_at")
        ->get();
    }

    public function updateDormitoryInvoice($validated, $userId)
    {
        return DB::transaction(function() use ($validated, $userId) {
            $inv = $this->dormitoryInvoice->query()
                ->where("dormitory_tenant_id", $validated["tenant_id"])
                ->whereKey($validated["billing_id"])
                ->firstOrFail();

            $statusColumn = match(true) {
                $validated["billing_type"] === "DORMITORY" => [
                    'column' => "tenant_status",
                    'key' => $validated["tenant_id"]
                ],
                $validated["billing_type"] === "EXTENSION" => [
                    'column' => "status",
                    'key' => $inv->extendRequest->id
                ],
                $validated["billing_type"] === "TRANSFER" => [
                    'column' => "status",
                    'key' => $inv->transferRequest->id
                ],
                $validated["billing_type"] === "INCLUSION" => [
                    'column' => "status",
                    'key' => $inv->dormitoryIncService->id
                ]
            };

            $inv->update([
                "invoice_reference" => $validated["ref_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION->value,
                "payment_type" => ProcessEnum::ONLINE->value,
                "datePaid" => Carbon::now()
            ]);

            $this->updateBillingParentTable($validated["billing_type"], $statusColumn['key'], $statusColumn['column']);
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

        $model::whereKey($billingId)->update([
            $statusColumn => RequestStatus::PROCESSING_PAYMENT->value
        ]);
    }
}
