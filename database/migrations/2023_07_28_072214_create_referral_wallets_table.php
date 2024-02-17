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
        Schema::create('referral_wallets', function (Blueprint $table) {
            $table->id();
            $table->string('referral_id');
            $table->integer('user_id');
            $table->integer('cart_ammount');
            $table->integer('total_ammount');
            $table->string('aff_coupan_id');
            $table->string('commission_%');
            $table->integer('commission_ammount');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_wallets');
    }
};
