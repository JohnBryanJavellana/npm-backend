<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    MainCourse,
    MainSchool
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('educational_attainments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(MainCourse::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(MainSchool::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('school_graduated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_attainments');
    }
};
