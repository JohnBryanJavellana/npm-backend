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
        return [
            'training_id'   => $this->training_id ?? null,
            'attendance_id' => $this->id,
            'date'          => $this->training_date,
            'created_at'    => $this->created_at,
            'trainees'      => $this->attendance_records->map(function ($item) {
                $trainee = $item->enrolled_course->trainee ?? null;

                return [
                    'id' => $item->user_id ?? $trainee->id,
                    'fname'    => $trainee->fname ?? null,
                    'lname'    => $trainee->lname ?? null,
                    'mname'    => $trainee->mname ?? null,
                    'suffix'    => $trainee->suffix ?? null,
                    'status'   => $item->status,
                    'time_in'  => $item->time_in,
                    'time_out' => $item->time_out,
                ];
            }),
        ];
    }
}