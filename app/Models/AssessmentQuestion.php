<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    /** Relation */

    public function options()
    {
        return $this->hasMany(AssessmentOption::class);
    }

    /** Scopes */

    public function scopeSection(Builder $query, $sectionId)
    {
        return $query->where('assessment_section_id', $sectionId);
    }
}
