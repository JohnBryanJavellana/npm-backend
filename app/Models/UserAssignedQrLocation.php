<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAssignedQrLocation extends Model
{
    use HasFactory;

    public function qrLocation() {
        return $this->hasOne(QrReaderLocation::class, 'id', 'qr_reader_location_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
