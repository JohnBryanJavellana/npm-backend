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
        Schema::create('contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('person_name')->nullable();
            $table->string('person_address')->nullable();
            $table->string('person_relationship')->nullable();
            $table->string('person_email')->nullable();
            $table->string('person_number_one')->nullable();
            $table->string('person_number_two')->nullable(); 
            $table->string('person_landline')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
