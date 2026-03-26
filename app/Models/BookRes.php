<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class BookRes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function borrowedBooks() {
        return $this->hasMany(BookReservation::class, 'book_res_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    //SCOPES
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
    public function scopeForStatus($query, $status)
    {
        return $query->whereIn('status', $status);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where("status", RequestStatus::ACTIVE->value);
    }

    public function scopeHasApprovedBooks(Builder $query)
    {
        return $query->whereHas("borrowedBooks",  fn($q) => $q->activeReservation());
    }
}
