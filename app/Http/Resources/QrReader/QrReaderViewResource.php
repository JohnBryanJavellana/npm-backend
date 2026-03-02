<?php

namespace App\Http\Resources\QrReader;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QrReaderViewResource extends JsonResource
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
            "first_name" => $this->initiator?->fname,
            "last_name" => $this->initiator?->lname,
            "middle_name" => $this->initiator?->mname,
            "time_in" => $this->check_in,
            "time_out" => $this->check_out,
            "purpose" => $this->purpose,
            "unit_name" => $this->qrLocation?->unit_name,
            "location" => $this->qrLocation?->location,
            "type" => $this->qrLocation?->type,
        ];
    }
}
