<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookOverDueResource extends JsonResource
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
            "book_reservation_id" => $this->id,
            "book_res_trace" => $this->bookRes?->trace_number,
            "from_date" => $this->from_date,
            "to_date" => $this->to_date,
            "book_res_id" => $this->book_res_id,
            "book_id" => $this->book_id,
            "book_copy_id" => $this->book_copy_id,
            "book_reservation_status" => $this->status,
            "updated_at" => $this->updated_at,
            "book_title" => $this->books?->catalog?->title,
            "book_photo" => $this->books?->photo,
            "book_ui" => $this->book?->unique_identifier,
        ];
    }
}
