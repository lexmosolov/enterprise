<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->default('');
			$table->boolean('completed')->default(false);
			$table->text('description')->default('');
			$table->integer('guarantor_id')->unsigned()->index();
			$table->foreign('guarantor_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('performer_id')->unsigned()->index();
			$table->foreign('performer_id')->references('id')->on('users')->onDelete('cascade');
			$table->date('deadline')->nullable();
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
		Schema::drop('tasks');
	}

}
