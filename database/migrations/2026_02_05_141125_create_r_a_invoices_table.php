<?php

use App\Models\CashierOR;
use App\Models\RARequestInfo;
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
        Schema::create('r_a_invoices', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(RARequestInfo::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CashierOR::class)->nullable();
            $table->longText('description');
            $table->longText('trace_number')->nullable();
            $table->enum('payment_type', ['ONLINE', 'WALK-IN'])->nullable();
            $table->decimal('invoice_amount', 65, 2)->default(0.00);
            $table->enum('invoice_status', ['PENDING', 'PAID', 'CANCELLED', 'FOR-VERIFICATION'])->default('PENDING');
            $table->string('invoice_reference')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->timestamp('datePaid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_invoices');
    }
};
