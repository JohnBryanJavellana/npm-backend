<?php

use App\Models\{BookReservation, ExtensionRequest};
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
        Schema::create('book_extension_requests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(BookReservation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ExtensionRequest::class)->constrained()->cascadeOnDelete();
            $table->date('current_to_date');
            $table->date('date_of_extension');
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED', 'CANCELLED'])->default('PENDING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_extension_requests');
    }
};
