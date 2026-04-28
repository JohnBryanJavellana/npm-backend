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
            "app_trace_number" => $this->trace_number,
            "app_room_for_type" => $this->dormitory_room?->dormitory,
            "app_is_air_conditioned" => $this->room_type,
            "app_purpose" => $this->purpose,
            "app_tenant_from_date" => $this->check_in_datetime,
            "app_tenant_to_date" => $this->check_out_datetime,
            "app_tenant_status" => $this->tenant_status,
            "app_tenant_process" => $this->process_type,

            "room_name" => $this->dormitory_room?->room_name,
            "room_cost" => $this->dormitory_room?->room_cost,
            "is_air_conditioned" => $this->dormitory_room?->room_type,
            "room_for_type" => $this->dormitory_room?->dormitory,
            "room_images" => $this->dormitory_room?->room_images->map(fn($image) => [
                'id' => $image->id,
                'filename' => $image->filename
            ]),
        ];
    }
}
