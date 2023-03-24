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
        Schema::create('playlist_song', function (Blueprint $table) {
                $table->foreignId('playlist_id')->constrained('playlist')->onDelete('cascade');
                $table->foreignId('song_id')->constrained('songs')->onDelete('cascade');
                $table->timestamps();
           
            
            // $table->unsignedBigInteger('playlist_id');
            // //foreing key to playlist table
            // $table->foreign('playlist_id')->references('id')->on('playlist')->onDelete('cascade');
            // $table->unsignedBigInteger('song_id');
            // //foreing key to song table
            // $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_song');
    }
};
