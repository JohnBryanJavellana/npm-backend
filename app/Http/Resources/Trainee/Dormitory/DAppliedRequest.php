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
            'credit_amount' => $this->boarder->credits,
            "room_for_type" => $this->dormitory_room->dormitory,
            "transfer_type" => $this->transfer_type,
            "purpose" => $this->purpose,
            "tenant_from_date" => $this->check_in_datetime,
            "tenant_to_date" => $this->check_out_datetime,
            "tenant_status" => $this->tenant_status,
            "status_of_occupancy" => $this->status_of_occupancy,
            "single_accommodation" => $this->accommodation,
            "is_air_conditioned" => $this->room_type,
            "paying_guest" => $this->paying_guest,
            "remarks" => $this->remarks,
            "process_type" => $this->process_type,
            "created_at" => $this->created_at,
            "dorm_room_id" => $this->dormitory_room?->id,
            "room_slot" => $this->dormitory_room?->room_slot,
            // "room_available_slot" => $this->dormitory_room?->room_available_slot,
            "d_info_id" => $this->dormitory_room?->id,
            "d_info_room_name" => $this->dormitory_room?->room_name,
            // "d_info_room_description" => $this->dormitory_room?->room_description,
            "d_info_room_cost" => $this->dormitory_room?->room_cost,
            "d_info_room_fee_type" => $this->dormitory_room?->dormitory,
            "d_info_is_air_conditioned" => $this->dormitory_room?->room_type,
            // "d_info_room_for_type" => $this->dormitory_room?->room_for_type,
            "room_images" => $this->dormitory_room?->room_images->map(function ($image) {
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
