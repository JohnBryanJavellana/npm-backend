<?php

namespace App\Http\Resources\Trainee\Dashboard;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DLibraryInvoiceResource extends JsonResource
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
            "type" => ModuleNameEnum::LIBRARY->value,
            "status" => $this->invoice_status,
            "trace_number" => $this->trace_number,
        ];
    }
}
