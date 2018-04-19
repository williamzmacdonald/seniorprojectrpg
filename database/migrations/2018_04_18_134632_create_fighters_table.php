<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFightersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fighters', function (Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->text('avatarurl');
			$table->integer('health');
			$table->integer('initiative');
			$table->unsignedInteger('combat_id');
			$table->unsignedInteger('user_id')->nullable();
			$table->foreign('combat_id')->references('id')->on('combats');
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fighters');
    }
}
