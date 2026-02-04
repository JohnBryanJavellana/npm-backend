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
        Schema::create('equipment', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->string("name", 255);
            $table->enum("category", ["Sports", "Gym", "Indoor", "Outdoor", "Etc"]);    
            $table->enum("availability_status", ["Available", "Unavailable"]);    
            $table->boolean("requires_approval");    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
