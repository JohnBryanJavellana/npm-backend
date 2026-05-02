<?php

namespace App\Http\Resources\Trainee\Enrollment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseModuleResource2 extends JsonResource
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
            "id" => $this->facilitator[0]?->id,
            "name" => $this->name,
            "acronym" => $this->acronym,
            "bgColor" => $this->facilitator[0]?->bgColor,
            "type" => $this->moduleType?->name,
            "compendium" => $this->compendium,
            "price" => $this->trainingFees?->first()?->amount,
        ];
    }
}
