<?php

use App\Models\CashierOR;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    DormitoryTenant,
    User
};

return new class extends Migration
{
    public const PAYMENT_TYPE = [
        'ONLINE',
        'WALK-IN'
    ];

    public const INVOICE_STATUS = [
        'PENDING',
        'PAID',
        'FOR-VERIFICATION',
        'CANCELLED'
    ];

    public const INVOICE_TYPE = [
        'INCLUSION',
        'SERVICE',
        'DORMITORY',
        'EXTENSION',
        'TRANSFER',
        'OTHERS'
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryTenant::class)->constrained('dormitory_tenants')->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(CashierOR::class)->nullable()->constrained('cashier_o_r_s')->cascadeOnDelete();
            $table->string('invoice_reference', 255)->unique()->nullable();
            $table->string('trace_number', 255)->unique();
            $table->integer('paying_as_trainee_days')->nullable();
            $table->decimal('paying_as_trainee_amount', 65, 2)->default(0.0);
            $table->integer('paying_as_guest_days')->nullable();
            $table->decimal('paying_as_guest_amount', 65, 2)->default(0.0);
            $table->decimal('invoice_amount', 65, 2)->default(0.0);
            $table->decimal('received_amount', 65, 2)->default(0.0);
            $table->longText('description')->nullable();
            $table->longText('remarks')->nullable();
            $table->dateTime('datePaid')->nullable();
            $table->enum('payment_type', self::PAYMENT_TYPE)->nullable();
            $table->enum('invoice_status', self::INVOICE_STATUS)->default(self::INVOICE_STATUS[0]);
            $table->enum('type', self::INVOICE_TYPE);
            $table->timestamps();
            $table->softDeletes();
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
