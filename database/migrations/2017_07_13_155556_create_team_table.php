<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('position',100);
            $table->string('img',100);
            $table->string('text');
            $table->string('twitter',150)->default("0");
            $table->string('facebook',150)->default("0");
            $table->string('pinterest',150)->default("0");
            $table->string('google_plus',150)->default("0");
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
        Schema::drop('teams');
    }
}
