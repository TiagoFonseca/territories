<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationAssignments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('assignments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_id')->unsigned;
          $table->string('map_id')->unsigned;
          $table->timestamp('assigned_on')->nullable();
          $table->timestamp('finished_on')->nullable();
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
        Schema::drop('assignments');
    }
}
