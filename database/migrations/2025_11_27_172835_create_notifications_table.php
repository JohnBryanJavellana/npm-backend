<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignIdfor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdfor(User::class, 'to_user')->nullable();
            $table->enum('type', ['LIBRARY', 'ENROLLMENT', 'DORMITORY', 'ACCOUNT', 'INVOICES', 'RECREATIONAL']);
            $table->longText('message');
            $table->enum('is_read', ['YES', 'NO'])->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
