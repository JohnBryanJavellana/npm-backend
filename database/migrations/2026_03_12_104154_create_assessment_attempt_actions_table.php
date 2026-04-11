<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    AssessmentAttempt,
    User
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assessment_attempt_actions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(AssessmentAttempt::class);
            $table->enum('actions', [
                'TAB_SWITCH',
                'COPY_ATTEMPT',
                'PASTE_ATTEMPT',
                'SCREENSHOT_ATTEMPT'
            ]);
            $table->integer('action_count')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_attempt_actions');
    }
};
