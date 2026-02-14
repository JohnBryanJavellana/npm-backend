<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Dormitory;

return new class extends Migration
{
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
            $table->integer('room_available_slot');
            $table->enum('room_status', ['AVAILABLE', 'OCCUPIED', 'RESERVED', 'UNAVAILABLE'])->default('AVAILABLE');
            $table->enum('is_air_conditioned',["YES", "NO"]);
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
