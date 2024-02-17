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
        Schema::create('affiliateCoupon', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->string('code')->unique();
            $table->enum('type', ['fixed', 'percentage']);
            $table->integer('value')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('expire_date')->nullable();
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliateCoupon');

    }
};
