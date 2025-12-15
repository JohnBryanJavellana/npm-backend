<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrainingListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
          return [
            'requirement_id' => $this->id,
            'requirement_name' => $this->name,
            'requirement_description' => $this->description,
            'requirement_is_required' => $this->isRequired,
            'requirement_is_basic' => $this->isBasic,
            'trainee_file_id' => $this->isBasic === 'YES' 
                ? $this->trainee_file?->id
                : $this->uploaded_specific_requirement?->id,
            'requirement_is_locked' => $this->isBasic === 'YES' 
                ? $this->trainee_file?->locked
                : $this->uploaded_specific_requirement?->locked,
            'requirement_remarks' => $this->isBasic === 'YES' 
                ? $this->trainee_file?->remarks
                : $this->uploaded_specific_requirement?->remarks,
            'requirement_status' => $this->status,
            'trainee_requirement' => $this->isBasic === 'YES' 
                ? $this->trainee_file?->filename
                : $this->uploaded_specific_requirement?->filename
        ];
    }
}
