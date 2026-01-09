<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User,
    Charge
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Charge::class, 'charge_id_room_cost');
            $table->foreignIdFor(Charge::class, 'charge_id_guest_cost');
            $table->string('room_name');
            $table->longText('room_description');
            $table->enum('room_fee_type',["OFFICERS", "RATINGS"])->nullable();
            $table->enum('is_air_conditioned',["YES", "NO"]);
            $table->enum('room_for_type', ['MALE', 'FEMALE', 'COUPLE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitories');
    }
};
