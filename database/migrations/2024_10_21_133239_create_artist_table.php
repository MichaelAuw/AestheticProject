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
        Schema::create('ARTIST', function (Blueprint $table) {
            $table->id('ARTIST_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->foreign('USER_ID')->references('USER_ID')->on('MASTER_USER');
            $table->unsignedBigInteger('BUYER_ID')->nullable();
            $table->foreign('BUYER_ID')->references('BUYER_ID')->on('BUYER');
            $table->string('LOCATION');
            $table->string('ROLE');
            $table->date('JOIN_DATE');
            $table->text('ABOUT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ARTIST');
    }
};
