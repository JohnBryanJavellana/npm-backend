<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function library() {
        return $this->hasOne(BookRes::class, 'id', 'book_res_id');
    }

    // added by king.01 👑
    public function extendingBooks () {
        return $this->hasMany(BookExtensionRequest::class);
    }
}
