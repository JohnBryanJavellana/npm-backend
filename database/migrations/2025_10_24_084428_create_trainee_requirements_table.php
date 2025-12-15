<?php

use App\Models\{EnrolledCourse, Requirement};
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
        Schema::create('trainee_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->onDelete('CASCADE');
            $table->foreignIdFor(Requirement::class)->constrained()->onDelete('CASCADE');
            $table->longText('filename')->nullable();
            $table->longText('remarks')->nullable();
            $table->enum('locked', ['Y', 'N'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_requirements');
    }
};
