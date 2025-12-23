<?php

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
        Schema::create('dormitory_inventories', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string("name", 255);
            $table->integer("stock")->default(0);
            $table->integer("available_stock")->default(0);
            $table->longText("filename")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_inventories');
    }
};
