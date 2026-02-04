<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Equipment;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipment_inventories', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(Equipment::class)->constrained()->cascadeOnDelete();
            $table->string("unique_identifier")->unique();
            $table->enum("condition_status", ["Good", "Damaged", "Lost"]);
            $table->enum("availability_status", ["Available", "Unavailable"]);
            $table->decimal("purchase_price", 65, 2 )->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_inventories');
    }
};
