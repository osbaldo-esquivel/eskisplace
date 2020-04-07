<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKingsCupGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kings_cup_games', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['ready', 'in_progress', 'ended']);
            $table->integer('user_id');
            $table->json('current_game');
            $table->integer('turns');
            $table->json('users');
            $table->json('last_turn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kings_cup_games');
    }
}
