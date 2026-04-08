<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const SERVICE_STATUS = [
        "AVAILABLE",
        "UNAVAILABLE"
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_services', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->double('charge', 65, 2);
            $table->longText('description')->nullable();
            $table->enum("status", self::SERVICE_STATUS)->default(self::SERVICE_STATUS[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_services');
    }
};
