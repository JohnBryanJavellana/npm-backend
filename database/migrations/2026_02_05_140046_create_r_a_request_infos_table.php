<?php

use App\Models\User;
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
        Schema::create('r_a_request_infos', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->longText('trace_number');
            $table->enum('request_type', [
                'EQUIPMENT',
                'FACILITY',
                'HYBRID'
            ])->default('EQUIPMENT');
            $table->enum('status', [
                'PENDING',
                'ACTIVE',
                'FOR CSM',
                'COMPLETED'
            ])->default('PENDING');
            $table->longText('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_request_infos');
    }
};
