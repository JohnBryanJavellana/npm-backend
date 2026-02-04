<?php

namespace App\Http\Resources\Trainee\Recreationals;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewRecEquipment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

        return [
            "id" => $this->id,
            "name" => $this->name,
            "category" => $this->category,
            "status" => $this->availability_status,
            "file" => $this->filename,
            "inv_count" => $this->inventories_count,
        ];
    }
}
