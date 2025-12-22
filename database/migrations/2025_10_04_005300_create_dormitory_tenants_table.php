<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{DormitoryRoom, User};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_tenants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryRoom::class)->nullable()->constrained()->ondelete('cascade');
            $table->foreignIdFor(User::class)->constrained()->ondelete('cascade');
            $table->enum('room_for_type', ['MALE', 'FEMALE', 'COUPLE']);
            $table->enum('transfer_type', ['ROOM', 'CLASS'])->nullable();
            $table->enum('single_occupancy', ['YES', 'NO'])->default('NO');
            $table->enum('is_air_conditioned', ["YES", "NO"]);
            $table->longText("purpose")->nullable();
            $table->longText("filename")->nullable();
            $table->date('tenant_from_date')->nullable();
            $table->date('tenant_to_date')->nullable();
            $table->enum('tenant_status', [
                'PENDING',
                'TERMINATED',
                'APPROVED',
                'CANCELLED',
                'EXTENDING',
                'TRANSFERRED',
                'FOR PAYMENT',
                'REJECTED',
                'PAID',
                "PROCESSING PAYMENT"
            ])->default('PENDING');
            $table->enum('process_type', ["ONLINE", "WALK-IN"])->default("ONLINE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_tenants');
    }
};
