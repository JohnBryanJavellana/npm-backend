<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Dormitory;

return new class extends Migration
{
    public const ROOM_TYPE = [
        'AIRCON',
        'NON-AIRCON'
    ];

    public const FOR_GENDER = [
        'MALE',
        'FEMALE'
    ];

    public const FEE_TYPE = [
        'OFFICERS',
        'RATINGS'
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(Dormitory::class)->constrained()->cascadeOnDelete();
            $table->string('room_name', 255);
            $table->integer('room_slot');
            $table->enum('room_status', ['AVAILABLE', 'OCCUPIED', 'RESERVED', 'UNAVAILABLE'])->default('AVAILABLE');
            $table->enum('room_type', self::ROOM_TYPE)->default(self::ROOM_TYPE[1]);
            $table->enum('for_gender', self::FOR_GENDER);
            $table->enum('fee_type', self::FEE_TYPE);
            $table->longText('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_rooms');
    }
};
