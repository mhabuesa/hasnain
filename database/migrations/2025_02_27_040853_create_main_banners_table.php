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
        Schema::create('main_banners', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_banners');
    }
};
