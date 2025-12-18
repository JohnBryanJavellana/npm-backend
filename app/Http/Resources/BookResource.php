<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'book_id' => $this->id,
            'book_status' => $this->status,
            'book_photo' => $this->photo,
            'book_pdf' => $this->pdf_copy,
            'book_title' => $this->catalog?->title,
            'book_author' => $this->catalog?->author,
            'book_language' => $this->catalog?->language,
            'book_isbn' => $this->catalog?->isbn,
            'book_edition' => $this->catalog?->edition,
            'book_bibliography' => $this->catalog?->bibliography,
            'book_description' => $this->catalog?->description,
            'book_publication_year' => $this->catalog?->publication_year,
            'book_genre' => $this->catalog?->genre?->name,
            'book_count' => $this->copies_count,
            'book_flag' => ($this->carts_count > 0|| $this->has_data_count > 0) ? true : false,
            'book_recommendation' => $this->related->map(function($course) {
                return $course->training?->module?->name;
            }),
            "book_copies" => $this->copies->map(fn($copy) => $copy)
        ];
    }
}
