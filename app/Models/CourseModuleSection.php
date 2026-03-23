<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModuleSection extends Model
{
    use HasFactory;

    protected $fillable = [
        "course_module_id",
        "day_number",
        "label",
        "status",
    ];

    /** Related */

    public function contents()
    {
        return $this->hasMany(CourseContent::class, "course_module_section_id", "id");
    }

    /** Scopes */

    public function scopeForCourseModule(Builder $query, $courseId)
    {
        return $query->where("course_module_id", $courseId);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where("status", RequestStatus::ACTIVE->value);
    }
}
