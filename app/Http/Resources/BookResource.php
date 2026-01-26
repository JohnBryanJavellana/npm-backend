<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class           BookResource extends JsonResource
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
            'status' => $this->status,
            'photo' => $this->photo,
            'bb_count' => $this->bb_count ?? 0,
            'pdf' => $this->pdf_copy,
            'title' => $this->catalog?->title,
            'author' => $this->catalog?->author,
            'language' => $this->catalog?->language,
            'isbn' => $this->catalog?->isbn,
            'editor' => $this->catalog?->editor,
            'publisher' => $this->catalog?->publisher,
            "price" => $this->catalog?->price,
            "pages" => $this->catalog?->pages,
            "type" => $this->catalog?->type,
            'file_location' => $this->catalog?->file_location,
            'call_number' => $this->catalog?->call_number,
            'publication_year' => $this->catalog?->publication_year,
            'entry' => $this->catalog?->genre?->name,
            'count' => $this->copies_count,
            "borrrow_count" =>  $this->has_data_count,
            'flag' => ($this->carts_count > 0||$this->has_data_count > 0) ? true : false,
            'recommendation' => $this->related->map(function($course) {
                return $course->training?->module?->name;
            }),
            "book_copies" => $this->copies->map(fn($copy) => $copy)
        ];
    }
}
