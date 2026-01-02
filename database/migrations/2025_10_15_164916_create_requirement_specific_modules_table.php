<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    Requirement,
    CourseModule
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requirement_specific_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Requirement::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CourseModule::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirement_specific_modules');
    }
};
