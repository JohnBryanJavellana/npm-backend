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
        // return parent::toArray($request);

        return [
            "id" => $this->id,
            "name" => $this->room_name,
            "fee_type" => $this->dormitory,
            "is_air_conditioned"=> $this->room_type,
            "room_cost" => $this->room_cost,
            "guest_cost"=> $this->guest_cost,
            "images" => $this->room_images->map(fn($query) => [
                'id' => $query->id,
                'filename' => $query->filename
            ]),
        ];
    }
}
