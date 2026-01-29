<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{DormitoryRoom, User, DormitoryInvoice};

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
            $table->foreignIdFor(DormitoryRoom::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(DormitoryInvoice::class)->constrained()->cascadeOnDelete();
            $table->string('trace_number', 255)->nullable();
            $table->enum('status_of_occupancy', ['TRAINEE', 'NON-PAYING GUEST/VISITOR', 'NMP PERSONNEL (REGULAR/JOW)', 'PAYING GUEST/VISITOR'])->default('TRAINEE');
            // $table->enum('room_for_type', ['MALE', 'FEMALE', 'COUPLE']);
            $table->enum('transfer_type', ['ROOM', 'CLASS'])->nullable();
            $table->enum('single_accommodation', ['YES', 'NO'])->default('NO');
            $table->enum('is_air_conditioned', ["YES", "NO"]);
            $table->longText("purpose")->nullable();
            $table->longText("remarks")->nullable();
            $table->longText("filename")->nullable();
            $table->date('tenant_from_date')->nullable();
            $table->date('tenant_to_date')->nullable();
            $table->enum('tenant_status', [
                'PENDING',
                'TERMINATED',
                'APPROVED',
                'ACTIVE',
                'CANCELLED',
                'EXTENDING',
                'TRANSFERRING',
                'TRANSFERRED',
                'FOR PAYMENT',
                'REJECTED',
                'PAID',
                "PROCESSING PAYMENT",
                "RESERVED"
            ])->default('PENDING');
            $table->enum('process_type', ["ONLINE", "WALK-IN"])->default("ONLINE");

            // DO NOT REMOVE
            $table->enum('for_slot', ["1", "2", "3"]);
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
