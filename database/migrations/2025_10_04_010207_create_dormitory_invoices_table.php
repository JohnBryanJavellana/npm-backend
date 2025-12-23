<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{DormitoryTenant, DormitoryRoom, User};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->ondelete('cascade');
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->ondelete('cascade');
            $table->foreignIdFor(DormitoryRoom::class)->constrained()->ondelete('cascade');
            $table->enum('payment_type', ['ONLINE', 'WALK-IN'])->nullable();
            $table->longText('invoice_reference')->nullable();
            $table->longText('trace_number');
            $table->decimal('total_amount');
            $table->longText('description');
            $table->enum('invoice_status', ['PENDING', 'PAID','FOR-VERIFICATION'])->default('PENDING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_invoices');
    }
};
