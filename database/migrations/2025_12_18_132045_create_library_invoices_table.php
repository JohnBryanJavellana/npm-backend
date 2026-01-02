<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{User,BookRes, TrainingFeeCategory};

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
            $table->longText("trace_number");
            $table->longText("reference_number")->nullable();
            $table->foreignIdFor(TrainingFeeCategory::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(BookRes::class)->constrained()->cascadeOnDelete();
            $table->decimal("amount", 65, 2);
            $table->longText("details");
            $table->enum("status", ["PENDING", "PAID", "VERIFICATION"])->default("PENDING");
            $table->enum("payment_type", ["ONLINE", "WALK-IN"])->nullable();
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
