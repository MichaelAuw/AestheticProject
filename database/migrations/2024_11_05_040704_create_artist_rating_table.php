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
        Schema::create('ARTIST_RATING', function (Blueprint $table) {
            $table->id('ARTIST_RATING_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->foreign('USER_ID')->references('USER_ID')->on('MASTER_USER');
            $table->unsignedBigInteger('ARTIST_ID');
            $table->foreign('ARTIST_ID')->references('ARTIST_ID')->on('ARTIST');
            $table->longText('CONTENT');
            $table->integer('USER_RATING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ARTIST_RATING');
    }
};
