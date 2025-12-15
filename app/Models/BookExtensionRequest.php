<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookExtensionRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // added by king.01 👑
    public function bookReservation () {
        return $this->hasOne(BookReservation::class, 'id', 'book_reservation_id');
    }

    // added by king.01 👑
    public function extensionRequest () {
        return $this->belongsTo(ExtensionRequest::class, 'extension_request_id', 'id');
    }
}
