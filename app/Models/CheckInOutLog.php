<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInOutLog extends Model
{
    use HasFactory;

    public function initiator() {
        return $this->hasOne(User::class);
    }

    public function qrLocation() {
        return $this->hasOne(QrReaderLocation::class);
    }
}
