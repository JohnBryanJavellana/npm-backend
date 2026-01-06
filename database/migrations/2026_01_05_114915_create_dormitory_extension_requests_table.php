<?php

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
        Schema::create('dormitory_extension_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->cascadeOnDelete();
            $table->string('trace_number', 255)->nullable();
            $table->enum("status", ['PENDING', 'CANCELLED', 'APPROVED', 'FOR-PAYMENT'])->default('PENDING');
            $table->date('current_to_date');
            $table->date("date_of_extension");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_extension_requests');
    }
};
