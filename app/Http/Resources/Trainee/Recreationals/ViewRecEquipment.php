<?php

namespace App\Http\Resources\Trainee\Recreationals;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewRecEquipment extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "additional_details" => $this->additional_details,
            "availability_status" => $this->availability_status,
            "images" => $this->images->map(fn($query) => [
                    "id" => $query->id,
                    "filename" => $query->filename
                ]),
            // "facilities" => $this->
            "inv_count" => $this->stocks_count,
        ];
    }
}
