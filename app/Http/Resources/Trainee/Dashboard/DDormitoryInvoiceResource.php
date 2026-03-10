<?php

namespace App\Http\Resources\Trainee\Dashboard;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DDormitoryInvoiceResource extends JsonResource
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
            "type" => ModuleNameEnum::DORMITORY->value,
            "status" => $this->invoice_status,
            "trace_number" => $this->trace_number,
        ];
    }
}
