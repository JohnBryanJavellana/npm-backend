<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookRequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // return ['book_status' => $this->borrowedBooks->map(function($book) {return $book;})];
        return [
            'request_id' => $this->id,
            'request_trace_number' => $this->trace_number,
            'request_purpose' => $this->purpose,
            'request_status' => $this->status,
            'request_type' => $this->type,
            'requested_books' => $this->borrowedBooks?->map(function($book) {
                return [
                    'book_res_id' => $book->id,
                    'book_id' => $book->books?->id,
                    'book_name' => $book->books?->catalog?->title,
                    'book_genre' => $book->books?->catalog?->genre?->name,
                    'book_author' => $book->books?->catalog?->author,
                    'book_language' => $book->books?->catalog?->language,
                    'book_isbn' => $book->books?->catalog?->isbn,
                    'book_edition' => $book->books?->catalog?->edition,
                    'book_bibliography' => $book->books?->catalog?->bibliography,
                    'book_description' => $book->books?->catalog?->description,
                    'book_publication_year' => $book->books?->catalog?->publication_year,
                    'book_status' => $book->status,
                    'book_photo' => $book->books?->photo,
                    'book_pdf' => $book->books?->pdf_copy,
                    'book_from' => $book->from_date,
                    'book_to' => $book->to_date,
                    'book_ui' => $book->book?->unique_identifier,
                    'book_recommended' => $book->books?->related->map(function($course) {
                        return $course->training?->module?->name;
                    }),    
                ];
            }),
            'csm' => $this->csm,
        ];
    }
}
