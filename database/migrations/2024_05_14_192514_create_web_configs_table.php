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
        Schema::create('web_configs', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('footer_string')->nullable();
            $table->string('main_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('additional_color')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_configs');
    }
};
