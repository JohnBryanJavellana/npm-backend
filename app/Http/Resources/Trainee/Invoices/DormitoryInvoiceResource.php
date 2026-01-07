<?php

namespace App\Http\Resources\Trainee\Invoices;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DormitoryInvoiceResource extends JsonResource
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
            "tenant_id" => $this->dormitory_tenant_id,
            "room_id" => $this->dormitory_room_id,
            "trace_number" => $this->trace_number,
            "reference_id" => $this->invoice_reference,
            "payment_type" => $this->payment_type,  
            "amount" => $this->invoice_amount,  
            "description" => $this->description,  
            "remarks" => $this->remarks,  
            "status" => $this->invoice_status,  
            "created_at" => $this->created_at,  
        ];
    }
}
