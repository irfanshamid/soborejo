<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_counters', function (Blueprint $table) {
            $table->id();
            $table->longText('content')->nullable();
            $table->string('title_counter_1')->nullable();
            $table->string('total_counter_1')->nullable();
            $table->string('title_counter_2')->nullable();
            $table->string('total_counter_2')->nullable();
            $table->string('title_counter_3')->nullable();
            $table->string('total_counter_3')->nullable();
            $table->timestamps();
        });

        // Insert default row (agar cuma 1 data)
        \DB::table('site_counters')->insert([
            'id' => 1,
            'content' => 'It is a long established fact that a reader will be distracted by the readable content...',
            'title_counter_1' => 'Revenue Generated',
            'total_counter_1' => '455M+',
            'title_counter_2' => 'Years of experience',
            'total_counter_2' => '7+',
            'title_counter_3' => 'Building Constructed',
            'total_counter_3' => '700+',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_counters');
    }
};

