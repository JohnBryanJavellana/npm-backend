<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    DormitoryItemBorrowing,
    DormitoryInventoryItem
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_item_b_i_s', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryItemBorrowing::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(DormitoryInventoryItem::class)->nullable()->constrained()->onDelete('cascade');
            $table->enum("status", ["RETURNED", "DAMAGED", "APPROVED", "LOST", "ACTIVE", "DONE"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_item_b_i_s');
    }
};
