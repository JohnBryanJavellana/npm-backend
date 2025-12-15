<?php

use App\Models\{AdditionalTraineeInfo, Requirement};
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
        Schema::create('training_reg_files', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(Requirement::class)->constrained()->ondelete('cascade');
            $table->foreignIdFor(AdditionalTraineeInfo::class)->constrained()->ondelete('cascade');
            $table->longText('filename');
            $table->longText('remarks')->nullable();
            $table->enum('locked', ['Y', 'N'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_reg_files');
    }
};
