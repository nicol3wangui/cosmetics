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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable(); // Add the category_id column
            $table->unsignedBigInteger('user_id')->nullable(); // Add the category_id column
            $table->longText('qty')->nullable();
           
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Set foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null'); // Set foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
