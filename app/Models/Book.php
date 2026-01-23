<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function catalog() {
        return $this->belongsTo(BookCatalog::class, 'book_catalog_id', 'id');
    }

    public function copies() {
        return $this->hasMany(BookCopy::class);
    }

    public function related()
    {
        return $this->hasMany(BookTrainingRelated::class);
    }

    public function hasData() {
        return $this->hasMany(BookReservation::class);
    }

    public function carts()
    {
        return $this->hasMany(BookCart::class);
    }



    /**
     * SCOPES
     */

}
