<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SelectedTrainingResource extends JsonResource
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
             "selected_course" => [
                "enrolled_course" => $this->id,
                "training_id" => $this->training_id,
                "bgColor" => $this->bgColor,
                "enrolled_course_status" => $this->enrolled_course_status,
             ],
             "training" => [
                 "course_id" => $this->training?->course_module_id,
                 "course_module" => $this->training?->course_module?->name,
                 "course_module_type" => $this->training?->moduleType?->name,
                 "course_acronym" => $this->training?->course_module?->acronym,
                 "course_compendium" => $this->training?->course_module?->compendium,
                 "course_status" => $this->training?->course_module?->status,
                 "course_daily_hours" => $this->training?->daily_hours,
             ],
             "requirements" => $this->requirement,
             "invoice_id" => $this->invoice?->id
        ];
    }
}
