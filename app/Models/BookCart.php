<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCart extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $fillable = [
        "user_id",
        "book_id",
    ];
    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function copiess()
    {
        return $this->hasManyThrough(Book::class, BookCopy::class, "book_id", "id");
    }

    public function number()
    {
        return $this->books?->copies()?->count();
    }
}
