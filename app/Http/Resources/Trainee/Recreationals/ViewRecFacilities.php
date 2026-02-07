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
            "equipment" => $this->relatedEquipment?->map(function($query) {
                return [
                    "disabled_dates" => $query?->equipment?->hasData->map(fn($data) => [
                        "from_datetime" => $data->start_date,
                        "to_datetime" => $data->end_date
                    ]),
                ];
            }),
            "disabled_dates" => $this->hasData->map(fn($q) => [
                "from_datetime" => $q->start_date,
                "to_datetime" => $q->end_date
            ])
        ];
    }
}
