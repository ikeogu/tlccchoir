<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noe__team_id');
            $table->integer('team_id')->nullable();
            $table->text('african_class_lyrics')->nullable();
            $table->text('african_con_lyrics')->nullable();
            $table->text('acappella_lyrics')->nullable();
            $table->string('african_class_song')->nullable();
            $table->string('african_con_song')->nullable();
            $table->string('acappella_song')->nullable();
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
        Schema::dropIfExists('musics');
    }
}
