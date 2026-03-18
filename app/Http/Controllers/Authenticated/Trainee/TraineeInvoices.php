<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Enums\RequestStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Enrollment\EnrollmentInvoiceRequest;
use App\Http\Requests\Trainee\Invoice\DormitoryInvoiceRequest;
use App\Http\Resources\Trainee\Invoices\DormitoryInvoiceResource;
use App\Http\Requests\Trainee\Library\LibInvoiceRequest;
use App\Http\Resources\BookRequestResource;
use App\Http\Resources\LibInvoiceResource;
use App\Http\Resources\Trainee\Library\LibraryInvoiceResource;
use Illuminate\Http\Request;
use App\Models\{User,EnrolledCourse,DormitoryTenant, LibraryInvoice, BookRes};
use App\Services\Trainee\Dormitory\DormitoryInvoiceService;
use App\Services\Trainee\Enrollment\EnrollmentInvoiceService;
use App\Services\Trainee\Library\LibraryInvoiceService;
use App\Services\Trainee\Recreational\RecreationalInvoiceService;
use DomainException;

class TraineeInvoices extends Controller
{

    public function __construct(
        protected DormitoryInvoiceService $dormitoryInvoiceService,
        protected LibraryInvoiceService $libraryInvoiceService,
        protected EnrollmentInvoiceService $enrollmentInvoiceService,
        protected RecreationalInvoiceService $recreationalInvoiceService
    )
    {}
    public function get_all_trainee_invoices(Request $request) {
        $all_user_invoices = User::forUser($request->user()->id)
            ->with([
                'trainee_enrolled_invoices',
                'trainee_dormitory_invoices',
                ])
            ->get();

        $invoices = $all_user_invoices->select('trainee_enrolled_invoices', 'trainee_dormitory_invoices');

        return response()->json(['message' => 'Invoices Fetched Successfully!', 'data' => $invoices], 200);
    }

    public function updateEnrollmentInvoice(EnrollmentInvoiceRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $this->enrollmentInvoiceService->updateTemporarily($validated);

            return response()->json(["message" => "Payment successfully!"], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("updateEnrollmentInvoiceError", [$e]);
            return response()->json(["message" => $e], 500);
        }
    }

    public function library_penalties(Request $request)
    {
        try
        {
        $records = BookRes::with([
            "borrowedBooks",
            "borrowedBooks.books.catalog.genre",
            "borrowedBooks.book",
            "fines"
            ])
        ->where("user_id", $request->user()->id)
        ->whereHas("fines", function($query) use ($request) {
            $query->where("user_id", $request->user()->id);
        })
        ->latest("created_at")
        ->get();

        return LibraryInvoiceResource::collection($records);

        }
        catch (\Exception $e) {
            \Log::error("error_library_penalties", [$e]);
            return response()->json(["Something went wrong, Please try again."], 500);
        }
    }

    public function updateLibInvoice(LibInvoiceRequest $request)
    {
        try {
            $validated = $request->validated();
            $balance = $this->libraryInvoiceService->updateLibraryInvoice($validated);

            return response()->json(["message" => "Successfully Paid!", "balance" => $balance], 200);
        }
        catch (\Exception $e) {
            \Log::error("errorUpdateLibInvoice", [$e]);
            return response()->json(["message" => "Something went wrong, Please try again!"], 500);
        }
    }

    public function updateDormInvoice(DormitoryInvoiceRequest $request)
    {
        try {
            $validated = $request->validated();
            $user_id = $request->user()->id;

            $this->dormitoryInvoiceService->updateDormitoryInvoice($validated, $user_id);
            // $total = $this->dormitoryInvoiceService->updateDormitoryInvoice($validated, $user_id);

            return response()->json(["message" => "Payment Transaction Success!"], 200);
        }
        catch (DomainException $e) {
            \Log::info("updateDormInvoiceDomainException", [$e]);
            throw $e;
        }
        catch (\Exception $e) {
            \Log::info("updateDormInvoiceError", [$e]);
            return response()->json(["message" => "Something went wrong, Please try again!"], 500);
        }
    }

    public function viewDormitoryInvoices(Request $request, $tenant)
    {
        $user_id = $request->user()->id;
        try {
            $invoices = $this->dormitoryInvoiceService->getUserInvoice($tenant, $user_id);

            return DormitoryInvoiceResource::collection($invoices);
        }
        catch (\Exception $e) {
            \Log::info("error_view_dormitory_invoices", [$e]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }

    public function recreationalInvoices(Request $request)
    {
        try
        {   
            return $this->recreationalInvoiceService->getUserInvoice($request->user()->id);
        }
        catch (\Exception $e) {
            \Log::error("recreationalInvoicesError");
            return response()->json([$e->getMessage()], 500);
        }
    }
}
