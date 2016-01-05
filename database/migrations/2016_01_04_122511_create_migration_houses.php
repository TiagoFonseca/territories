<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('houses', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('slip_id');
          $table->integer('number');
          $table->string('street');
          $table->string('type');
          $table->string('status');
          $table->string('description');
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
          Schema::drop('houses');
    }
}
