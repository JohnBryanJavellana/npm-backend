<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{
    User,
    Training,
    TrainingSchedule
};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrolled_courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Training::class)->constrained()->cascadeOnDelete();
            $table->string('bgColor')->nullable();
            $table->enum('enrolled_course_status', [
                'PENDING',
                'RESERVED',
                'ENROLLED',
                'COMPLETED',
                'CANCELLED',
                'DECLINED',
                'FOR-PAYMENT',
                'IR',
                'CSFB',
                'PROCESSING PAYMENT'
            ])->default('PENDING');
            $table->enum('isExpired', ['YES', 'NO'])->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolled_courses');
    }
};
