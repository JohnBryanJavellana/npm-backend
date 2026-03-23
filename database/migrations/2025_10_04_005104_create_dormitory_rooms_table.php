<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const DORMITORY = [
        'OFFICERS',
        'RATINGS'
    ];

    public const ROOM_TYPE = [
        'AIRCON',
        'NON-AIRCON'
    ];

    public const WING = [
        'A',
        'B',
        'C',
        'D'
    ];

    public const GUEST_GENDER = [
        'MALE',
        'FEMALE'
    ];

    public const ACCOMMODATION = [
        "SINGLE",
        "SHARED",
        "COUPLE"
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('room_name', 255);
            $table->integer('room_slot');
            $table->enum('dormitory', self::DORMITORY);
            $table->enum('room_type', self::ROOM_TYPE)->default(self::ROOM_TYPE[1]);
            $table->enum('guest_gender', self::GUEST_GENDER);
            $table->enum('wing', self::WING);
            $table->integer('floor');
            $table->enum('accommodation', self::ACCOMMODATION)->default(self::ACCOMMODATION[1]);
            $table->double('room_cost', 65, 2);
            $table->double('guest_cost', 65, 2);
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
