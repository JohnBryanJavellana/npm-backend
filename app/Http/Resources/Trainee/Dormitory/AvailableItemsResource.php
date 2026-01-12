<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableItemsResource extends JsonResource
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
            "control_number" => $this->control_number,
            "name" => $this->name,
            "is_consumable" => $this->is_consumable,
            "description" => $this->description,
            "filename" => $this->filename,
            "charge_id" => $this->charge?->id,
            "charge_name" => $this->charge?->name,
            "amount" => $this->charge?->amount,
            "charge_description" => $this->charge?->description,
            "service_type" => $this->charge?->service_type,
            "category" => $this->charge?->chargeCategory?->name,
        ];
    }
}
