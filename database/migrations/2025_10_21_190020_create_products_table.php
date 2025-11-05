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

            //base info
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('subtitle');
            $table->string('feature_image');
            $table->integer('regular_price');
            $table->integer('sale_price');
            $table->integer('stock')->default(1);
            $table->integer('rating')->default(0);
            $table->longText('short_desc')->nullable(0);
            $table->longText('long_desc')->nullable(0);
            $table->longText('gallery')->nullable();

            //relational schema
            $table -> foreignId("brand_id") -> constrained() -> onDelete('cascade');

            //base info
            $table->boolean('status')->default(true);
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
