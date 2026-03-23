<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContentUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        "course_content_id",
        "original_filename",
        "filepath",
        "status",
    ];
}
