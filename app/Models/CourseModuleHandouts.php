<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModuleHandouts extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function upload()
    {
        return $this->hasMany(HandoutUpload::class);
    }

    public function uploaded_by()
    {
        return $this->belongsTo(User::class, "uploaded_by", "id");
    }

    public function updated_by()
    {
        return $this->belongsTo(User::class, "updated_by", "id");
    }

    /**
     * Scope
     */

    public function scopeCourseModule(Builder $query, $course)
    {
        return $query->where("course_module_id", $course);
    }
}
