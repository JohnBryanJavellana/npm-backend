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
        Schema::create('dormitory_inventories', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->longText("control_number");
            $table->string("name", 255);
            $table->enum("is_consumable", ['YES', 'NO']);
            $table->longText("description");
            $table->longText("filename")->nullable();
            $table->double("charge", 65, 2);
            // $table->foreignIdFor(Charge::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_inventories');
    }
};
