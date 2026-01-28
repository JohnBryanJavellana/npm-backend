<?php

use App\Models\ChargeCategory;
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
        Schema::create('course_module_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CourseModule::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ChargeCategory::class)->constrained()->cascadeOnDelete();
            $table->string("name")->nullable();
            $table->double("amount", 65,2 )->default(0.0);
            $table->enum("status", ["ACTIVE", "INACTIVE"])->default("ACTIVE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_module_fees');
    }
};
