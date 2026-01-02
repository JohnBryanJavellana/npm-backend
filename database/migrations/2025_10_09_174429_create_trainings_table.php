<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CourseModule;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(CourseModule::class)->constrained()->cascadeOnDelete();
            $table->integer('daily_hours');
            $table->date('schedule_from');
            $table->date('schedule_to');
            $table->integer('schedule_slot')->default(1);
            $table->string('venue');
            $table->string('room');
            $table->string('batch_number');
            $table->enum('schedule_preference', ['FACE TO FACE', 'ONLINE']);
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
