<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCatalog extends Model
{
    use HasFactory;

    public function genre () {
        return $this->hasOne(BookGenre::class, 'id', 'book_genre_id');
    }
}
