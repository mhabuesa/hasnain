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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('product_code');
            $table->string('category_id');
            $table->string('subcategory_id');
            $table->string('brand')->nullable();
            $table->string('warranty')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('current_price');
            $table->string('discount')->nullable();
            $table->string('stock')->nullable();
            $table->longText('short_description');
            $table->longText('description');
            $table->string('preview');
            $table->text('slug');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
