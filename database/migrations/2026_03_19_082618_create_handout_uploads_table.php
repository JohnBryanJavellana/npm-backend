<?php

use App\Models\CourseModuleHandouts;
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
        Schema::create('handout_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CourseModuleHandouts::class)->constrained()->cascadeOnDelete();
            $table->text("file_path");
            $table->enum("status", ["ACTIVE","INACTIVE"])->default("ACTIVE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handout_uploads');
    }
};
