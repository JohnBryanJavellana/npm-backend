<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    CourseContent,
    Training
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->longText("control_number");
            $table->foreignIdFor(CourseContent::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string("title");
            $table->text("description");
            $table->longText("instructions");
            $table->enum("type", ["EXAM", "QUIZ", "ASSIGNMENTS", "ACTIVITY"]);
            $table->enum("passed_type", ["questionnaire", "file_upload"]);
            $table->integer("passing_score")->nullable();
            // $table->dateTime("start_date");
            // $table->dateTime("end_date");
            $table->bigInteger("time_limit");
            $table->foreignId("created_by")->constrained("users");
            $table->enum("status", ["ACTIVE", "INACTIVE"])->default("ACTIVE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
