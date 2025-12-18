<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LISelectedBook extends Model
{
    use HasFactory;

    public function libraryInvoice () {
        return $this->belongsTo(LibraryInvoice::class, 'library_invoice_id', 'id');
    }

    public function bookReservation () {
        return $this->belongsTo(BookReservation::class, 'book_reservation_id', 'id');
    }
}
