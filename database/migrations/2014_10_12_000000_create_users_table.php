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
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_text');
            $table->string('resume');
            $table->string('profile');
            $table->string('address');
            $table->longtext('description');
            $table->bigInteger('country_id');
            $table->bigInteger('province_id');
            $table->string('phone');
            $table->string('passport_no');
            $table->bigInteger('company_id');
            $table->string('approved')->default(0);
            $table->string('banned')->default(0);
            $table->string('status')->default(1);
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
