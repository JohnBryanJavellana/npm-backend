<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTrainingRelated extends Model
{
    use HasFactory;

    public function books(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function training(){
        return $this->belongsTo(Training::class, 'training_id', 'id');
    }
}
