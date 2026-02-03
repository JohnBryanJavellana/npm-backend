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
            "amount" => $this->charge,
        ];
    }
}
