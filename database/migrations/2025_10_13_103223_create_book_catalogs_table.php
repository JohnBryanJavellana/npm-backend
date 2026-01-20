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
            $table->foreignIdFor(BookGenre::class)->constrained()->cascadeOnDelete();
            $table->longText('title');
            $table->longText('author');
            $table->string('author', 255);
            $table->string('publisher', 255);
            $table->string('language');
            $table->integer('pages')->nullable();
            $table->string('call_number');
            $table->string('isbn')->nullable();
            $table->longText('edition');
            $table->longText('bibliography')->nullable();
            $table->longText('description');
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
