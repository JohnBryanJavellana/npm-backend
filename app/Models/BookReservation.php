<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $notInUseStatus = ["CANCELLED", "RETURNED", "REJECTED", "LOST", "DAMAGED"];

    /**
     * RELATIONS
     */
    public function book() {
        return $this->hasOne(BookCopy::class, 'id', 'book_copy_id');
    }

    public function bookRes() {
        return $this->belongsTo(BookRes::class, 'book_res_id', 'id');
    }

    public function books() {
        return $this->belongsTo(Book::class, "book_id", "id");
    }

    public function fines() {
        return $this->hasMany(LISelectedBook::class, 'book_reservation_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(BookService::class, "book_reservation_id", "id");
    }

    /**
     * SCOPES
     * Added by king.02 👑
     */

    public function scopeForUser($query, $userId)
    {
        return $query->whereHas('bookRes', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });
    }

    //CHANGE 11:53 061225
    public function scopeIsOverDue($query, $userId)
    {
        return $query->whereHas('bookRes', function ($q) use ($userId) {
            $q->forUser($userId)->where('to_date', '<', now());
        });
    }

    public function scopeForStatus($query, $status)
    {
        return $query->whereIn('status', $status);
    }

    public function scopeForNotInUse($query)
    {
        return $query->whereNotIn('status', $this->notInUseStatus);
    }
}
