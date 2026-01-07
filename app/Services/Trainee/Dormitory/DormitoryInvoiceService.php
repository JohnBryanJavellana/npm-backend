<?php

namespace App\Services\Trainee\Dormitory;

use App\Enums\RequestStatus;
use App\Models\DormitoryInvoice;
use Illuminate\Support\Facades\DB;

class DormitoryInvoiceService {
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
        $this->dormitoryInvoice->forUser($userId)
            ->where("dormitory_tenant_id", $validated["tenant_id"])
            ->whereKey($validated["billing_id"])
            ->update([
                "invoice_reference" => $validated["ref_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION->value,
                "payment_type" => "ONLINE"
            ]);
        });
    }
}