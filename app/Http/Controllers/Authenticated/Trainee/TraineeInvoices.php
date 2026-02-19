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
use Illuminate\Http\Request;
use App\Models\{User,EnrolledCourse,DormitoryTenant, LibraryInvoice, BookRes};
use App\Services\Trainee\Dormitory\DormitoryInvoiceService;
use App\Services\Trainee\Enrollment\EnrollmentInvoiceService;
use App\Services\Trainee\Library\LibraryInvoiceService;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class TraineeInvoices extends Controller
{

    public function __construct(
        protected DormitoryInvoiceService $dormitoryInvoiceService,
        protected LibraryInvoiceService $libraryInvoiceService,
        protected EnrollmentInvoiceService $enrollmentInvoiceService
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
        $penaltiedStatuses = [RequestStatus::DAMAGED->value, RequestStatus::LOST->value];

        $records = BookRes::with([
            "borrowedBooks" => fn($q) => $q->whereIn("status", $penaltiedStatuses),
            "borrowedBooks.books.catalog.genre",
            "borrowedBooks.book",
            ])
        ->where("user_id", $request->user()->id)
        ->whereHas("borrowedBooks", function($query) use ($penaltiedStatuses) {
            $query->whereIn("status", $penaltiedStatuses);
        })
        ->latest("created_at")
        ->get();

        return BookRequestResource::collection($records);

        }
        catch (\Exception $e) {
            \Log::error("error_library_penalties", [$e]);
            return response()->json(["Something went wrong, Please try again."], 500);
        }
        

        // return response()->json(["invoices" => $records], 200);
        // return LibInvoiceResource::collection($records);
    }

    public function updateLibInvoice(LibInvoiceRequest $request)
    {
        try {
            $validated = $request->validated();
            $user_id = $request->user()->id;

            $balance = $this->libraryInvoiceService->updateLibraryInvoice($validated, $user_id);

            return response()->json(["message" => "Successfully Paid!", "balance" => $balance], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => "Something went wrong, Please try again!"], 500);
        }
    }

    public function updateDormInvoice(DormitoryInvoiceRequest $request)
    {
        try {
            $validated = $request->validated();
            $user_id = $request->user()->id;

            $total = $this->dormitoryInvoiceService->updateDormitoryInvoice($validated, $user_id);

            return response()->json(["balance" => $total], 200);
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

    public function view_dormitory_invoices(Request $request, $id)
    {
        $user_id = $request->user()->id;
        try {
            $invoices = $this->dormitoryInvoiceService->getUserInvoice($id, $user_id);

            return DormitoryInvoiceResource::collection($invoices);
        }
        catch (\Exception $e) {
            \Log::info("error_view_dormitory_invoices", [$e]);
            return response()->json(["message" => "An unexpected error occurred. Please try again."], 500);
        }
    }
}
