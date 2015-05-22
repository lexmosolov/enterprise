<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('title');
			$table->string('body');
			$table->timestamps();
		});

		Schema::create('entry_user', function (Blueprint $table) {
			$table->integer('entry_id')->unsigned()->index();
			$table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});

		Schema::create('department_entry', function (Blueprint $table) {
			$table->integer('entry_id')->unsigned()->index();
			$table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
			$table->integer('department_id')->unsigned()->index();
			$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entries');
	}

}
