<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Library\LibInvoiceRequest;
use App\Http\Resources\LibInvoiceResource;
use Illuminate\Http\Request;
use App\Models\{User,EnrolledCourse,DormitoryTenant, LibraryInvoice};
use Illuminate\Support\Facades\DB;
// use ParagonIE\Sodium\Core\Curve25519\Ge\P2;

class TraineeInvoices extends Controller
{
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
        try
        {
            DB::transaction(function() use ($request) {

            $validated = $request->validated();
            $user_id = $request->user()->id;

            LibraryInvoice::forUser($user_id)
            ->byTraceId($validated["inv_trace_number"], $validated["inv_id"])
            ->update([
                "reference_number" => $validated["inv_reference_number"],
                "status" => "VERIFICATION",
                "payment_type" => "ONLINE"
            ]);
        });
            return response()->json(["message" => "Successfully Paid!"], 200);
        }
        catch (\Exception $e) {
            return response()->json(["message" => "Something went wrong, Please try again!"], 500);
        }
        
    }
}
