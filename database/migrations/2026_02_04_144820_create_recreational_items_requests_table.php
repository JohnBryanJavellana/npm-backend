<?php

use App\Models\EquipmentInventory;
use App\Models\RecreationalRequest;
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
        Schema::create('recreational_items_requests', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(RecreationalRequest::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(EquipmentInventory::class)->constrained()->cascadeOnDelete();
            $table->enum("issued_condition", ["Good", "Damaged", "Lost"]);
            $table->enum("returned_condition", ["Available", "Unavailable"]);
            $table->dateTime("issued_at");
            $table->dateTime("returned_at");
            $table->string("remarks", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recreational_items_requests');
    }
};
