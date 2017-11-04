<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table) {
            $table->increments('id');
            $table->string('crn');
            $table->integer('number');
            $table->string('room');
            $table->string('day');
            $table->time('begin');
            $table->time('end');
            $table->integer('professor_id');
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->integer('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
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
		Schema::drop('sections');
	}

}
