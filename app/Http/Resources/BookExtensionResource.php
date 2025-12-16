<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookExtensionResource extends JsonResource
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
            "ext_req_id" => $this->id,
            "ext_purpose" => $this->purpose,
            "create_at" => $this->created_at,
            "ext_books" => $this->extendingBooks?->map(function($book) {
                return [
                    "ext_date_of_extension" => $book->date_of_extension,
                    "current_to_date" => $book->current_to_date,
                    "ext_status" => $book->status,
                    "book_reservation_id" => $book->bookReservation?->id,
                    "book_reservation_from" => $book->bookReservation?->from_date,
                    "book_reservation_to" => $book->bookReservation?->book_res_id,
                    "reservation_book_id" => $book->bookReservation?->book_id,
                    "reservation_book_copy_id" => $book->bookReservation?->book_copy_id,
                    "book_reservation_status" => $book->bookReservation?->status,
                    "book_reservation_created" => $book->bookReservation?->created_at,
                    "book_id" => $book->bookReservation?->books?->id,
                    "book_unique_identifier" => $book->bookReservation?->book?->unique_identifier,
                    "book_photo" => $book->bookReservation?->books?->photo,
                    "book_pdf_copy" => $book->bookReservation?->books?->pdf_copy,
                    "book_title" => $book->bookReservation?->books?->catalog?->title,
                    "book_genre" => $book->bookReservation?->books?->catalog?->genre?->name,
                    "book_author" => $book->bookReservation?->books?->catalog?->author,
                    "book_language" => $book->bookReservation?->books?->catalog?->language,
                    "book_isbn" => $book->bookReservation?->books?->catalog?->isbn,
                    "book_edition" => $book->bookReservation?->books?->catalog?->edition,
                    "book_bibliography" => $book->bookReservation?->books?->catalog?->bibliography,
                    "book_description" => $book->bookReservation?->books?->catalog?->description,
                    "book_publication_year" => $book->bookReservation?->books?->catalog?->publication_year,
                ];
            }),
            "book_res_id" => $this->library?->id,
            "book_res_trace_number" => $this->library?->trace_number,
            "book_res_purpose" => $this->library?->purpose,
            "book_res_status" => $this->library?->status,
            "book_res_type" => $this->library?->type,
        ];
    }
}
