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
			$table->text('avatarurl')->default(null);
			$table->integer('health')->default(0);
			$table->integer('initiative')->default(0);
            $table->boolean('enabled')->default(false);
			$table->unsignedInteger('gameroom_id')->nullable();
			$table->unsignedInteger('user_id')->nullable();
			$table->foreign('gameroom_id')->references('id')->on('gamerooms');
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
