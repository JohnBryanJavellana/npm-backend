<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    BookRes,
    BookCopy,
    Book
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_reservations', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(BookRes::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(BookCopy::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Book::class)->constrained()->cascadeOnDelete();
<<<<<<< HEAD
            $table->enum("type", ["SOFT-COPY", "HARD-COPY"])->default('HARD-COPY');
=======
            $table->enum("type", ["SOFT-COPY", "HARD-COPY"])->default('hard-copy');
>>>>>>> library
            $table->enum('status', [
                'PENDING',
                'APPROVED',
                'REJECTED',
                'CANCELLED',
                'RETURNED',
                'RECEIVED',
                'LOST',
                'DAMAGED',
                'EXPIRED',
                'EXTENDING',
                'RENEWING'
            ])->default('PENDING');
            $table->timestamp('from_date');
            $table->timestamp('to_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_reservations');
    }
};
