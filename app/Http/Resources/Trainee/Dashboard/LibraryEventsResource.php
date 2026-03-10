<?php

namespace App\Http\Resources\Trainee\Dashboard;

use App\Enums\ModuleNameEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibraryEventsResource extends JsonResource
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
            // "book_request_id" => $this->book_res_id,
            "title" => $this->books?->catalog?->title,
            "type" => ModuleNameEnum::LIBRARY->value,
            "start" => $this->from_date,
            "end" => $this->to_date
        ];
    }
}
