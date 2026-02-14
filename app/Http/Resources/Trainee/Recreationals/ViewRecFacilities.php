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
            "disabled_date_times" => $this->hasData->map(fn($query) => [
                "from_datetime" => $query->start_date,
                "to_datetime" => $query->end_date
            ]),
            "equipment" => $this->relatedEquipment?->map(function($query) {
                return [
                    "equipment_id" => $query?->equipment?->id,
                    "name" => $query?->equipment?->name,
                    "additional_details" => $query?->equipment?->additional_details,
                    "status" => $query?->equipment?->availability_status,
                    "images" => $query?->equipment?->images,
                    "disabled_dates" => $query?->equipment?->hasData->map(fn($data) => [
                        "from_datetime" => $data->start_date,
                        "to_datetime" => $data->end_date
                ]),
                ];
            }),
        ];
    }
}
