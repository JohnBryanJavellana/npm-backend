<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('terms_and_conditions', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->longText('content');
            $table->boolean("is_active")->default(true);
            $table->enum("module", ["LIBRARY", "DORMITORY", "ENROLLMENT", "RECREATIONAL", "CASHIER"]);
            $table->foreignIdFor(User::class, 'editor')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms_and_conditions');
    }
};
