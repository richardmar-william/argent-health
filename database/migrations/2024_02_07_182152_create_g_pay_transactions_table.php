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
        Schema::create('g_pay_transactions', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('order_id');
            $table->string('transaction_id');
            $table->string('type');
            // $table->string('type');
            $table->tinyInteger('status');
            $table->decimal('amount');
            $table->decimal('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_pay_transactions');
    }
};
