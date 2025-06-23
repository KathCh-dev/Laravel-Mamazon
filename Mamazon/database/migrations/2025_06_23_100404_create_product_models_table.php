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
        Schema::create('product_models', function (Blueprint $table) {
            $table->uuid('id_product')->primary();
            $table->string('product_title');
            $table->string('product_slug');
            $table->text('product_description');
            $table->double('price');
            $table->string('product_image');
            $table->created_at('creation_date');
            $table->updated_at('updated_date');            

            $table->string('id_category');
            $table->foreign('id_category')->references('id_category')->on('categories')->onDelete('cascade');
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
