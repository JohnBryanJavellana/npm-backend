<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User,
    Book
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_res', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('CASCADE');
            $table->longText('trace_number')->nullable();
            $table->longText('purpose');
            $table->enum('status', ["COMPLETED", "ACTIVE", "FOR CSM", "EXTENDING"])->default("ACTIVE");
            $table->enum('type', ["WALK-IN", "ONLINE"]);
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
