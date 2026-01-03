<?php

namespace App\Http\Resources\Trainee\Dormitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InclusionRequestsResource extends JsonResource
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
            "req_id" => $this->id,
            "dorm_inv_id" => $this->dormitory_inventory_id,
            "dorm_tenant_id" => $this->dormitory_tenant_id,
            "quantity" => $this->quantity,
            "status" => $this->status,
            "created_at" => $this->created_at,
            "control_number" => $this->itemInfo?->control_number,
            "name" => $this->itemInfo?->name,
            "description" => $this->itemInfo?->description,
            "filename" => $this->itemInfo?->filename,
            "is_consumable" => $this->itemInfo?->is_consumable,
            "price" => $this->itemInfo?->price,
        ];
    }
}
