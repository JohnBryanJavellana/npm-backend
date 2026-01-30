<?php

namespace App\Http\Resources\Trainee\Enrollment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewTraineeRecResource extends JsonResource
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
            "enrolled_course_id" => $this->id,
            "bgColor" => $this->bgColor,
            "enrolled_course_status" => $this->enrolled_course_status,
            "request_at" => $this->created_at,
            "training_id" => $this->training_id,
            "training_instructor" => $this->training?->module?->facilitator?->map(function ($user) {
                return [
                    "name" => $user?->facilitator?->fname . " " . $user?->facilitator?->mname . " " .  $user?->facilitator?->lname,
                    "role" => $user->role,
                    "email" => $user?->facilitator?->email,
                ];
            }),
            "training_status" => $this->training?->status,
            "daily_hours" => $this->training?->daily_hours,
            "schedule_from" => $this->training?->schedule_from,
            "schedule_to" => $this->training?->schedule_to,
            "venue" => $this->training?->venue,
            "room" => $this->training?->room,
            "schedule_preference" => $this->training?->schedule_preference,
            "batch_number" => $this->training?->batch_number,
            "course_module_id" => $this->training?->course_module_id,
            
            "module_name" => $this->training?->module?->name,
            "acronym" => $this->training?->module?->acronym,
            "compendium" => $this->training?->module?->compendium,
            "module_type" => $this->training?->module->moduleType->name,

            "charge_name" => $this->training?->module?->trainingFees?->first()?->name,
            "charge_amount" => $this->training?->module?->trainingFees?->first()?->amount,
            "charge_category_name" => $this->training?->module?->trainingFees?->first()?->category?->name,
            // "requirements" => $this-
        ];

    }
}
