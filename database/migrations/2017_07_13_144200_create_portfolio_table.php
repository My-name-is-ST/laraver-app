<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('filters_id');
            $table->string('name',100);
            $table->string('img',100);
            $table->string('link',200)->default("#");
            $table->timestamps();

            $this->foreign('filters_id')->references('id')->on('filters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('portfolios');
        Schema::drop('filters');
    }
}
