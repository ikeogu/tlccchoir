<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_presentations', function (Blueprint $table) {
            
                $table->increments('id');
                $table->string('title');
                $table->string('body',5000);
                $table->string('type');
                $table->string('author');
                $table->integer('user_id');
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
        Schema::dropIfExists('song_presentations');
    }
}
