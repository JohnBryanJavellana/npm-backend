<?php

use App\Models\Equipment;
use App\Models\Facility;
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
        Schema::create('related_facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Equipment::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Facility::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_facilities');
    }
};
