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
        Schema::create('tb_review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembeli_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('tambal_ban_id')->references('id')->on('tb_tambal_ban')->onDelete('cascade');
            $table->text('deskripsi');
            $table->string('image')->nullable();
            $table->unsignedInteger('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
