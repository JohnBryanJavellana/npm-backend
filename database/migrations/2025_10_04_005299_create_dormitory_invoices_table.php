<?php

use App\Models\CashierOR;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    DormitoryTenant,
    DormitoryRoom,
    User,
    Charge
};

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
            $table->foreignIdFor(DormitoryTenant::class);
            $table->foreignIdFor(CashierOR::class)->nullable();
            $table->enum('payment_type', ['ONLINE', 'WALK-IN'])->nullable();
            $table->longText('invoice_reference')->nullable();
            $table->longText('trace_number');
            $table->decimal('total_amount')->default(0.0);
            $table->longText('description')->nullable();
            $table->longText('remarks')->nullable();
            $table->enum('invoice_status', ['PENDING', 'PAID','FOR-VERIFICATION', 'CANCELLED'])->default('PENDING');
            $table->enum('type', ['INCLUSION', 'SERVICE','DORMITORY']);
            $table->timestamp('datePaid')->nullable();
            $table->timestamps();

            // $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            // $table->enum('isInitial', ['Y', 'N']);
            // $table->foreignIdFor(Charge::class)->nullable()->constrained()->cascadeOnDelete();
            // $table->decimal("received_amount", 65, 2)->nullable();
            // $table->decimal("credit_deduction", 65, 2)->nullable();
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
