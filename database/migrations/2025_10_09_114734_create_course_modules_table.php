<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ModuleType;

return new class extends Migration
{
    public const COURSE_MODULE_STATUS = ['ACTIVE', 'INACTIVE'];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_modules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(ModuleType::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('acronym');
            $table->integer('number_of_days');
            $table->longText('compendium');
            $table->enum('status', self::COURSE_MODULE_STATUS)->default(self::COURSE_MODULE_STATUS[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_modules');
    }
};
