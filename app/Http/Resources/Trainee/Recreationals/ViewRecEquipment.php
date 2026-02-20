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
            "inv_count" => $this->stocks_count,
            "facilities" => $this->relatedFacility->map(function($facility) {
                return [
                    "id" => $facility->facility->id,
                    "name" => $facility->facility->name,
                    "location" => $facility->facility->location,
                    "UI" => $facility->facility->unique_identifier,
                    "additional_details" => $facility->facility->additional_details,
                    "open_time" => $facility->facility->open_time,
                    "close_time" => $facility->facility->close_time,
                    "condition_status" => $facility->facility->condition_status,
                    "availability_status" => $facility->facility->availability_status,
                    "disabled_date_times" => $facility?->facility?->hasData?->map(fn($data) => [
                        "from_datetime" => $data->start_date,
                        "to_datetime" => $data->end_date
                    ]),
                    "images" => $facility->facility?->images
                ];
            }),
            "disabled_date_times" => $this->hasData->map(fn($query) => [
                "from_datetime" => $query->start_date,
                "to_datetime" => $query->end_date
            ])
        ];
    }
}
