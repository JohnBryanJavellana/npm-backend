<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookService extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function bookReservation()
    {
        return $this->belongsTo(BookReservation::class, "book_reservation_id", "id");
    }

    /** Scopes */

    public function scopeService($query, string $service)
    {
        return $query->where("action", $service);
    }
    public function scopeStatus($query, string $status)
    {
        return $query->where("status", $status);
    }
}
