<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fee_presets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // إضافة القيم الافتراضية
        DB::table('fee_presets')->insert([
            ['name' => 'Standard', 'description' => 'Standard fee preset', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Premium', 'description' => 'Premium fee preset', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('fee_presets');
    }
};

