<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const MODULE_TYPE_STATUS = ['ACTIVE', 'INACTIVE'];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('module_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->enum('status', self::MODULE_TYPE_STATUS)->default(self::MODULE_TYPE_STATUS[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_types');
    }
};
