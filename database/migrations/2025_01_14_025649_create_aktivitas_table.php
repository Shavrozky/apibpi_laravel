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
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produks_id'); // Kolom 'product_id'
            $table->unsignedBigInteger('user_id');    // Kolom 'user_id'
            $table->enum('action', ['CREATE', 'UPDATE', 'DELETE']); // Kolom 'action'

            // Foreign key constraints
            $table->foreign('produks_id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas');
    }
};
