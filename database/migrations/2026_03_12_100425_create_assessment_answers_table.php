<?php

use App\Models\AssessmentAttempt;
use App\Models\AssessmentOption;
use App\Models\AssessmentQuestion;
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
        Schema::create('assessment_answers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(AssessmentAttempt::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(AssessmentQuestion::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(AssessmentOption::class)->constrained()->cascadeOnDelete();
            $table->longText("answer_text");
            $table->decimal("score",65);
            $table->boolean("is_correct")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_answers');
    }
};
