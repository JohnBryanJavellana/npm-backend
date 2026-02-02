<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DormRoomsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->room_name,
            "description" => $this->room_description,
            "fee_type" => $this->room_fee_type ,
            "is_air_conditioned"=> $this->is_air_conditioned,
            "room_cost" => $this->room_cost,
            "guest_cost"=> $this->guest_cost,
            "images" => $this->room_images,
        ];
    }
}
