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
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('payment_provider_id')->unsigned();
            $table->bigInteger('coupon_id')->unsigned()->nullable();
            $table->decimal('discount_fixed')->nullable();
            $table->decimal('normal_price');
            $table->decimal('final_price');
            $table->enum('status', ['pending', 'processing', 'completed', 'declined'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_provider_id')->references('id')->on('payment_providers');
            $table->foreign('coupon_id')->references('id')->on('coupons');
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
