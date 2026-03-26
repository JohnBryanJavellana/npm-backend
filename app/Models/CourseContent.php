<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = [
        "course_module_section_id",
        "title",
        "description",
        "status",
    ];

    /** Related */
    public function uploads()
    {
        return $this->hasMany(CourseContentUpload::class);
    }

    public function assessment()
    {
        return $this->hasMany(Assessments::class);
    }
    /** Scope */

    
}
