<?php

namespace App\Http\Resources\Trainee\Dashboard;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnrolledCourseResource extends JsonResource
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
            "title" => $this->training?->id,
            "type" => ModuleNameEnum::ENROLLMENT->value,
            "start" => $this->training?->schedule_from,
            "end" => $this->training?->schedule_to,
            // "venue" => $this->training?->venue,
            // "room" => $this->training?->room,
            // "batch" => $this->training?->batch_number,
        ];
    }
}
