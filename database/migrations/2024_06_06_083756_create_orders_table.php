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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->date('order_date')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            
            $table->string('product_id');
            $table->string('product_name');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->bigInteger('total_price');
            $table->string('product_pic');
            $table->string('payment_status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
