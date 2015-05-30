<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title')->unique();
		});

		Schema::table('departments', function (Blueprint $table) {
			$table->integer('parent_id')->unsigned()->index()->nullable();
			$table->foreign('parent_id')->references('id')->on('departments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departments');
	}

}
