<?php

namespace App\Http\Resources\Trainee\Library;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookCartResource extends JsonResource
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
            'id' => $this->books?->id,
            "cart_id" => $this->id,
            'status' => $this->books?->status,
            'photo' => $this->books?->photo,
            'pdf' => $this->books?->pdf_copy,
            'title' => $this->books->catalog?->title,
            'author' => $this->books->catalog?->author,
            'language' => $this->books->catalog?->language,
            'isbn' => $this->books->catalog?->isbn,
            'editor' => $this->books->catalog?->editor,
            'publisher' => $this->books->catalog?->publisher,
            "price" => $this->books->catalog?->price,
            "pages" => $this->books->catalog?->pages,
            "type" => $this->books->catalog?->type,
            'file_location' => $this->books->catalog?->file_location,
            'call_number' => $this->books->catalog?->call_number,
            'publication_year' => $this->books->catalog?->publication_year,
            'entry' => $this->books->catalog?->genre?->name,
            'count' => $this->books->copies_count,
        ];
    }
}
