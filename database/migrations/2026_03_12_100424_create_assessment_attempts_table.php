<?php

use App\Models\AssessmentAttempt;
use App\Models\Assessments;
use App\Models\EnrolledCourse;
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
        Schema::create('assessment_attempts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(Assessments::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->cascadeOnDelete();
            $table->decimal("score", 65)->nullable();
            $table->enum("status", ["IN_PROGRESS","PASSED","FAILED","SUBMITTED","FOR_REMOVAL"]);
            $table->foreignId("graded_by")->nullable()->constrained("users")->cascadeOnDelete();
            $table->foreignIdFor(User::class, "created_by")->constrained()->cascadeOnDelete();
            $table->dateTime("submitted_at")->nullable();
            $table->dateTime("graded_at")->nullable();
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
