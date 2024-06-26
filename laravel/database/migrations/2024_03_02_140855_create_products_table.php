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
            $table->foreignId('sub_category_id')->constrained();
            $table->string('photo_one')->nullable();
            $table->string('photo_two')->nullable();
            $table->string('photo_three')->nullable();
            $table->string('photo_four')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->integer('stock_quantity');
            $table->text('description');
            $table->integer('discount')->nullable();
            $table->tinyInteger('payment_type')->default(0);
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
