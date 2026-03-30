<?php

use App\Models\DormitoryInvoice;
use App\Models\DormitoryService;
use App\Models\DormitoryTenant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const REQ_SERVICE_STATUS = ["PENDING", "APPROVED", "DECLINED", "DONE", "FOR PAYMENT" , "CANCELLED", "PAID", "PROCESSING PAYMENT"];
    public const FEE_TYPES = ["UNSET", "APPROVED_WITH_FEE", "APPROVED_NO_FEE"];

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
            $table->foreignIdFor(DormitoryInvoice::class)->nullable()->constrained()->cascadeOnDelete();
            $table->double('charge', 65, 2)->default(0);
            $table->longText('remarks')->nullable();
            $table->enum("status", self::REQ_SERVICE_STATUS)->default(self::REQ_SERVICE_STATUS[0]);
            $table->enum("fee_type", self::FEE_TYPES)->default(self::FEE_TYPES[0]);
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
