<?php

namespace App\Http\Resources\Trainee\Enrollment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RequirementListResource extends JsonResource
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
            'requirement_id' => $this->id,
            'requirement_name' => $this->name,
            'requirement_description' => $this->description,
            'requirement_is_required' => $this->isRequired,
            'requirement_is_basic' => $this->isBasic,
            'reference' => $this->upload_reference,
            'requirement_status' => $this->status,
            "trainee_file_id" => $this->when(
                $this->isBasic === "YES",
                fn() => $this->trainee_file?->first()?->id
            ),
            "requirement_is_locked" => $this->when(
                $this->isBasic === "YES",
                fn() => $this->trainee_file?->first()?->locked
            ),
            "requirement_remarks" => $this->when(
                $this->isBasic === "YES",
                fn() => $this->trainee_file?->first()?->remarks
            ),
            "trainee_requirement" => $this->when(
                $this->isBasic === "YES",
                fn() => $this->trainee_file?->first()?->filename
            ),
        ];
    }
}