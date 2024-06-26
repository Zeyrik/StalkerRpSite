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
            $table->bigInteger("discord_user_id");
            $table->string('nickname');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->boolean('verified')->default(false);
            $table->string("token");
            $table->string("refresh_token");
            $table->timestamps();
            $table->softDeletes();
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
