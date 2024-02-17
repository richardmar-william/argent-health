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
        Schema::create('ques_ans', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('category')->nullable();
            $table->string('question');
            $table->string('answer');
            $table->string('details')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ques_ans');
    }
};
