<?php

use App\Models\Charge;
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
        Schema::create('dormitory_services', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->double('charge', 65, 2);
            $table->longText('description');
            $table->enum("status", ["AVAILABLE", "UNAVAILABLE"])->default('AVAILABLE');
            $table->timestamps();

            // $table->foreignIdFor(Charge::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_services');
    }
};
