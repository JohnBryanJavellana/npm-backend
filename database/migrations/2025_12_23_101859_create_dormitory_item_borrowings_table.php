<?php

use App\Models\{DormitoryInventory,DormitoryTenant};
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
            $table->integer("item_count")->default(0);
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
