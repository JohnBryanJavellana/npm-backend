<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Facility, User};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recreational_requests', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Facility::class)->nullable()->constrained()->cascadeOnDelete();
            $table->enum("request_type", ["Equipment", "Facility", "Mixed"]);
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->foreignIdFor(User::class, "processed_by")->nullable()->constrained()->cascadeOnDelete();
            $table->dateTime( "processed_at");
            $table->dateTime( "returned_at");
            $table->enum("status", ["Approved", "Rejected", "Cancelled", "Pending", "Completed", "Active"])->default("Pending");
            $table->string("remarks", 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recreational_requests');
    }
};
