<?php

use App\Models\{DormitoryInventoryItem,DormitoryTenant,DormitoryInventory};
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
        Schema::create('dormitory_item_borrowings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(DormitoryInventory::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(DormitoryInventoryItem::class)->nullable()->constrained()->onDelete('cascade');
            $table->enum("status", ["RETURNED", "DAMAGED", "APPROVED", "PENDING", "LOST"])->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_item_borrowings');
    }
};
