<?php 

namespace App\Services\Trainee\Library;

use App\Enums\RequestStatus;
use App\Http\Controllers\Authenticated\Trainee\CreditController;
use App\Models\DormitoryInvoice;
use App\Models\LibraryInvoice;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Services\Trainee\Credit\CreditService;
use DomainException;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Request;

class LibraryInvoiceService {
    public function __construct(
        protected User $userModel,
        protected LibraryInvoice $libraryInvoiceModel,
        protected CreditService $creditService
    )
    {}

    public function updateLibraryInvoice($validated, $userId)
    {
       return  DB::transaction(function() use ($validated, $userId) {
            $this->prepareData($validated, $userId);
            
            if(round($validated["total_amount"], 2) == round($validated["credit_amount"], 2)) {
                $this->libraryInvoiceModel
                ->byTraceId($validated["inv_trace_number"], $validated["inv_id"])
                ->update([
                    "reference_number" => $validated["inv_reference_number"],
                    "status" => RequestStatus::VERIFICATION,
                    "payment_type" => "ONLINE",
                    "datePaid" => Carbon::now()
                ]);
            }

            $this->creditService->storeUserAudit($validated, $userId);


            return round(round($validated["total_amount"], 2) - round($validated["credit_amount"], 2), 2);
        });
    }

    private function prepareData($validated, $userId){
        $userRec = $this->userModel->query()
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