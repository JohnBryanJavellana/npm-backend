<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{DormitoryRoom, DormitoryTenant, User};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_transfers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class,'processed_by')->nullable();
            $table->longText('trace_number')->nullable();
            // $table->enum('transfer_type', ['ROOM', 'CLASS']);
            $table->enum('room_for_type', ['MALE', 'FEMALE', 'COUPLE']);
            $table->enum('room_type', ["AIR-CONDITIONED", "NON-AIRCON"]);
            $table->enum("status", ['PENDING', 'CANCELLED', 'APPROVED'])->default('PENDING');
            $table->longText("reason")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_transfers');
    }
};
