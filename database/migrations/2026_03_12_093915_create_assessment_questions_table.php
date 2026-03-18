<?php

use App\Models\Assessments;
use App\Models\AssessmentSection;
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
        Schema::create('assessment_questions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(AssessmentSection::class)->constrained()->cascadeOnDelete();
            $table->foreignId("updated_by")->nullable()->constrained("users");
            $table->longText("question");
            $table->enum("type", ["MCQ","TRUE_FALSE","ESSAY"]);
            $table->decimal("score",65);
            $table->enum("status", ["ACTIVE", "INACTIVE"])->default("ACTIVE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_questions');
    }
};
