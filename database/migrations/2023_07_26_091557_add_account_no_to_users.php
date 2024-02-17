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
        Schema::table('users', function (Blueprint $table) {
            $table->string('barber_name');
            $table->string('referral_code');
            $table->integer('referral_points');
            $table->string('discount_code');
            $table->string('account_number');
            $table->string('account_type');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('barber_name');
            $table->dropColumn('referral_code');
            $table->dropColumn('referral_points');
            $table->dropColumn('discount_code');
            $table->dropColumn('account_number');
            $table->dropColumn('account_type');
        });
    }
};
