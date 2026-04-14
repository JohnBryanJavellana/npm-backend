<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAbstract;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function catalog()
    {
        return $this->belongsTo(BookCatalog::class, 'book_catalog_id', 'id');
    }

    public function copies()
    {
        return $this->hasMany(BookCopy::class);
    }

    public function related()
    {
        return $this->hasMany(BookTrainingRelated::class);
    }

    public function trainings() {
        return $this->belongsToMany(BookTrainingRelated::class, 'book_training_related', 'book_id', 'training_id');
    }

    public function hasData()
    {
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
