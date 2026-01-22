<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BookGenre;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BookGenre::class)->constrained()->cascadeOnDelete(); #
            $table->longText('title');
            $table->string('author', 255);
            $table->longText('editor');
            $table->string('publisher', 255);
            $table->string('type', 255);
            $table->integer('pages')->nullable();
            $table->string('call_number');
            $table->double('price', 65, 2)->default(0.00);
            $table->string('isbn')->nullable();
            $table->string('file_location', 255)->nullable();
            $table->year('publication_year');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_catalogs');
    }
};
