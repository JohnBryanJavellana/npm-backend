<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    BookCatalog
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(BookCatalog::class)->constrained()->cascadeOnDelete();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->longText('photo');
            $table->string('pdf_copy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
