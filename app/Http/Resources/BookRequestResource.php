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
        return [
            'id' => $this->id,
            'trace_number' => $this->trace_number,
            'status' => $this->status,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'requested_books' => $this->borrowedBooks?->map(function($book) {
                return [
                    'res_id' => $book->id,
                    'id' => $book->books?->id,
                    'name' => $book->books?->catalog?->title,
                    'entry' => $book->books?->catalog?->genre?->name,
                    'author' => $book->books?->catalog?->author,
                    'language' => $book->books?->catalog?->language,
                    'isbn' => $book->books?->catalog?->isbn,
                    'editor' => $book->books?->catalog?->editor,
                    'publisher' => $book->books?->catalog?->publisher,
                    'file_location' => $book->books?->catalog?->file_location,
                    'type' => $book->books?->catalog?->type,
                    'publication_year' => $book->books?->catalog?->publication_year,
                    'status' => $book->status,
                    'call_number' => $book->books?->catalog?->call_number,
                    'price' => $book->books?->catalog?->price,
                    'pages' => $book->books?->catalog?->pages,
                    'photo' => $book->books?->photo,
                    'pdf' => $book->books?->pdf_copy,
                    'from' => $book->from_date,
                    'to' => $book->to_date,
                    'ui' => $book->book?->unique_identifier,
                    'recommended' => $book->books?->related->map(function($course) {
                        return $course->training?->module?->name;
                    }),
                ];
            }),
            'csm' => $this->csm,
        ];
    }
}
