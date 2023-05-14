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
        Schema::create('latest_games', function (Blueprint $table) {
            $table->id();
            $table->string('img_1');
            $table->string('img_2');
            $table->string('team1title');
            $table->string('team1score');
            $table->string('matchtitle');
            $table->string('matchdate');
            $table->string('team2title');
            $table->string('team2score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latest_games');
    }
};
