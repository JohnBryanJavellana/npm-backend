<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Http\Controllers\Controller;
use App\Http\Resources\LibInvoiceResource;
use Illuminate\Http\Request;
use App\Models\{User,EnrolledCourse,DormitoryTenant, LibraryInvoice};

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

    public function get_all_trainee_invoices_two(Request $request) {
        $all_enrolled_invoices = EnrolledCourse::with([
            'invoices',
            'training',
            'training.module',
        ])->where('user_id', 202500001)->get();

        $all_dormitory_invoices = DormitoryTenant::with([
            'tenant_invoices',
            'dormitory_room'
        ])->where('user_id', 202500001)->get();

        return response()->json(['message' => 'Invoices Fetched Successfully!', 'trainings' => $all_enrolled_invoices, 'dorms' => $all_dormitory_invoices], 200);
    }

    public function library_penalties(Request $request)
    {
        $records = LibraryInvoice::with([
            "payee",
            "BookRes",
            "selectedBooks.bookReservation.books.catalog.genre"
            ])
        ->where("user_id", $request->user()->id)
        ->get();

        // return response()->json(["invoices" => $records], 200);
        return LibInvoiceResource::collection($records);
    }
}
