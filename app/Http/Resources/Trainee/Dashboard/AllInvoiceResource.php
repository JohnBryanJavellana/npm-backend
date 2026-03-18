<?php

namespace App\Http\Resources\Trainee\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllInvoiceResource extends JsonResource
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
            "type" => $this->type ?? $this->payment_type ?? null,
            "status" => $this->status,
            "amount" => $this->invoice_amount,
            "trace_number" => $this->trace_number,
        ];
    }
}
