<?php

use App\Models\DormitoryInventory;
use App\Models\DormitoryTenant;
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
        Schema::create('dormitory_inclusion_requests', function (Blueprint $table) {
            $table->engine = "innoDb";
            $table->id();
            $table->foreignIdFor(DormitoryInventory::class)->constrained()->onDelete("cascade");
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->onDelete("cascade");
            $table->integer("quantity")->default(1);
            $table->enum("status", ["PENDING", "APPROVED", "CANCELLED", "COMPLETED"])->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_inclusion_requests');
    }
};
