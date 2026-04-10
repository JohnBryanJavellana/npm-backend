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
    public const PROCESS_TYPE = ["WALK-IN", "ONLINE"];
    public const BOOK_TYPE = ["SOFT-COPY", "HARD-COPY"];
    public const BOOK_STATUS = [
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
        'EXTENDED',
        'RENEWING'
    ];

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
            $table->timestamp('from_date');
            $table->timestamp('to_date');
            $table->enum('process_type', self::PROCESS_TYPE);
            $table->enum("type", self::BOOK_TYPE);
            $table->enum('status', self::BOOK_STATUS)->default(self::BOOK_STATUS[0]);
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
