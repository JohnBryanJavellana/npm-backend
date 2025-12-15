<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableBooksResource extends JsonResource
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
            "title" => $this->catalog?->title,
            "status" => $this->status,
            "photo" => $this->photo,
            "genre" => $this->catalog?->genre?->name,
            "request_info" => $this->hasData->map(function($data) {
                return [
                    "book_reservation_id" => $data->id,
                    "book_res_id" => $data->book_res_id,
                    "from_date" => $data->from_date,
                    "to_date" => $data->to_date,
                ];
            })
        ];
    }
}
