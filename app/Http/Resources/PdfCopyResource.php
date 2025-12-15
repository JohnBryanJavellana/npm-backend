<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PdfCopyResource extends JsonResource
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
            'book_id' => $this->books?->id,
            'book_status' => $this->books?->status,
            'book_photo' => $this->books?->photo,
            'book_pdf' => $this->books?->pdf_copy,
            'book_title' => $this->books?->catalog?->title,
            'book_author' => $this->books?->catalog?->author,
            'book_language' => $this->books?->catalog?->language,
            'book_isbn' => $this->books?->catalog?->isbn,
            'book_edition' => $this->books?->catalog?->edition,
            'book_bibliography' => $this->books?->catalog?->bibliography,
            'book_description' => $this->books?->catalog?->description,
            'book_publication_year' => $this->books?->catalog?->publication_year,
            'book_genre' => $this->books?->catalog?->genre?->name,
            'book_from_date' => $this->bookRes?->from_date,
            'book_to_date' => $this->bookRes?->to_date,
        ];
    }
}
