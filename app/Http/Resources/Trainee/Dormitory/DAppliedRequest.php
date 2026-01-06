<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DAppliedRequest extends JsonResource
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
            "dormitory_room_id" => $this->dormitory_room_id,
            "trace_number" => $this->trace_number,
            "user_id" => $this->user_id,
            "room_for_type" => $this->room_for_type,
            "transfer_type" => $this->transfer_type,
            "filename" => $this->filename,
            "purpose" => $this->purpose,
            "tenant_from_date" => $this->tenant_from_date,
            "tenant_to_date" => $this->tenant_to_date,
            "tenant_status" => $this->tenant_status,
            "status_of_occupancy" => $this->status_of_occupancy,
            "single_accommodation" => $this->single_accommodation,
            "is_air_conditioned" => $this->is_air_conditioned,
            "paying_guest" => $this->paying_guest,
            "remarks" => $this->remarks,
            "process_type" => $this->process_type,
            "created_at" => $this->created_at,
            "dorm_room_id" => $this->dormitory_room?->id,
            "room_slot" => $this->dormitory_room?->room_slot,
            "room_available_slot" => $this->dormitory_room?->room_available_slot,
            "d_info_id" => $this->dormitory_room?->dormitory?->id,
            "d_info_room_name" => $this->dormitory_room?->dormitory?->room_name,
            "d_info_room_description" => $this->dormitory_room?->dormitory?->room_description,
            "d_info_room_cost" => $this->dormitory_room?->dormitory?->room_cost,
            "d_info_room_fee_type" => $this->dormitory_room?->dormitory?->room_fee_type,
            "d_info_is_air_conditioned" => $this->dormitory_room?->dormitory?->is_air_conditioned,
            "d_info_room_for_type" => $this->dormitory_room?->dormitory?->room_for_type,
            "room_images" => $this->dormitory_room?->dormitory?->room_images->map(function ($image) {
                return ["filename" => $image->filename];
            }),

            "transfer_request" => $this->transferRequest?->map(fn ($image) => $image),
            "extension_request" => $this->extendRequest?->map(fn ($image) => $image),

            "tenant_invoices" => $this->tenant_invoices?->map(fn ($image) => $image),
            "dormitory_histories" => $this->dormitory_histories?->map(function ($history){
                return [
                    "history_reason" => $history->history_reason,
                    "created_at" => $history->created_at,
                ];
            }),
        ];
    }
}
