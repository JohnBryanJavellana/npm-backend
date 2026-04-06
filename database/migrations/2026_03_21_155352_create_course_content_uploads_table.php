<?php

use App\Models\CourseContent;
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
        Schema::create('course_content_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CourseContent::class)->constrained()->cascadeOnDelete();
            $table->string("original_filename", 255);
            $table->string("filepath", 255);
            $table->enum("status", ["ACTIVE","INACTIVE"])->default("ACTIVE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_content_uploads');
    }
};
