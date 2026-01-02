<?php

use App\Models\DormitoryInventory;
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
        Schema::create('dormitory_inventory_items', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(DormitoryInventory::class)->constrained()->cascadeOnDelete();
            $table->string('unique_identifier');
            $table->enum('status', [
                'AVAILABLE',
                'BORROWED',
                'LOST',
                'DAMAGED',
                'RESERVED',
                'UNAVAILABLE'
            ])->default('AVAILABLE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_inventory_items');
    }
};
