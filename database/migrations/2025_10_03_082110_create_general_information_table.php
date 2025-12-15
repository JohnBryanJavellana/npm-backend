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
        Schema::create('general_informations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->enum('gen_info_status', ['NEW', 'RETURNEE'])->default('NEW')->nullable();
            $table->string('gen_info_trainee_id')->nullable();
            $table->integer('gen_info_srn')->nullable();
            $table->string('gen_info_citizenship')->nullable();
            $table->enum('gen_info_civil_status', ['SINGLE', 'MARRIED', 'WIDOWED', 'DIVORCED', 'SEPARATED'])->nullable();
            $table->string('gen_info_house_no')->nullable();
            $table->string('gen_info_region')->nullable();
            $table->string('gen_info_province')->nullable();
            $table->string('gen_info_municipality')->nullable();
            $table->string('gen_info_barangay')->nullable();
            $table->integer('sameWithCurrentAddress')->nullable();
            $table->string('gen_info_birthplace_region')->nullable();
            $table->string('gen_info_birthplace_province')->nullable();
            $table->string('gen_info_birthplace_municipality')->nullable();
            $table->string('gen_info_birthplace_barangay')->nullable();
            $table->string('gen_info_postal')->nullable();
            $table->string('gen_info_number_one')->nullable();
            $table->string('gen_info_number_two')->nullable();
            $table->string('gen_info_landline')->nullable();
            $table->string('gen_info_facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_informations');
    }
};
