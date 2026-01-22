<?php

use App\Models\CashierOR;
use App\Models\Charge;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\EnrolledCourse;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollment_invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Charge::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CashierOR::class)->nullable();
            $table->longText('trace_number')->nullable();
            $table->enum('payment_type', ['ONLINE', 'WALK-IN'])->nullable();
            $table->decimal('invoice_amount', 65, 2)->default(0.00);
            $table->enum('invoice_status', ['PENDING', 'PAID', 'CANCELLED', 'FOR-VERIFICATION'])->default('PENDING');
            $table->string('invoice_reference')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->enum('isExpired', ['YES', 'NO'])->default('NO');
            $table->decimal("received_amount", 65, 2)->nullable();
            $table->decimal("credit_deduction", 65, 2)->nullable();
            $table->timestamp('datePaid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_invoices');
    }
};
