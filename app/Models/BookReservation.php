<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BookReservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['from_date','to_date','created_at','updated_at'];

    protected $casts = [
        'from_date' => 'datetime',
        'to_date' => 'datetime',
    ];

    protected $notInUseStatus = ["CANCELLED", "RETURNED", "REJECTED", "LOST", "DAMAGED"];
    

    /**
     * RELATIONS
     */
    public function bookCopy() {
        return $this->belongsTo(BookCopy::class, 'book_copy_id', 'id');
    }

    public function bookRes() {
        return $this->belongsTo(BookRes::class, 'book_res_id', 'id');
    }

    public function book() {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
    

    /**
     * SCOPES
     */
    public function scopeForUser($query, $userId) {
        return $query->whereHas('bookRes', fn($q) => $q->where('user_id', $userId));
    }

    public function scopeIsOverDue($query, $userId) {
        return $query->whereHas('bookRes', fn($q) => $q->forUser($userId)->where('to_date', '<', Carbon::now()));
    }

    public function scopeForStatus($query, $status) {
        return $query->whereIn('status', $status);
    }

    public function scopeForNotInUse($query) {
        return $query->whereNotIn('status', $this->notInUseStatus);
    }

    public function getBookTitleAttribute()
    {
        return $this->bookCopy?->book?->catalog?->title
            ?? $this->book?->catalog?->title
            ?? 'Your reserved book';
    }
}