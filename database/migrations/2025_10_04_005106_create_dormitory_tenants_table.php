<?php
# 1
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{DormitoryRoom, User};

return new class extends Migration
{
    public const TENANT_STATUS = [
        'PENDING',
        'TERMINATED',
        'APPROVED',
        'ACTIVE',
        'CANCELLED',
        'EXTENDING',
        'TRANSFERRING',
        'TRANSFERRED',
        'FOR PAYMENT',
        'REJECTED',
        'PAID',
        "PROCESSING PAYMENT",
        "RESERVED",
        "FOR CSM"
    ];

    public const STATUS_OF_OCCUPANCY = [
        'TRAINEE',
        'NON-PAYING GUEST/VISITOR',
        'NMP PERSONNEL (REGULAR/JOW)',
        'PAYING GUEST/VISITOR'
    ];

    public const PROCESS_METHOD = [
        "ONLINE",
        "WALK-IN"
    ];

    public const ROOM_TYPE = [
        "AIRCON",
        "NON-AIRCON"
    ];

    public const ACCOMMODATION = [
        "SINGLE",
        "SHARED",
        "COUPLE"
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_tenants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdFor(DormitoryRoom::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'updated_by')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('trace_number', 255);
            $table->enum('transfer_type', ['ROOM', 'CLASS'])->nullable();
            $table->longText("purpose")->nullable();
            $table->dateTime('check_in_datetime');
            $table->dateTime('check_out_datetime');
            $table->dateTime('offset_check_out_date')->nullable();
            $table->string('remarks')->nullable();
            $table->enum('accommodation', self::ACCOMMODATION)->default(self::ACCOMMODATION[1]);
            $table->enum('status_of_occupancy', self::STATUS_OF_OCCUPANCY)->default(self::STATUS_OF_OCCUPANCY[0])->nullable();
            $table->enum('room_type', self::ROOM_TYPE);
            $table->enum('tenant_status', self::TENANT_STATUS)->default(self::TENANT_STATUS[0]);
            $table->enum('process_type', self::PROCESS_METHOD)->default(self::PROCESS_METHOD[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_tenants');
    }
};
