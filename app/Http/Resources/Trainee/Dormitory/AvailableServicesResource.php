<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableServicesResource extends JsonResource
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
            "description" => $this->description,
            "status" => $this->status,
            "charge_id" => $this->charge_id,
            "charge_name" => $this->charge?->name,
            "charge_amount" => $this->charge?->amount,
            "charge_description" => $this->charge?->description,
            "service_type" => $this->charge?->service_type,
            "charge_category_name" => $this->charge?->chargeCategory->name,
        ];
    }
}
