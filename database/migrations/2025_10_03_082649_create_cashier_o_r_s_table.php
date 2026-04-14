<?php

use App\Models\ChargeCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const OR_AVAILABILITY = ["AVAILABLE", "UNAVAILABLE"];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cashier_o_r_s', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->string("name", 255)->unique();
            $table->foreignIdFor(ChargeCategory::class)->constrained()->cascadeOnDelete();
            $table->string("office");
            $table->enum("status", self::OR_AVAILABILITY)->default(self::OR_AVAILABILITY[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier_o_r_s');
    }
};
