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
        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('writer');
            $table->string('language');
            $table->date('release_date');
            $table->string('lyrics');
            $table->string('duration');
            $table->string('comment');
            $table->string('music');
            $table->string('tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song');
    }
};
