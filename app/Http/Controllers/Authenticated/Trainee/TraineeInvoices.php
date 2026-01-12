<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Invoice\DormitoryInvoiceRequest;
use App\Http\Requests\Trainee\Library\LibInvoiceRequest;
use App\Http\Resources\LibInvoiceResource;
use App\Http\Resources\Trainee\Invoices\DormitoryInvoiceResource;
use Illuminate\Http\Request;
use App\Models\{User,EnrolledCourse,DormitoryTenant, LibraryInvoice};
use App\Services\Trainee\Dormitory\DormitoryInvoiceService;
use App\Services\Trainee\Library\LibraryInvoiceService;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class TraineeInvoices extends Controller
{

    public function __construct(
        private DormitoryInvoiceService $dormitoryInvoiceService,
        private LibraryInvoiceService $libraryInvoiceService 
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

    public function library_penalties(Request $request)
    {
        
        $records = LibraryInvoice::with([
            "payee",
            "BookRes",
            "selectedBooks.bookReservation.books.catalog.genre",
            "selectedBooks.bookReservation.book",
            ])
        ->where("user_id", $request->user()->id)
        ->get();

        // return response()->json(["invoices" => $records], 200);
        return LibInvoiceResource::collection($records);
    }

    public function updateLibInvoice(LibInvoiceRequest $request)
    {
        try {
            $validated = $request->validated();
            $user_id = $request->user()->id;

            $balance = $this->libraryInvoiceService->updateLibraryInvoice($validated, $user_id);
        //     DB::transaction(function() use ($request) {
        //         $validated = $request->validated();
        //         $user_id = $request->user()->id;

        //         LibraryInvoice::forUser($user_id)
        //         ->byTraceId($validated["inv_trace_number"], $validated["inv_id"])
        //         ->update([
        //             "reference_number" => $validated["inv_reference_number"],
        //             "status" => "VERIFICATION",
        //             "payment_type" => "ONLINE"
        //         ]);
        // });
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

            $total = $this->dormitoryInvoiceService->update_status($validated, $user_id);

            return response()->json(["balance" => $total], 200);
        }
        catch (DomainException $e) {
            \Log::info("updateDormInvoiceErrorDomainException", [$e]);
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
