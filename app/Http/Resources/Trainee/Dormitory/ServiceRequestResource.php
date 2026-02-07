<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceRequestResource extends JsonResource
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
            "name" => $this->services?->name,
            "service_charge" => $this->services?->charge,
            "final_charge" => $this->charge,
            "status" => $this->status,
            "remarks" => $this->remarks,
            "description" => $this->services?->description,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
