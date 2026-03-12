<?php

use App\Models\AssessmentAttempt;
use App\Models\Assessments;
use App\Models\EnrolledCourse;
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
        Schema::create('assessment_attempts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(Assessments::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->cascadeOnDelete();
            $table->decimal("score",65);
            $table->enum("status", ["IN_PROGRESS","PASSED","FAILED","SUBMITTED","FOR_REMOVAL"]);
            $table->foreignId("graded_by")->constrained("users");
            $table->dateTime("submitted_at");
            $table->dateTime("graded_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_attempts');
    }
};