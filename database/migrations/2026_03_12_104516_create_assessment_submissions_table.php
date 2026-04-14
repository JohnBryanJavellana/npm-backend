<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    Assessments,
    EnrolledCourse
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assessment_submissions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(Assessments::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, "created_by")->constrained("users")->cascadeOnDelete();
            $table->foreignIdFor(User::class, "graded_by")->constrained("users")->cascadeOnDelete();
            $table->longText("file_path");
            $table->decimal("score", 65);
            $table->dateTime("graded_at")->nullable();
            $table->dateTime("submitted_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_submissions');
    }
};
