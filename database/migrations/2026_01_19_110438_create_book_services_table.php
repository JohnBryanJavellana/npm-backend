<?php

use App\Models\{BookReservation, User};
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
        Schema::create('book_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BookReservation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            // $table->foreignIdFor(User::class, "processed_by")->nullable();
            $table->enum("action", ["RENEW", "EXTEND"]);
            $table->dateTime("old_to_date");
            $table->enum("status", ["APPROVED", "CANCELLED", "REJECTED", "PENDING", "COMPLETED"])->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_services');
    }
};
