<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User
};

return new class extends Migration
{
    public const BOOK_RES_STATUS = [
        "ACTIVE",
        "FOR CSM",
        "COMPLETED",
        'ACTIVE',
        //!nagpa add hin book res status
        'FOR CSM',
        'COMPLETED',
        'EXTENDING',
        'RENEWING',
        'APPROVED',
        'DAMAGED',
        'RECEIVED'
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_res', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->longText('trace_number');
            $table->enum('status', self::BOOK_RES_STATUS)->default(self::BOOK_RES_STATUS[1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_res');
    }
};
