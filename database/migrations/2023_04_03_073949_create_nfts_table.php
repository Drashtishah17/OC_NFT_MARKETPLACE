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
        Schema::create('nfts', function (Blueprint $table) {
            $table->id('nft_id');
            $table->string('nft_name');
            $table->string('nft_description');
            $table->Integer('nft_price');
            $table->string('nft_image_path')->nullable();
            $table->string('category');
            $table->string('usernames');
            $table->foreign('usernames')->references('username')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
