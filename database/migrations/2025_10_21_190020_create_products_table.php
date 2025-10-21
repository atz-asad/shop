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
            $table->integer('regular_price') -> default(0);
            $table->integer('sale_price') -> nullable();
            $table->integer('stock') -> nullable();
            $table->integer('rating') -> default(0);
            $table->string('short_desc') -> nullable(0);
            $table->string('long_desc') -> nullable(0);
            $table->longText('gallery') -> nullable();


            //relational schema
            $table -> foreignId("brands_id") -> constrained() -> onDelete('cascade');

            //base info
            $table->string('status')->default(true);
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
