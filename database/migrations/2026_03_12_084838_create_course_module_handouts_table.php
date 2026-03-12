<?php

use App\Models\CourseModule;
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
        Schema::create('course_module_handouts', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(CourseModule::class)->constrained()->cascadeOnDelete();
            $table->string("title", 255);
            $table->string("file_path", 255);
            $table->foreignId("uploaded_by")->constrained("users");
            $table->foreignId("updated_by")->constrained("users");
            $table->enum("status", ["ACTIVE","INACTIVE"])->default("ACTIVE");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_module_handouts');
    }
};
