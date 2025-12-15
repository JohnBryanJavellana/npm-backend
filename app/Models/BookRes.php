<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRes extends Model
{
    use HasFactory;


    //RELATIONS
    public function borrowedBooks() {
        return $this->hasMany(BookReservation::class);
    }

    public function csm()
    {
        return $this->hasOne(CSM::class, 'reference_id', 'id');
    }

    public function trainee() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // from king.01 👑
    public function extensionRequest() {
        return $this->hasMany(ExtensionRequest::class, 'book_res_id', 'id');
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
}
