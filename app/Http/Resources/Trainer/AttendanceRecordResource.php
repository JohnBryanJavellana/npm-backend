<?php

namespace App\Http\Resources\Trainer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceRecordResource extends JsonResource
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
            'training_id'  => $this->training_id ?? null,
            'attendance_id' => $this->id,
            'date' => $this->training_date,
            'created_at' => $this->created_at,
            'trainees' => $this->attendance_records->map(function ($item) {
                return [
                    'fname'    => $item->user->fname ?? null,
                    'lname'    => $item->user->lname ?? null,
                    'mname'    => $item->user->mname ?? null,
                    'status'       => $item->status,
                    'time_in'      => $item->time_in,
                    'time_out'     => $item->time_out,
                ];
            })
        ];
    }
}