<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',   // the creator/sender
        'to_user',   // the recipient
        'type',
        'message',
        'is_read',
    ];

    // RELATIONS

    // The sender of the notification
    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // The recipient of the notification (optional)
    public function recipient()
    {
        return $this->belongsTo(User::class, 'to_user');
    }
}