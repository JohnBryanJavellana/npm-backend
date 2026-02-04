<?php

use App\Models\FacilityType;
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
        Schema::create('facilities', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(FacilityType::class, "facility_type");
            $table->string("name", 255);
            $table->enum("availability_status", ["Available", "Unavailable"]);    
            $table->string("location", 255);
            $table->dateTime( "open_time");
            $table->dateTime( "closed_time");
            $table->boolean("requires_approval");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
