<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequirementSpecificModule extends Model
{
    use HasFactory;

    public function requirements()
    {
        return $this->belongsTo(Requirement::class, 'requirement_id', 'id');
    }

    public function course_module()
    {
        return $this->belongsTo(CourseModule::class);
    }
}
