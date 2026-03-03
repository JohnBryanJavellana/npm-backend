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
    
    public function updateLibraryInvoice($validated)
    {
       return DB::transaction(function() use ($validated) {
            $this->libraryInvoiceModel
            ->byTraceId($validated["trace_number"], $validated["id"])
            ->update([
                "invoice_reference" => $validated["reference_number"],
                "invoice_status" => RequestStatus::FOR_VERIFICATION,
                "payment_type" => "ONLINE",
                "datePaid" => Carbon::now()
            ]);
        });
    }

    public function updateTemporarily($validated)
    {
        return;
    }
}