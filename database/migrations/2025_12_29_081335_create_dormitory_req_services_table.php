<?php

use App\Models\DormitoryService;
use App\Models\DormitoryTenant;
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
        Schema::create('dormitory_req_services', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryTenant::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(DormitoryService::class)->constrained()->cascadeOnDelete();
            $table->longText('remarks')->nullable();
            $table->enum("status", ["PENDING", "APPROVED", "DECLINED", "DONE"])->default('PENDING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_req_services');
    }
};
