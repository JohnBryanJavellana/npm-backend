<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User,
    BookRes,
    Charge
};


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('library_invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(Charge::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(BookRes::class)->constrained()->cascadeOnDelete();
            $table->longText("trace_number");
            $table->longText("reference_number")->nullable();
            $table->decimal("amount", 65, 2);
            $table->longText("details");
            $table->longText("remarks")->nullable();
            $table->enum("status", ["PENDING", "PAID", "VERIFICATION"])->default("PENDING");
            $table->enum("payment_type", ["ONLINE", "WALK-IN"])->nullable();
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
        Schema::dropIfExists('library_invoices');
    }
};
