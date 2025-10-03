<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('favicon')->nullable(); // path file
            $table->string('logo')->nullable();    // path file
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
