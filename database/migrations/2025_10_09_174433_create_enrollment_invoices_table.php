<?php

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
            $table->foreignIdFor(EnrolledCourse::class)->constrained()->ondelete('cascade');
            $table->longText('trace_number')->nullable();
            $table->enum('payment_type', ['ONLINE', 'WALK-IN'])->nullable();
            $table->decimal('invoice_amount', 10, 2)->default(0.00);
            $table->enum('invoice_status', ['PENDING', 'PAID', 'CANCELLED', 'FOR-VERIFICATION'])->default('PENDING');
            $table->string('invoice_reference')->nullable();
            $table->dateTime('invoice_date')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->enum('isExpired', ['YES', 'NO'])->default('NO');
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
