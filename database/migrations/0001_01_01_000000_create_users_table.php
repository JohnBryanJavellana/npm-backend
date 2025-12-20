<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('email')->unique();
            $table->enum('gender', ['MALE', 'FEMALE'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('role', [
                'SUPERADMIN',
                'TRAINEE',
                'ADMIN-DORMITORY',
                'ADMIN-ENROLLMENT',
                'ADMIN-LIBRARY',
                'TRAINER',
                'CASHIER'
            ])->default('SUPERADMIN');
            $table->string('password');
            $table->decimal('credit_amount', 10, 2)->default(0);
            $table->enum('isSocial', ['YES', 'NO'])->default(value: 'NO');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default(value: 'ACTIVE');
            $table->string('profile_picture', 255)->default('default-avatar.png');
            $table->string('qr', 255);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
