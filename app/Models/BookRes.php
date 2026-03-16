<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function borrowedBooks() {
        return $this->hasMany(BookReservation::class, 'book_res_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}