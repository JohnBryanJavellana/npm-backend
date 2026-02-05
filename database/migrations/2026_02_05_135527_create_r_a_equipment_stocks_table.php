<?php

use App\Models\RAEquipments;
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
        Schema::create('r_a_equipment_stocks', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(RAEquipments::class)->constrained()->cascadeOnDelete();
            $table->longText('unique_identifier');
            $table->enum('condition_status', [
                'GOOD CONDITION',
                'BORROWED',
                'DAMAGED',
                'LOST'
            ])->default('GOOD CONDITION');
            $table->enum('availability_status', [
                'AVAILABLE',
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
        Schema::dropIfExists('r_a_equipment_stocks');
    }
};
