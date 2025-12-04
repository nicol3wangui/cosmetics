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
           
            $table->longText('product_image')->default('product.jfif');
            $table->longText('product_name')->nullable();
            $table->longText('product_description')->nullable();
            $table->longText('product_price')->nullable();
            $table->longText('product_qty')->nullable();

            

            $table->unsignedBigInteger('category_id')->nullable(); // Add the category_id column
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // Set foreign key constraint

            $table->unsignedBigInteger('brand_id')->nullable(); // Add the brand_id column
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null'); // Set foreign key constraint

            $table->unsignedBigInteger('skintype_id')->nullable(); // Add the course_id column
            $table->foreign('skintype_id')->references('id')->on('skin_types')->onDelete('set null'); // Set foreign key constraint

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
