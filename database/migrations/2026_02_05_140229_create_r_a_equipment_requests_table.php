<?php

use App\Models\RAEquipmentStock;
use App\Models\RARequestInfo;
use App\Models\User;
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
        Schema::create('r_a_equipment_requests', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(RARequestInfo::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(RAEquipmentStock::class)->constrained()->cascadeOnDelete();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('status', [
                'PENDING',
                'APPROVED',
                'RECEIVED',
                'CANCELLED',
                'RETURNED',
                'DECLINED'
            ])->default('PENDING');
            $table->longText('remarks')->nullable();
            $table->enum('issued_condition', [
                'GOOD CONDITION',
                'DAMAGED'
            ])->nullable();
            $table->enum('returned_condition', [
                'GOOD CONDITION',
                'DAMAGED',
                'LOST'
            ])->nullable();
            $table->dateTime('issued_at')->nullable();
            $table->dateTime('returned_at')->nullable();
            $table->foreignIdFor(User::class, 'updated_by_whom')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_equipment_requests');
    }
};
