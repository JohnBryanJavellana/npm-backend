<?php

namespace App\Http\Resources\Trainee\Recreationals;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewRecFacilities extends JsonResource
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
            "location" => $this->location,
            "additional_details" => $this->additional_details,
            "open_time" => $this->open_time,
            "close_time" => $this->close_time,
            "condition_status" => $this->condition_status,
            "availability_status" => $this->availability_status,
            "image" => $this->images,
            "equipment" => $this->relatedEquipment->map(fn($query) => $query->equipment),
        ];
    }
}
