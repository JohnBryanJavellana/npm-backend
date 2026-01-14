<?php

use App\Models\CourseModule;
use App\Models\User;
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
        Schema::create('training_facilitators', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(CourseModule::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->enum('role', [
                "INSTRUCTOR",
                "ASSESSOR",
                "MODERATOR",
                "MENTOR",
                "COORDINATOR",
                "OBSERVER"
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_facilitators');
    }
};
