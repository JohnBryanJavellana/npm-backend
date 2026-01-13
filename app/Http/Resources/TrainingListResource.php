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

        // return parent::toArray($request);

          return [
            'requirement_id' => $this->id,
            'requirement_name' => $this->name,
            'requirement_description' => $this->description,
            'requirement_is_required' => $this->isRequired,
            'requirement_is_basic' => $this->isBasic,
            'trainee_file_id' => $this->isBasic === 'YES' 
                //hasMany
                ? $this->trainee_file()->latest()->first()?->id
                : $this->uploaded_specific_requirement()->latest()->first()?->id,
            'requirement_is_locked' => $this->isBasic === 'YES' 
                //hasMany
                ? $this->trainee_file()->latest()->first()?->locked
                : $this->uploaded_specific_requirement()->latest()->first()?->locked,
            'requirement_remarks' => $this->isBasic === 'YES' 
                //hasMany
                ? $this->trainee_file()->latest()->first()?->remarks
                : $this->uploaded_specific_requirement()->latest()->first()?->remarks,
            'requirement_status' => $this->status,
            'trainee_requirement' => $this->isBasic === 'YES' 
                //hasMany
                ? $this->trainee_file()->latest()->first()?->filename
                : $this->uploaded_specific_requirement()->latest()->first()?->filename
        ];
    }
}
