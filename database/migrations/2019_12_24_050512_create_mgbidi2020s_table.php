<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMgbidi2020sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mgbidi2020s', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('school');
            $table->string('state');
            $table->string('gender');
            $table->string('health_status');
            $table->string('p_uniform');
            $table->string('m_uniform');
            $table->string('w_uniform');
            $table->string('o_uniform');
            $table->string('b_uniform');
            $table->string('n_uniform');
            $table->string('ties');
            $table->string('comment')->nullable();
            $table->string('new_uniform');
            $table->string('food_item');

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
        Schema::dropIfExists('mgbidi2020s');
    }
}
