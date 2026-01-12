<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableTrainingsResource extends JsonResource
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
            'id' => $this->id,
            'daily_hours' => $this->daily_hours,
            'status' => $this->status,
            'from_date' => $this->schedule_from,
            'to_date' => $this->schedule_to,
            'slot' => $this->schedule_slot,
            'venue' => $this->venue,
            'room' => $this->room,
            'batch_number' => $this->batch_number,
            'schedule_preference' => $this->schedule_preference, 
            'course_module' => [
                'id' => $this->module?->id,
                'name' => $this->module?->name,
                'acronym' => $this->module?->acronym,
                'compendium' => $this->module?->compendium,
                'status' => $this->module?->status,
            ],
            'module_type' => [
                'name' => $this?->module?->moduleType?->name,
                'status' => $this?->module?->moduleType?->status,
            ],
            'fee' => [
                'id' => $this->module?->charge?->id,
                'name' => $this->module?->charge?->name,
                'amount' => $this->module?->charge?->amount,
                'category_name' => $this->module?->charge?->chargeCategory?->name,
            ],
        ];
    }
}


