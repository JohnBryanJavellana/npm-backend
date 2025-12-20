<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DApplicationResource extends JsonResource
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
            "app_id" => $this->id,
            "app_room_for_type" => $this->room_for_type,
            "app_room_type" => $this->room_type,
            "app_purpose" => $this->purpose,
            "app_filename" => $this->filename,
            "app_tenant_from_date" => $this->tenant_from_date,
            "app_tenant_to_date" => $this->tenant_to_date,
            "app_tenant_status" => $this->tenant_status,
            // "room_name" => $this->dormitory_room?->dormitory?->room_name,
            // "room_description" => $this->dormitory_room?->dormitory?->room_description,
            // "room_cost" => $this->dormitory_room?->dormitory?->room_cost,
            // "room_fee_type" => $this->dormitory_room?->dormitory?->room_fee_type,
            // "is_air_conditioned" => $this->dormitory_room?->dormitory?->is_air_conditioned,
            // "room_for_type" => $this->dormitory_room?->dormitory?->room_for_type,
            // "room_images" => $this->dormitory_room?->dormitory?->room_images->map(fn($image) => $image),
        ];
    }
}
