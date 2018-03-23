<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');    
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('gameroom_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('gameroom_id')->references('id')->on('gamerooms');
			$table->text('title');
			$table->text('body');
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
        Schema::dropIfExists('notes');
    }
}
