<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('role_id')->unsigned()->index()->nullable();
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('department_user', function (Blueprint $table)
		{
			$table->integer('department_id')->unsigned()->index();
			$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('department_user');
	}

}
