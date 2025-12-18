<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryInvoice extends Model
{
    use HasFactory;

    public function payee () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function bookRes () {
        return $this->belongsTo(BookRes::class, 'book_res_id', 'id');
    }

    public function selectedBooks () {
        return $this->hasMany(LISelectedBook::class);
    }
}
