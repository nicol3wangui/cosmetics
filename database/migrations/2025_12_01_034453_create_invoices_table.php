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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Add the category_id column
            $table->longText('invoice_no')->nullable();
            $table->longText('total_item')->nullable();
            $table->longText('total_amount')->nullable();
            $table->longText('invoice_status')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Set foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
