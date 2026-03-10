<?php

namespace App\Http\Resources\Trainee\Dashboard;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DormitoryTenantResource extends JsonResource
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
            "title" => $this->dormitory_room?->room_name,
            "type" => ModuleNameEnum::DORMITORY->value,
            "start" => $this->tenant_from_date,
            "end" => $this->tenant_to_date,
            "status" => $this->tenant_status,
        ];
    }
}
