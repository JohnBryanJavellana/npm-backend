<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ChargeCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(ChargeCategory::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->decimal('amount');
            $table->longText('description')->nullable();
            $table->enum('service_type', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
