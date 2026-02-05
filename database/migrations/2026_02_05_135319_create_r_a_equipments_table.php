<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('r_a_equipments', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->string('name', 255);
            $table->longText('additional_details')->nullable();
            $table->enum('availability_status', [
                'AVAILABLE',
                'UNAVAILABLE'
            ])->default('AVAILABLE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_equipments');
    }
};
