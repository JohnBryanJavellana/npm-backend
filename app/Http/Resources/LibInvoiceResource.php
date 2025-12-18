<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibInvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            "inv_trace_number" => $this->trace_number,
            "inv_reference_number" => $this->reference_number,
            "inv_amount" => $this->amount,
            "inv_details" => $this->details,
            "inv_status" => $this->status,
            "user_fname" => $this->payee?->fname,
            "user_lname" => $this->payee?->lname,
            "user_mname" => $this->payee?->mname,
            "user_password" => $this->payee?->password,
            "request_trace_number" => $this->BookRes?->trace_number,
            "request_purpose" => $this->BookRes?->purpose,
            "request_type" => $this->BookRes?->type,
            "over_due_book" => $this->selectedBooks->map(function($book) {
                return [
                    "book_title" => $book->bookReservation?->books?->catalog?->title,
                    "book_req_to" => $book->bookReservation?->to_date,
                    "book_req_from" => $book->bookReservation?->from_date,
                ];
            })
        ];
    }
}
