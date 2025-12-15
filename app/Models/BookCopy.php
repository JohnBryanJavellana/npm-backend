<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCopy extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hasData() {
        return $this->hasMany(BookReservation::class);
    }

    public function book () {
        return $this->belongsTo(Book::class, "book_id", "id");
    }
}
