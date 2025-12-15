<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

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
            $table->foreignIdFor(User::class)->constrained()->ondelete('cascade');
            $table->string('room_name');
            $table->longText('room_description');
            $table->decimal('room_cost', 10, 2)->default(0.00);
            $table->enum('room_fee_type',["OFFICERS", "RATINGS"])->nullable();
            $table->enum('room_type',[
                "TRAINEES ENROLLED AIR-CONDITIONED",
                "TRAINEES ENROLLED NON-AIRCON",
                "GUESTS AIR-CONDITIONED",
                "GUESTS NON-AIRCON"
            ]);
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
