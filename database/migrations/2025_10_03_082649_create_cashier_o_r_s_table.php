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
        Schema::create('cashier_o_r_s', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->string("name", 255);
            $table->enum("service_type", [
                "DORMITORY",
                "ENROLLMENT",
                "LIBRARY",
                "RECREATIONAL"
            ]);
            $table->enum("status", [
                "AVAILABLE",
                "UNAVAILABLE"
            ])->default("AVAILABLE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier_o_r_s');
    }
};
