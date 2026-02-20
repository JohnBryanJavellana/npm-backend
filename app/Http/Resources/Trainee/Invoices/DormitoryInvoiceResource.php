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
        return parent::toArray($request);

        return [
            "id" => $this->id,
            "tenant_id" => $this->dormitory_tenant_id,
            "room_id" => $this->dormitory_room_id,
            "trace_number" => $this->trace_number,
            
            "reference_id" => ($this->payment_type === "WALK-IN" && empty($this->reference_id)) 
                ? $this->orNumber?->name  
                : $this->invoice_reference ?? null,

            "payment_type" => $this->payment_type,
            "final_amount" => $this->total_amount,
            "description" => $this->description,
            "remarks" => $this->remarks,
            "status" => $this->invoice_status,  
            "datePaid" => $this->datePaid,
            "type" => $this->type,
            "charge_name" => $this->charge?->name,
            "charge_amount" => $this->charge?->amount,
            "charge_description" => $this->charge?->description,
            "service_type" => $this->charge?->service_type,
            "charge_category_name" => $this->charge?->chargeCategory?->name,
            "created_at" => $this->created_at,
        ];
    }
}
